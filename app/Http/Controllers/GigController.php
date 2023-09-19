<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use App\Models\Category;
use App\Models\Gig;
use Auth;
use DB;
use Exception;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Http\Request;
use Storage;
use Str;

class GigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('suppliers.service.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return response()->json($request->all());

        try {
            $request->validate([
                'title' => ['required'],
                'category_id' => ['required'],
                'description' => ['required'],
                'packages' => ['required'],
                'faqs' => ['required'],
                'images' => ['required'],
                'videos' => ['nullable'],
            ]);

            $faqs = json_decode($request->faqs);
            $packages = json_decode($request->packages);
            // $files = json_decode($request->uploads);


            $faqData = array_map(function ($faq) {
                return [
                    'question' => $faq->question,
                    'answer' => $faq->answer,
                ];
            }, $faqs);

            $packageData = array_map(function ($package) {
                return [
                    'package' => $package->package,
                    'price' => $package->price,
                    'description' => nl2br($package->description),
                ];
            }, $packages);

            // return response()->json(['faqu' => $shits]);
            DB::beginTransaction();

            $gig = Auth::user()->gigs()->create([
                'title' => $request->title,
                'category_id' => $request->category_id,
                'description' => $request->description,
            ]);

            $gig->faqs()->createMany($faqData);
            $gig->gigPackages()->createMany($packageData);

            $paths = [];

            foreach ($request->file('images') as $file) {
                // Open the image
                $image = Image::make($file);

               
                $image->encode('jpg', 50); 

                // Generate a unique filename
                $filename = Auth::id() . "/gig/{$gig->id}/" . Str::random(20) . '.' . $file->getClientOriginalExtension();

                // Save the compressed image
                Storage::disk('public')->put($filename, $image);

                $paths[] = [
                    'url' => $filename,
                    'type' => 'image',
                ];
            }

            if ($request->videos) {

                foreach ($request->file('videos') as $file) {

                    $paths[] = [
                        'url' => $file->store(Auth::id() . "/gig/{$gig->id}", 'public'),
                        'type' => 'video',
                    ];
                }
            }

            // return response()->json($paths);

            $gig->gigUploads()->createMany($paths);

            DB::commit();
            return response()->json('Successfully created Gig!');
        } catch (Exception $e) {
            DB::rollBack();

            return response()->json([
                'message' => $e->getMessage(),
            ], 422);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function show(Gig $gig)
    {

        return view('suppliers.service.show', compact('gig'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function edit(Gig $gig)
    {
        $categories = Category::all();
        $gig = $gig->load(['faqs', 'gigUploads', 'gigPackages']);
        return view('suppliers.service.edit', compact('gig', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gig $gig)
    {
        $cI = json_decode($request->currentImages);
        $cV = json_decode($request->currentVideos);
        $cU = array_merge($cI, $cV);

        // return response()->json(['data' => array_column($cU, 'id')]);

        try {
            $request->validate([
                'title' => ['required'],
                'category_id' => ['required'],
                'description' => ['required'],
                'packages' => ['required'],
                'faqs' => ['required'],
                'currentImages' => ['nullable'],
                'currentVideos' => ['nullable'],
                'images' => ['nullable'],
                'videos' => ['nullable'],
            ]);

            $faqs = json_decode($request->faqs);
            $packages = json_decode($request->packages);


            $faqData = array_map(function ($faq) {
                return [
                    'id' => $faq->id ?? null,
                    'question' => $faq->question,
                    'answer' => $faq->answer,
                ];
            }, $faqs);

            $packageData = array_map(function ($package) {
                return [
                    'id' => $package->id ?? null,
                    'package' => $package->package,
                    'price' => $package->price,
                    'description' => $package->description,
                ];
            }, $packages);

            // return response()->json(['faqu' => array_column($packageData, 'id')]);

            DB::beginTransaction();

            $gig->update([
                'title' => $request->title,
                'category_id' => $request->category_id,
                'description' => $request->description,
            ]);

            $gig->faqs()->whereNotIn('id', array_column($faqData, 'id'))->delete();
            $gig->gigPackages()->whereNotIn('id', array_column($packageData, 'id'))->delete();

            // $gig->faqs()->updateOrCreateMany($faqData);
            // $gig->gigPackages()->updateOrCreateMany($packageData);
            foreach ($faqData as $faq) {
                $gig->faqs()->updateOrCreate(
                    ['id' => $faq['id']],
                    [
                        'question' => $faq['question'],
                        'answer' => $faq['answer'],
                    ]
                );
            }

            foreach ($packageData as $package) {
                $gig->gigPackages()->updateOrCreate(
                    ['id' => $package['id']],
                    [
                        'package' => $package['package'],
                        'price' => $package['price'],
                        'description' => nl2br($package['description']),
                    ]
                );
            }


            // return response()->json(array_column($cU, 'id'));
            $gig->gigUploads()->whereNotIn('id', array_column($cU, 'id'))->delete();

            $paths = [];

            if ($request->images) {

                foreach ($request->file('images') as $file) {
                    
                    $paths[] = [
                        'url' => $file->store(Auth::id() . "/gig/{$gig->id}", 'public'),
                        'type' => 'image',
                    ];
                }
            }

            if ($request->images) {
                foreach ($request->file('images') as $file) {
                    // Open the image
                    $image = Image::make($file);
    
                    // Compress the image with a desired quality (e.g., 70)
                    $image->encode('jpg', 70); // You can change 'jpg' to 'png' or other formats if needed
    
                    // Generate a unique filename
                    $filename = Auth::id() . "/gig/{$gig->id}/" . Str::random(20) . '.' . $file->getClientOriginalExtension();
    
                    // Save the compressed image
                    Storage::disk('public')->put($filename, $image);
    
                    $paths[] = [
                        'url' => $filename,
                        'type' => 'image',
                    ];
                }
            }

            $gig->gigUploads()->createMany($paths);


            // if ($gig->gigUploads->count() < 1)
            //     throw new Exception('Not enough upload');


            DB::commit();
            return response()->json('Successfully updated Gig!');
        } catch (Exception $e) {
            DB::rollBack();

            return response()->json([
                'message' => $e->getMessage(),
            ], 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gig $gig)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

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
        //
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
                'uploads' => ['required'],
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
                    'description' => $package->description,
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
            foreach ($request->file('uploads') as $file) {
                $mimeType = $file->getMimeType();

                if (str_starts_with($mimeType, 'image/')) {
                    $type = 'image';
                } else if (str_starts_with($mimeType, 'video/')) {
                    $type = 'video';
                } else {
                    return response()->json('Error', 422);
                }
                $paths[] = [
                    'url' => $file->store(Auth::id() . "/gig/{$gig->id}", 'public'),
                    'type' => $type
                ];
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
        //
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
        //
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

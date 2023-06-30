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
        $services = Gig::where('status', 'approved')->orderBy('created_at', 'desc')->get();
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
                'videos' => ['required'],
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

            foreach ($request->file('images') as $file) {

                $paths[] = [
                    'url' => $file->store(Auth::id() . "/gig/{$gig->id}", 'public'),
                    'type' => 'image',
                ];
            }

            foreach ($request->file('videos') as $file) {

                $paths[] = [
                    'url' => $file->store(Auth::id() . "/gig/{$gig->id}", 'public'),
                    'type' => 'video',
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
    public function update(Request $request, $gig)
    {
        return response()->json($request->all());
        try {
            $request->validate([
                'title' => ['required'],
                'category_id' => ['required'],
                'description' => ['required'],
                'packages' => ['required'],
                'faqs' => ['required'],
                'images' => ['required'],
                'videos' => ['required'],
            ]);

            $faqs = json_decode($request->faqs);
            $packages = json_decode($request->packages);


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

            $gig->update([
                'title' => $request->title,
                'category_id' => $request->category_id,
                'description' => $request->description,
            ]);

            // $gig->faqs()->updateOrCreateMany($faqData);
            // $gig->gigPackages()->updateOrCreateMany($packageData);

            $paths = [];
            foreach ($request->file('images') as $file) {

                $paths[] = [
                    'url' => $file->store(Auth::id() . "/gig/{$gig->id}", 'public'),
                    'type' => 'image',
                ];
            }

            foreach ($request->file('videos') as $file) {

                $paths[] = [
                    'url' => $file->store(Auth::id() . "/gig/{$gig->id}", 'public'),
                    'type' => 'video',
                ];
            }

            // return response()->json($paths);

            // $gig->gigUploads()->createMany($paths);

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

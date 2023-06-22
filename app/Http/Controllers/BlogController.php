<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('blog.index', compact('blogs', 'categories'));
    }

    public function blog()
    {

        $categories = Category::all();
        $blogs = Blog::where('status', 'approved')->orderBy('created_at', 'desc')->get();
        return view('blog', compact('blogs', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();
        return view('blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|max:255',
            'image' => 'required|image',
            'description' => 'required',
        ]);
        $imagePath = $request->file('image')->store('public');
        $imageName = basename($imagePath);

        $blog = new Blog;
        $blog->name = $request->input('name');
        $blog->image = $imageName;
        $blog->description = $request->input('description');
        $blog->category_id = $request->category_id;
        $blog->user_id = Auth::id();
        $blog->save();

        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {

        $categories = Category::all();
        return view('blog.show', compact('blog', 'categories'));
    }


    public function showM()
    {
        $categories = Category::all();
        $blogs = Blog::all();
        return view('blog.show-more', compact('blogs', 'categories'));
    }

    public function categorized(Request $request)
    {
        $categories = Category::all();
        $blogs = Blog::where('category_id', $request->get('category_id'))->get();
        return view('blog.categorized', compact('blogs', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('blog.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {



        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|max:255',
            'description' => 'nullable',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blog', 'public');
            $blog->image = $imagePath;
        }

        $blog->name = $request->name;
        $blog->category_id = $request->category_id;
        $blog->description = $request->input('description');
        $blog->save();

        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use App\Models\Finder;
use App\Models\Category;
use Illuminate\Http\Request;

class FinderController extends Controller
{

    public function search(Request $request)
    {
        $query = $request->input('search');
        $gigs = Gig::where('title', 'like', "%{$query}%")
            ->orWhereHas('category', function ($categoryQuery) use ($query) {
                $categoryQuery->where('name', 'like', "%{$query}%");
            })
            ->approved()
            ->with('category')
            ->get();

        return view('filtered', [
            'query' => $query,
            'gigs' => $gigs,
        ])->with('query', $query);
    }

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
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Finder  $finder
     * @return \Illuminate\Http\Response
     */
    public function show(Finder $finder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Finder  $finder
     * @return \Illuminate\Http\Response
     */
    public function edit(Finder $finder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Finder  $finder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Finder $finder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Finder  $finder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Finder $finder)
    {
        //
    }
}

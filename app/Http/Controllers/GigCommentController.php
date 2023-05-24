<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use App\Models\GigComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GigCommentController extends Controller
{
    public function comment(Request $request, Gig $gig)
    {
        Auth::user()->gigComments()->create([
            'gig_id' => $gig->id,
            'text' => $request->review,
            'ratings' => $request->ratings,
        ]);

        return redirect()->back()->with('success', 'Successfully reviewed Gig');
    }

    public function reply(Request $request, GigComment $comment)
    {
        //
    }
}

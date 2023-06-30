<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use App\Models\GigComment;
use Illuminate\Http\Request;
use App\Models\GigCommentReply;
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
        $reply = new GigCommentReply();
        $reply->text = $request->review; // Update the field name to 'review'
        $reply->user_id = Auth::id(); // Set the user ID for the commenter
        $reply->commenter_id = Auth::id(); // Set the commenter ID explicitly
        $reply->gig_comment_id = $comment->id; // Set the gig_comment_id to associate the reply with the original comment
        $reply->save();

        return redirect()->back()->with('success', 'Successfully replied to comment');
    }
}

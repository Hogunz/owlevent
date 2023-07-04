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
        $reply->text = $request->review;

        $reply->commenter_id = Auth::id();
        $reply->gig_comment_id = $comment->id;
        $reply->save();
        return redirect()->back()->with('success', 'Successfully replied to comment');
    }
    public function updateReply(Request $request, GigCommentReply $reply)
    {
        if ($reply->commenter_id != Auth::id()) {
            return redirect()->back()->with('error', 'You are not authorized to edit this reply');
        }
        $reply->text = $request->review;
        $reply->save();

        return redirect()->back()->with('success', 'Reply updated successfully');
    }

    public function destroyReply(GigCommentReply $reply)
    {

        if ($reply->commenter_id != Auth::id()) {
            return redirect()->back()->with('error', 'You are not authorized to delete this reply');
        }


        $reply->delete();

        return redirect()->back()->with('success', 'Reply deleted successfully');
    }
}

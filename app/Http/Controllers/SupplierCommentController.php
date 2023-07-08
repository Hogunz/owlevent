<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\SupplierComment;
use App\Models\SupplierCommentReply;
use Illuminate\Support\Facades\Auth;

class SupplierCommentController extends Controller
{
    public function comment(Request $request, User $user)
    {

        Auth::user()->supplierComments()->create([
            'user_id' => $user->id,
            'text' => $request->review,
            'ratings' => $request->ratings,
        ]);

        return redirect()->back()->with('success', 'Successfully reviewed Supplier');
    }

    public function reply(Request $request, SupplierComment $comment)
    {
        $reply = new SupplierCommentReply();
        $reply->text = $request->review;

        $reply->commenter_id = Auth::id();
        $reply->supplier_comment_id = $comment->id;
        $reply->save();
        return redirect()->back()->with('success', 'Successfully replied to comment');
    }

    public function updateComment(Request $request, SupplierComment $comment)
    {
        if ($comment->commenter_id != Auth::id()) {
            return redirect()->back()->with('error', 'You are not authorized to edit this reply');
        }
        $comment->text = $request->review;
        $comment->save();

        return redirect()->back()->with('success', 'Reply updated successfully');
    }
    public function updateReply(Request $request, SupplierCommentReply $reply)
    {
        if ($reply->commenter_id != Auth::id()) {
            return redirect()->back()->with('error', 'You are not authorized to edit this reply');
        }
        $reply->text = $request->review;
        $reply->save();

        return redirect()->back()->with('success', 'Reply updated successfully');
    }
    public function destroy(SupplierComment $comment)
    {

        if ($comment->commenter_id != Auth::id()) {

            return redirect()->back()->with('error', 'You are not authorized to delete this reply');
        }
        $comment->replies()->delete();
        $comment->delete();
        return redirect()->back()->with('success', 'Reply deleted successfully');
    }
    public function destroyReply(SupplierCommentReply $reply)
    {

        if ($reply->commenter_id != Auth::id()) {
            return redirect()->back()->with('error', 'You are not authorized to delete this reply');
        }


        $reply->delete();

        return redirect()->back()->with('success', 'Reply deleted successfully');
    }
}

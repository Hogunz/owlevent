<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\SupplierComment;
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
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function welcome()
    {
        // if (request()->get('search')) dd(request()->get('search'));
        $categories = Category::with(['gigs' => function ($query) {
            $query->approved();
        }])->get();
        $suppliers = User::role('Supplier')->get();
        return view('welcome', compact('categories', 'suppliers'));
    }
    public function showCategory(Category $category)
    {
        return view('categories', compact('category'));
    }
    public function showProfile(User $user)
    {
        $rating =  request()->get('rating');
        $user->load([
            'comments' => function ($query) use ($rating) {
                $query->when($rating, function ($query) use ($rating) {
                    $query->where('ratings', $rating);
                });
            }

        ]);

        return view('suppliers.supplier-profile', compact('user'));
    }
    public function showGig(User $user, Gig $gig)
    {
        $rating = request()->get('rating');
        $gig->load([
            'comments' => function ($query) use ($rating) {
                $query->when($rating, function ($query) use ($rating) {
                    $query->where('ratings', $rating);
                });
            }
        ]);
        return view('suppliers.service-profile', compact('user', 'gig'));
    }
}

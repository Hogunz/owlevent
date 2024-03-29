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
        $categories = Category::all();
        $suppliers = User::role('Supplier')->get();


        return view('welcome', compact('categories', 'suppliers'));
    }

    public function showCategory(Category $category)
    {
        return view('categories', compact('category'));
    }

    public function showProfile(User $user)
    {
        return view('suppliers.supplier-profile', compact('user'));
    }

    public function showGig(User $user, Gig $gig)
    {
        return view('suppliers.service-profile', compact('user', 'gig'));
    }
}

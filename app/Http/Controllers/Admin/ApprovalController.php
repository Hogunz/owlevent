<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gig;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApprovalController extends Controller
{
    public function serviceindex()
    {
        $services = Gig::all();
        return view('admin.approvals.services.index', compact('services'));
    }

    public function servicechangeStatus(Request $request, Gig $service)
    {

        $service->update([
            'status' => $request->status,
        ]);
        return redirect()->route('services.approval.index');
    }
    public function supplierindex()
    {

        $suppliers = User::all();
        return view('admin.approvals.suppliers.index', compact('suppliers'));
    }
    public function supplierchangeStatus(Request $request, User $supplier)
    {
        $supplier->update([
            'status' => $request->status,
        ]);
        return redirect()->route('suppliers.approval.index');
    }



    public function index()
    {
        $blogs = Blog::all();
        return view('admin.approvals.blogs.index', compact('blogs'));
    }

    public function changeStatus(Request $request, Blog $blog)
    {

        $blog->update([
            'status' => $request->status,
        ]);

        return redirect()->route('blogs.approval.index');
    }
}

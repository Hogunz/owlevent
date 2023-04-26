<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::orderBy('name')->get();

        return view('admin.roles.permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('admin.roles.permissions.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
        ]);

        Permission::create($validatedData);
        return redirect()->route('permissions.index')->with('status', 'Successfully added role');
    }

    public function edit(Permission $permission)
    {
        return view('admin.roles.permissions.edit', compact('permission'));
    }

    public function update(Request $request, Permission $permission)
    {
        $validatedData = $request->validate([
            'name' => ['required']
        ]);

        $permission->update($validatedData);

        return redirect()->route('permissions.index')->with('status', 'Successfully updated role');
    }
}

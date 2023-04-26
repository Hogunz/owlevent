<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
        ]);

        Role::create($validatedData);
        return redirect()->route('roles.index')->with('status', 'Successfully added role');
    }

    public function show(Role $role)
    {
        //
    }

    public function edit(Role $role)
    {
        return view('admin.roles.edit', compact('role'));
    }

    public function update(Request $request, Role $role)
    {
        $validatedData = $request->validate([
            'name' => ['required']
        ]);

        $role->update($validatedData);

        return redirect()->route('roles.index')->with('status', 'Successfully updated role');
    }
}

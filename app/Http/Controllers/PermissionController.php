<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{

    public function index()
    {
        // abort_if(Gate::denies('permission_index'), 403);

        $permissions = Permission::paginate(10);

        return view('permissions.index', compact('permissions'));
    }

    public function create()
    {
        // abort_if(Gate::denies('permission_create'), 403);

        return view('permissions.create');
    }

    public function store(Request $request)
    {
        Permission::create($request->only('name'));

        return redirect()->route('permissions.index');
    }

    public function show(Permission $permission)
    {
        // abort_if(Gate::denies('permission_show'), 403);

        return view('permissions.show', compact('permissions'));
    }

    public function edit(Permission $permission)
    {
        // abort_if(Gate::denies('permission_edit'), 403);

        return view('permissions.edit', compact('permissions'));
    }

    public function update(Request $request, Permission $permission)
    {
        $permission->update($request->only('name'));

        return redirect()->route('permissions.index');
    }

    public function destroy(Permission $permission)
    {
        // abort_if(Gate::denies('permission_delete'), 403);

        $permission->delete();

        return redirect()->route('permissions.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'id' =>'required|numeric|min:0|max:250',
            'name' => 'required|string|max:20',
            'slug' => 'required|string|max:20',
        ]); 
        try {
            Role::CreateOrFirst($data);
        } catch (\Exception $exception) {            
            return back()->withError($exception->getMessage())->withInput();
        }     
        
        return redirect()->route('role.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {       
        return redirect()->route('role.index');
     
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $role = Role::where('slug', $slug)->first();        
        return view('admin.roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $data = $request->validate([
            'id' =>'required|numeric|min:0|max:250',
            'name' => 'required|string|max:20',
            'slug' => 'required|string|max:20',
        ]); 
        try {
            Role::where('slug', $slug)->update($data);
        } catch (\Exception $exception) {            
            return back()->withError($exception->getMessage())->withInput();
        }     
        
        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {        
        Role::where('slug', $slug)->delete();
        return redirect()->route('role.index');
    }
}

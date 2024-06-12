<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TeathersController extends Controller
{
    public function index(){
        $allTeachers = User::where('role_id', 3)->get();
        return view('admin.teathers.index', compact('allTeachers'));
    }
    public function create(){
        return view('admin.teathers.create');
    }
    public function show($teather){
        $t = User::find($teather);
        if(!$t) {
            return abort(404);
        }
        return view('admin.teathers.show', compact('t'));
    }
    public function edit($teather){
        $t = User::find($teather);
        if(!$t) {
            return abort(404);
        }
        return view('admin.teathers.edit', compact('t'));
    }
    public function update(Request $request, $teather)
    {
        $t = User::find($teather);
        if(!$t) {
            return abort(404);
        }
        $data = $request->validate([
            'email' => "required|email",
            'family' => 'required|string',
            'name' => 'required|string',
            'patronymic' => 'required|string'
        ]);
        try {
            $t->update($data);
        } catch (\Exception $exception) {            
            return $exception->getMessage();
        }
        
        return redirect()->route('teather.show', $t['id']);
    }
    public function destroy($teather)
    {
        $t = User::find($teather);
        if(!$t) {
            return abort(404);
        }
        $t->delete();
        return redirect()->route('teather.index');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => "required|email",
            'family' => 'required|string',
            'name' => 'required|string',
            'patronymic' => 'required|string',
            'login' => 'required|string|unique:users,login',
            'password' => 'required|string'
        ]);
        try {
            $data['role_id'] = 3;
            $data['password'] = Hash::make($data['password']);
            User::CreateOrFirst($data);
        } catch (\Exception $exception) {            
            return $exception->getMessage();
        }
        
        return redirect()->route('teather.index');
    }
}

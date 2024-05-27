<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class StudentsController extends Controller
{
    public function index(){
        $allTeachers = User::where('role_id', 2)->get();
        return view('admin.students.index', compact('allTeachers'));
    }

    public function create(){
        return view('admin.students.create');
    }

    public function show($student){
        $t = User::find($student);
        if(!$t) {
            return abort(404);
        }
        return view('admin.students.show', compact('t'));
    }

    public function edit($student){
        $t = User::find($student);
        if(!$t) {
            return abort(404);
        }
        return view('admin.students.edit', compact('t'));
    }

    public function update(Request $request, $student)
    {
        $t = User::find($student);
        if(!$t) {
            return abort(404);
        }
        $data = $request->validate([
            'email' => "required|email",
            'family' => 'required|string',
            'name' => 'required|string',
            'patronymic' => 'required|string',
        ]);
        try {
            $t->update($data);
        } catch (\Exception $exception) {            
            return $exception->getMessage();
        }
        
        return redirect()->route('student.show', $t['id']);
    }

    public function destroy($student)
    {
        $t = User::find($student);
        if(!$t) {
            return abort(404);
        }
        $t->delete();
        return redirect()->route('student.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => "required|email",
            'family' => 'required|string',
            'name' => 'required|string',
            'patronymic' => 'required|string',
            'login' => 'required|string|unique:users,login',
            'password' => 'required|string',
        ]);
        try {
            $data['role_id'] = 2;
            $data['password'] = Hash::make($data['password']);
            User::CreateOrFirst($data);
        } catch (\Exception $exception) {            
            return $exception->getMessage();
        }
        
        return redirect()->route('student.index');
    }    
    public function link(Request $request, $student)
    {   
        $unique_url = uniqid(md5(rand()), true);
     
        $t = User::find($student);
        if(!$t) {
            return abort(404);
        }
              
        $data['link'] = $unique_url;

        try {
            $t->update($data);
        } catch (\Exception $exception) {            
            return $exception->getMessage();
        }

        return view('admin.students.edit', compact('t'));
    }    
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeathersController extends Controller
{
    public function index(){
        return view('admin.teathers.index');
    }
    public function create(){
        return view('admin.teathers.create');
    }
    public function show(){
        return view('admin.teathers.show');
    }
    public function edit(){
        return view('admin.teathers.edit');
    }
}

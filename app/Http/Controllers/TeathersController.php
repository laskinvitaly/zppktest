<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeathersController extends Controller
{
    public function index(){
        return view('teathers.index');
    }
    public function create(){
        return view('teathers.create');
    }
    public function delete(){
        return view('teathers.delete');
    }
    public function show(){
        return view('teathers.show');
    }
    public function edit(){
        return view('teathers.edit');
    }
}

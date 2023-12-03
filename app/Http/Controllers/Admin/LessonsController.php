<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class lessonsController extends Controller
{
   public function index(){
    return view('admin.lessons.index');
   }
   public function create(){
    return view('admin.lessons.create');
   }

   public function show(){
    return view('admin.lessons.show');
   }
   public function edit(){
    return view('admin.lessons.edit');
   }
}


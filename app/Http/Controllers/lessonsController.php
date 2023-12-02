<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lessonsController extends Controller
{
   public function index(){
    return view('lessons.index');
   }
   public function create(){
    return view('lessons.create');
   }
   public function delete(){
    return view('lessons.delete');
   }
   public function show(){
    return view('lessons.show');
   }
   public function edit(){
    return view('lessons.edit');
   }
}


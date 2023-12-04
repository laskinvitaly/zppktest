<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
       return view('front.index');       
    }
    public function empty()
    {
       return view('front.empty');       
    }    
    public function entrantedit()
    {
       return view('front.entrantedit');       
    }
}

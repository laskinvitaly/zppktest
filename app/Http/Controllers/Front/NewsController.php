<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {

        $news = News::paginate(16);
        $categories = Categories::all();
        return view('front.news.index', compact('news','categories')); 
    }

    public function show(string $id) {
      $new = News::where('id', $id)->first();
      return view('front.news.new', compact('new')); 
    }

    }

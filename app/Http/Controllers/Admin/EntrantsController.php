<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EntrantsController extends Controller
{
    public function index() {
        return view('admin.entrants.index');
    }

    public function create() {
        return view('admin.entrants.create');
    }


    public function show() {
        return view('admin.entrants.show');
    }

    public function edit() {
        return view('admin.entrants.edit');
    }
}

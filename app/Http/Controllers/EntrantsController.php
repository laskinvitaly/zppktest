<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntrantsController extends Controller
{
    public function index() {
        return view('entrants.index');
    }

    public function create() {
        return view('entrants.create');
    }

    public function delete() {
        return view('entrants.delete');
    }

    public function show() {
        return view('entrants.show');
    }

    public function edit() {
        return view('entrants.edit');
    }
}

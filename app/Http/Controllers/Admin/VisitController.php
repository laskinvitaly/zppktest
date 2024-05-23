<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
      dd('Занесение студента в таблицу посещаемость');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function show()
    {
        dd('Показ таблицы посещаемость в админ панели');
    }
   
}
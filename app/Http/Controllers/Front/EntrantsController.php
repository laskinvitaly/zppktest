<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EntrantsController extends Controller
{
    public function edit(User $user) {
        // if (Gate::check('view_entrant_lk')){
      //    return view('front.entrant.edit');
      // }
      //    return view('front.entrant.login');

      return view('front.entrant.edit', compact('user')); 
    } 
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\User;
use App\Models\Image;

use Illuminate\Support\Str;

class CertificationController extends Controller
{
    public function index() {
      $user = auth()->user();
      $certificationExist = false;
      if($user) {
        $certification = Teacher::where('user_id', $user->id)->first();

        if($certification) {
          $certificationExist = true;
        }
      }
      

      $certifications = Teacher::all();
    //  dd($certifications);
      foreach ($certifications as $c) {
        $author = User::find($c->user_id);
        $c["name"] = $author['family'] . ' ' . $author['name'] . ' ' . $author['patronymic'];
      }
      return view('front.certification.index', compact('certificationExist', 'certifications')); 
    }

    public function create() {
      $user = auth()->user();
      if($user->role_id !== 3) {
        return redirect()->route('frontpage');
      }
      $certification = Teacher::where('user_id', $user->id)->first();

      if($certification) {
        return redirect()->route('front.certification.index');
      }
      return view('front.certification.create', compact('user'));
    }
    public function store(Request $request) {
      $user = auth()->user();
      if($user->role_id !== 3) {
        return redirect()->route('frontpage');
      }
      $certification = Teacher::where('user_id', $user->id)->first();

      if($certification) {
        return redirect()->route('front.certification.index');
      }
      $data = $request->validate([
        'experience' => 'required|string',
        'specialization' => 'required|string',
        'content' => 'required|string'
      ]);
      $images = $request->file('images');
      $photo = $request->file('photo');
      $data['user_id'] = $user->id;
      $newPhotoName = Str::random(10) . '.' . $photo->getClientOriginalExtension();
      $data['photo_url'] = $photo->storeAs('uploads', $newPhotoName, 'public');
      try {
        $myPortfolio = Teacher::create($data);
        foreach ($images as $image) {
            $newName = Str::random(10) . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('uploads', $newName, 'public');
            Image::create([
                'teather_id' => $myPortfolio->id,
                'path' => $path
            ]);
        }
        return redirect()->route('front.certification.index');
    } catch(\Exception $e) {
        return redirect()->route('front.certification.create');
    }
  }

  public function update(string $userid) {
    
    $user = auth()->user();
    if($user->role_id !== 3) {
      return redirect()->route('frontpage');
    }

    $certification = Teacher::where('user_id', $user->id)->first();
    $user = User::where('id', $user->id)->first();
    $portfolio = Image::where('teather_id', $certification->id)->get();

    return view('front.certification.update', compact('user', 'certification', 'portfolio'));
  }

  public function stor(string $id, Request $request) {
    $user = auth()->user();
      if($user->role_id !== 3) {
        return redirect()->route('frontpage');
      }
      $certification = Teacher::where('user_id', $user->id)->first();
      
      $data = $request->validate([
        'experience' => 'required|string',
        'specialization' => 'required|string',
        'content' => 'required|string'
      ]);
      
      $images = $request->file('images');
      $data['user_id'] = $user->id;

      if($request->hasFile('photo')){
        $photo = $request->file('photo');
        $newPhotoName = Str::random(10) . '.' . $photo->getClientOriginalExtension();
        $data['photo_url'] = $photo->storeAs('uploads', $newPhotoName, 'public');
      }
      
      
      
      try {
        $certification->update($data);
        foreach ($images as $image) {
            $newName = Str::random(10) . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('uploads', $newName, 'public');
            Image::updateOrInsert([
                'teather_id' => $certification->id,
                'path' => $path
            ]);
        }
        return redirect()->route('front.certification.index');
    } catch(\Exception $e) {
        return redirect()->route('front.certification.create');
    }
  }
  public function show(string $id) {
    $certification = Teacher::where('id', $id)->first();
    $user = User::where('id', $certification->user_id)->first();
    $portfolio = Image::where('teather_id', $certification->id)->get();

    return view('front.certification.show', compact('certification', 'user', 'portfolio'));
  }
}

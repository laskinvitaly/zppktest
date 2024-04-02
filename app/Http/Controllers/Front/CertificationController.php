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
}

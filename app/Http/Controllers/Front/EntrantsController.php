<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Entrant;
use App\Models\Spetsialnost;
use Illuminate\Support\Facades\Storage;

class EntrantsController extends Controller
{
    public function edit(User $user) {
        // if (Gate::check('view_entrant_lk')){
      //    return view('front.entrant.edit');
      // }
      //    return view('front.entrant.login');
      $spets = Spetsialnost::all();

      return view('front.entrant.edit', compact('user', 'spets')); 
    } 

    public function update(Request $request, string $id)
    {

      $data = $request->validate([
        'passport' => 'nullable|file',
        'document_on_education' => 'nullable|file',
        'medical_certificate' => 'nullable|file',
        'vaccination_certificate' => 'nullable|file',
        'snils' => 'nullable|file',
        'spetsialnost' => 'nullable|integer',
      ]);

      if($request->hasFile('passport')){
        $data['passport'] = Storage::disk('public')->put('/entrant/passport', $data['passport']);
      }
      if($request->hasFile('document_on_education')){
        $data['document_on_education'] = Storage::disk('public')->put('/entrant/document_on_education', $data['document_on_education']);
      }
      if($request->hasFile('medical_certificate')){
        $data['medical_certificate'] = Storage::disk('public')->put('/entrant/medical_certificate', $data['medical_certificate']);
      }
      if($request->hasFile('vaccination_certificate')){
        $data['vaccination_certificate'] = Storage::disk('public')->put('/entrant/vaccination_certificate', $data['vaccination_certificate']);
      }
      if($request->hasFile('snils')){
        $data['snils'] = Storage::disk('public')->put('/entrant/snils', $data['snils']);
      }
      
      Entrant::where('user_id', $id) -> update($data);

      return redirect()->route('entrant.edit',$id);
    }
}
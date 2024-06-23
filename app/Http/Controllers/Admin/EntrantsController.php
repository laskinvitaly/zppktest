<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EntraintSubject;
use Illuminate\Http\Request;
use App\Models\Entrant;
use App\Models\Spetsialnost;
use App\Models\Subject;
use App\Models\User;
use App\Services\Entrant\Service;

class EntrantsController extends Controller
{
    public $service;

    public function __construct(Service $service){
        $this->service = $service;
    }

    public function index() {
        $entrants = Entrant::all();
        return view('admin.entrants.index', compact('entrants'));
    }

    public function create() {
        return view('admin.entrants.create');
    }

    public function edit(Entrant $entrant) { 
        $spets = Spetsialnost::all();

        $subj_ent = EntraintSubject::where('entrant_id', $entrant['user_id'])->get();
        $subj = Subject::all();
        
        return view('admin.entrants.edit', compact('entrant', 'spets', 'subj_ent', 'subj'));
    }

    public function store(Request $request)
    {
        dd("Абитуриент добавлен");
    }

    public function update(Request $request, Entrant $entrant)
    {
        $ocenkas = $request->ocenkas;
        
        $data = $request->validate([
            'ocenkas' => 'array|required',
            'ocenkas.*' => 'nullable|integer|between:3,5',            
        ]);


        $this->service->updateOcenka($data, $entrant);       

       
        $data = $request->validate([
            'name' => 'required|string',
            'family' => 'required|string',
            'patronymic' => 'required|string',
            'passport' => 'nullable|file',
            'passport_seria' => ['nullable', 'string', 'regex:/^\d{4}$/'],
            'passport_number' => ['nullable', 'string', 'regex:/^\d{6}$/'],
            'vkontakte' => 'required|string',
            'spetsialnost_id' => 'nullable|integer',
            'rating' => 'nullable|integer',
            'sirota' => 'nullable|integer',
            'outregion' => 'nullable|integer',
            'passport_propiska' => 'nullable|string',
            'passport_dr' => 'nullable|string',
            'document_on_education' => 'nullable|file',
            'document_on_education_name' => 'nullable|string',
            'document_on_education_year' => 'nullable|string',
            'snils' => 'nullable|file',
            'snils_number' => 'nullable|string',
            'medical_certificate' => 'nullable|file',
            'vaccination_certificate' => 'nullable|file',
            'phone' => 'nullable|string',
        ]);

        $data['rating'] = $this->service->getRating($entrant);

        if ($data['sirota']==1){
            $data['rating'] += 2;
        }
        if ($data['outregion']==1){
            $data['rating'] += 1;
        }

        $entr = User::find($entrant['user_id']);
        if(!$entr) {
            return abort(404);
        }

        try {
            $entr->update($data);
            $entrant->update($data);
        } catch (\Exception $exception) {            
            return $exception->getMessage();
        }
        return redirect()->route('entrant.index');
    }

    public function destroy(Entrant $entrant)
    {   
        $ent = User::find($entrant['user_id']);
        if(!$ent) {
            return abort(404);
        }

        $entrant->delete();
        $ent->delete();
        return redirect()->route('entrant.index');
    }

    
}
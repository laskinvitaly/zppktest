<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Entrant;

class EntrantsController extends Controller
{
    public function index() {
        $entrants = Entrant::all();
        return view('admin.entrants.index', compact('entrants'));
    }

    public function create() {
        return view('admin.entrants.create');
    }

    public function edit(Entrant $entrant) {
        return view('admin.entrants.edit', compact('entrant'));
    }

    public function store(Request $request)
    {
        dd("Абитуриент добавлен");
    }

    public function update(Request $request, Entrant $entrant)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'family' => 'required|string',
            'patronymic' => 'required|string',
            'passport' => 'nullable|file',
            'passport_seria' => ['nullable', 'string', 'regex:/^\d{4}$/'],
            'passport_number' => ['nullable', 'string', 'regex:/^\d{6}$/'],
        ]);
        dd($data);
    }

    public function destroy(string $id)
    {
        dd("Абитуриент удалён");
    }
}
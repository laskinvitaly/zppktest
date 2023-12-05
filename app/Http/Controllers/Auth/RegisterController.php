<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RequestRegister;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
       return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([            
            'fio' => 'required|string',
            'phone' => 'required|string|size:16',
        ]); 
        try {
            RequestRegister::CreateOrFirst($data);
        } catch (\Exception $exception) {            
            return back()->withError($exception->getMessage())->withInput();
        }     
        
        return redirect()->route('frontpage');
    }
    public function index()
    {
        $requestRegisters = RequestRegister::all();
        return view('admin.register.index', compact('requestRegisters'));
    }
}

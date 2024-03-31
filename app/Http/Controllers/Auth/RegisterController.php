<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Entrant as MiddlewareEntrant;
use Illuminate\Http\Request;
use App\Models\RequestRegister;
use App\Models\User;
use App\Models\Entrant;
use Illuminate\Support\Facades\Hash;

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
    public function approve(RequestRegister $entrant, Request $request)
    {
        $data = $request->validate([
            'family' => 'required|string',
            'name' => 'required|string',
            'patronymic' => 'required|string',
            'email' => 'required|string',
            'login' => 'required|string',
            'password' => 'required|string',
        ]);
        $data['role_id'] = 1;
        $data['password'] = Hash::make($data['password']);
        $user = User::firstOrCreate($data);

        $dataEntrants = [
            'user_id' => $user->id,
            'phone' => $user->login,
        ];
        $entrants = Entrant::firstOrCreate($dataEntrants);

        $entrant->delete();
        
        return redirect()->route('register.index');
    }
    public function deleterequest(RequestRegister $entrant)
    {
        $entrant->delete();
        return redirect()->route('register.index');
    }
}

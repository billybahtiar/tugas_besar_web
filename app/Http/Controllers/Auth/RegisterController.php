<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        
        $validator = Validator::make($data, [
            'name' => ['required', 'string', 'min:5', 'max:30'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'max:12', 'confirmed'],
        ]);

        
        if ($validator->fails()) {
          
            $errors = $validator->errors();
            $errorMessage = '';

           
            if ($errors->has('name')) {
                $errorMessage .= "Nama: " . $errors->first('name') . ' ';
            }
            if ($errors->has('email')) {
                $errorMessage .= "Email: " . $errors->first('email') . ' ';
            }
            if ($errors->has('password')) {
                $errorMessage .= "Password: " . $errors->first('password') . ' ';
            }

          
            Session::flash('alert', trim($errorMessage));
        } else {
          
            Session::flash('alert', 'Pendaftaran berhasil! Silakan masuk.');
        }

        return $validator;
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function showRegistrationForm()
    {
        
        return view('auth.register');
    }

    protected function registered(Request $request, $user)
    {
        
        return redirect($this->redirectTo)->with('alert', 'Pendaftaran berhasil! Silakan masuk.');
    }
}

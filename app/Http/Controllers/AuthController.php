<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;
use Validator,Redirect,Response;
use Illuminate\Http\Request;
use App\Models\User;
use Session;

class AuthController extends Controller
{
    public $title = 'Admin';

    public function __construct()
    {
        View::share('title', $this->title);
    }

    public $module = 'admin.auth';

    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('datakamar.index');
        }
        return back()->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function registerForm()
    {
        return view('admin.auth.register');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

}
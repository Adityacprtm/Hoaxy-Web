<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use App\User;

class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('manage.register');
    }

    public function register(Request $req)
    {
        $data  = $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        Auth::login($user);
        return redirect()->route('manage');
    }
}

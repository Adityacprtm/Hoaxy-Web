<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('manage.login');
    }

    public function login(Request $req)
    {
        $data  = $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $req->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('manage');
        }

        $req->session()->flash('status', 'Email atau Password tidak cocok dengan data yang kami miliki. Mohon periksa kembali');
        return redirect()->back();
    }
}

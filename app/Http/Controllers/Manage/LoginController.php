<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
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
        $validator = Validator::make($req->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $credentials = $req->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->route('manage');
            } else {
                $req->session()->flash('status', 'Email atau Password tidak terdaftar di data');
                return redirect()->back();
            }
        }
    }
}

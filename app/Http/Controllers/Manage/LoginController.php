<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('manage.login');
    }

    public function login(Request $req)
    {
        $validatedData  = $req->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validatedData) {
            if ($req->username == 'aditya' && $req->password == 'password') {
                return redirect()->route('manage');
            } else {
                return redirect()->route('login');
            }
        } else {
            return $validatedData;
        }
    }
}

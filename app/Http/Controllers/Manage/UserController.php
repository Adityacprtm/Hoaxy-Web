<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index()
    {
        return abort(404);
    }

    public function profile()
    {
        $user = User::find(Auth::id());
        return view('manage/user-profile', compact('user'));
    }

    public function setting()
    {
        $user = User::find(Auth::id());
        return view('manage/user-setting', compact('user'));
    }
}

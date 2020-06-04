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
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        // $user_need_approval = User::whereNull('approved_at')->get();
        $user = User::find(Auth::id());
        $users = User::all();

        return view('manage/users/list', compact('user', 'users'));
    }

    public function profile()
    {
        $user = User::find(Auth::id());
        return view('manage/users/profile', compact('user'));
    }

    public function setting()
    {
        $user = User::find(Auth::id());
        return view('manage/users/setting', compact('user'));
    }

    public function approve($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->update(['approved_at' => now()]);

        return redirect()->route('admin.manage.users')->withMessage('User approved successfully');
    }
}

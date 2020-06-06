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
        $users = User::all();

        return view('manage/users/list', compact('users'));
    }

    public function profile()
    {
        return view('manage/users/profile');
    }

    public function setting()
    {
        return view('manage/users/setting');
    }

    public function approve($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->update(['approved_at' => now()]);

        return redirect()->route('admin.manage.users')->withMessage('User approved successfully');
    }
}

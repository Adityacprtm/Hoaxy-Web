<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
	public function index()
	{
		// $user = User::where('id', Auth::id())->first();
		return view('manage.index');
	}
}

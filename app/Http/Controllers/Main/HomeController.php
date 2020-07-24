<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class HomeController extends Controller
{
	public function about()
	{
		$clients = Client::where('activated', 1)->get();
		return view('main/about', compact('clients'));
	}
}

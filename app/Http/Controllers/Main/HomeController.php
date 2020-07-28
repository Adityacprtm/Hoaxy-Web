<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\CodeSkill;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;

class HomeController extends Controller
{
	public function about()
	{
		$clients = Client::where('activated', 1)->get();
		return view('main/about', compact('clients'));
	}

	public function resume()
	{
		$education = Education::orderBy('sort', 'desc')->get();
		$experience = Experience::orderBy('startDate', 'desc')->get();
		$skills = Skill::orderBy('title', 'asc')->get();
		$codeSkills = CodeSkill::orderBy('title', 'asc')->get();
		return view('main/resume', compact('education', 'experience', 'skills', 'codeSkills'));
	}

	public function portfolio()
	{
		return view('main/portfolio');
	}
}

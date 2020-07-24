<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
	public function education()
	{
		return view('manage/resume/education');
	}

	public function experience()
	{
		return view('manage/resume/experience');
	}

	public function myskills()
	{
		return view('manage/resume/my-skills');
	}

	public function codeskills()
	{
		return view('manage/resume/code-skills');
	}
}

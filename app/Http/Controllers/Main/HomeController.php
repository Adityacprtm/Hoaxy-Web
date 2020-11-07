<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\CategoryPortfolio;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\CodeSkill;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Journey;
use App\Models\NonformalEducation;
use App\Models\Portfolio;
use App\Models\Skill;
use App\Notifications\ContactMessage;
use App\User;

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
		$nonformalEducation = NonformalEducation::orderBy('year', 'desc')->get();
		$experience = Experience::orderBy('startDate', 'desc')->get();
		$skills = Skill::orderBy('title', 'asc')->get();
		$codeSkills = CodeSkill::orderBy('title', 'asc')->get();
		return view('main/resume', compact('education', 'nonformalEducation', 'experience', 'skills', 'codeSkills'));
	}

	public function portfolio()
	{
		$portfolio = Portfolio::inRandomorder()->get();
		$category = CategoryPortfolio::orderBy('category_name', 'asc')->get();
		return view('main/portfolio', compact('portfolio', 'category'));
	}

	public function blog()
	{
		//$blog = Blog::where('activated', 1)->orderBy('created_at', 'desc')->get();
		//return view('main/blog', compact('blog'));
		return redirect("https://blog.adityacprtm.com");
	}

	public function blogDetail($slug)
	{
		// $blog = Blog::where('slug', $slug)->where('activated', 1)->get();
		$blog = Blog::where([
			['slug', '=', $slug],
			['activated', '=', 1]
		])->first();

		$otherBlog = Blog::where('slug', '!=', $slug)->take(4)->get();

		if (!$blog) {
			return abort(404);
		} else {
			return view('main/blog-detail', compact('blog', 'otherBlog'));
		}
	}

	public function contact()
	{
		return view('main/contact');
	}

	public function contactStore(Request $request)
	{
		$this->validate($request, [
			'name'    => 'required',
			'email'   => 'required|email',
			'message' => 'required',
			'g-recaptcha-response' => 'required|captcha',
		]);

		$contact = Contact::create([
			'name' => $request->name,
			'email' => $request->email,
			'message' => $request->message
		]);

		$admin = User::firstWhere('admin', 1);
		if ($admin) {
			$admin->notify(new ContactMessage($contact));
		}

		if ($contact) {
			return response()->json(['status' => 'success', 'message' => 'Portfolio successfully deleted']);
		} else {
			return response()->json(['status' => 'error', 'message' => 'Something went wrong, try again later']);
		}
	}

	public function journey()
	{
		$journey = Journey::orderBy('date', 'asc')->get();
		return view('main/journey', compact('journey'));
	}
}

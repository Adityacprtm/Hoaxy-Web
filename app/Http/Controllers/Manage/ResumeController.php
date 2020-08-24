<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\CodeSkill;
use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Experience;
use App\Models\NonformalEducation;
use App\Models\Skill;
use Yajra\DataTables\Facades\DataTables;

class ResumeController extends Controller
{
	public function index()
	{
		return redirect('manage');
	}

	public function education(Request $request)
	{
		$education = Education::all();
		if ($request->ajax()) {
			return DataTables::of($education)
				->addIndexColumn()
				->addColumn('action', function ($row) {
					$btn = '
					<ul class="table-controls">
                    <li>
                        <a href="javascript:void(0);" title="Edit" data-id="' . $row->id . '" class="editEducation" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" title="Delete" data-id="' . $row->id . '" class="deleteEducation" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                            </svg>
                        </a>
                    </li>
					</ul>
					';
					return $btn;
				})
				->rawColumns(['action'])
				->make(true);
		}
		return view('manage/resume/education', compact('education'));
	}

	public function educationStore(Request $request)
	{
		$sort_level = array(
			'tk' => 1,
			'sd' => 2,
			'smp' => 3,
			'sma' => 4,
			'sma' => 5,
			's1' => 6,
			's2' => 7,
			's3' => 8
		);

		Education::updateOrCreate(
			['id' => $request->id],
			['level' => $request->level, 'sort' => $sort_level[$request->level], 'institution' => $request->institution, 'year' => $request->year, 'description' => $request->description, 'country' => $request->country, 'city' => $request->city]
		);

		return response()->json([
			'status' => 'success',
			'message' => 'Education data saved successfully'
		]);
	}

	public function educationDestroy(Request $request)
	{
		$edu = Education::find($request->id);
		$edu->delete();

		return response()->json([
			'status' => 'success',
			'message' => 'Education data deleted successfully'
		]);
	}

	public function nonformalEducation(Request $request)
	{
		$education = NonformalEducation::all();
		if ($request->ajax()) {
			return DataTables::of($education)
				->addIndexColumn()
				->addColumn('action', function ($row) {
					$btn = '
					<ul class="table-controls">
                    <li>
                        <a href="javascript:void(0);" title="Edit" data-id="' . $row->id . '" class="editEducation" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" title="Delete" data-id="' . $row->id . '" class="deleteEducation" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                            </svg>
                        </a>
                    </li>
					</ul>
					';
					return $btn;
				})
				->rawColumns(['action'])
				->make(true);
		}
		return view('manage/resume/nonformal-education', compact('education'));
	}

	public function nonformalEducationStore(Request $request)
	{
		NonformalEducation::updateOrCreate(
			['id' => $request->id],
			['institution' => $request->institution, 'year' => $request->year, 'description' => $request->description, 'hours' => $request->hours, 'location' => $request->location]
		);

		return response()->json([
			'status' => 'success',
			'message' => 'Nonformal Education data saved successfully'
		]);
	}

	public function nonformalEducationDestroy(Request $request)
	{
		$edu = NonformalEducation::find($request->id);
		$edu->delete();

		return response()->json([
			'status' => 'success',
			'message' => 'Nonformal Education data deleted successfully'
		]);
	}

	public function experience(Request $request)
	{
		$experience = Experience::all();
		if ($request->ajax()) {
			return DataTables::of($experience)
				->addIndexColumn()
				->addColumn('action', function ($row) {
					$btn = '
					<ul class="table-controls">
                    <li>
                        <a href="javascript:void(0);" title="Edit" data-id="' . $row->id . '" class="editExperience" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" title="Delete" data-id="' . $row->id . '" class="deleteExperience" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                            </svg>
                        </a>
                    </li>
					</ul>
					';
					return $btn;
				})
				->rawColumns(['action'])
				->make(true);
		}
		return view('manage/resume/experience', compact('experience'));
	}

	public function experienceStore(Request $request)
	{
		Experience::updateOrCreate(
			['id' => $request->id],
			['company' => $request->company, 'position' => $request->position, 'description' => $request->description, 'startDate' => $request->startDate, 'endDate' => $request->endDate]
		);

		return response()->json([
			'status' => 'success',
			'message' => 'Experience data saved successfully'
		]);
	}

	public function experienceDestroy(Request $request)
	{
		$exp = Experience::find($request->id);
		$exp->delete();

		return response()->json([
			'status' => 'success',
			'message' => 'Experience data deleted successfully'
		]);
	}

	public function skill(Request $request)
	{
		$skills = Skill::all();
		if ($request->ajax()) {
			return DataTables::of($skills)
				->addIndexColumn()
				->addColumn('action', function ($row) {
					$btn = '
					<ul class="table-controls">
                    <li>
                        <a href="javascript:void(0);" title="Edit" data-id="' . $row->id . '" class="editSkill" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" title="Delete" data-id="' . $row->id . '" class="deleteSkill" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                            </svg>
                        </a>
                    </li>
					</ul>
					';
					return $btn;
				})
				->rawColumns(['action'])
				->make(true);
		}
		return view('manage/resume/skill', compact('skills'));
	}

	public function skillStore(Request $request)
	{
		Skill::updateOrCreate(
			['id' => $request->id],
			['title' => $request->title, 'level' => $request->level, 'activated' => $request->activated]
		);

		return response()->json([
			'status' => 'success',
			'message' => 'Skill data saved successfully'
		]);
	}

	public function skillDestroy(Request $request)
	{
		$exp = Skill::find($request->id);
		$exp->delete();

		return response()->json([
			'status' => 'success',
			'message' => 'Skill data deleted successfully'
		]);
	}

	public function codeSkill(Request $request)
	{
		$codeSkills = CodeSkill::all();
		if ($request->ajax()) {
			return DataTables::of($codeSkills)
				->addIndexColumn()
				->addColumn('action', function ($row) {
					$btn = '
					<ul class="table-controls">
                    <li>
                        <a href="javascript:void(0);" title="Edit" data-id="' . $row->id . '" class="editCodeSkill" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" title="Delete" data-id="' . $row->id . '" class="deleteCodeSkill" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                            </svg>
                        </a>
                    </li>
					</ul>
					';
					// $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';
					return $btn;
				})
				->rawColumns(['action'])
				->make(true);
		}
		return view('manage/resume/code-skill', compact('codeSkills'));
	}

	public function codeSkillStore(Request $request)
	{
		CodeSkill::updateOrCreate(
			['id' => $request->id],
			['title' => $request->title, 'level' => $request->level, 'activated' => $request->activated]
		);

		return response()->json([
			'status' => 'success',
			'message' => 'Code Skill data saved successfully'
		]);
	}

	public function codeSkillDestroy(Request $request)
	{
		$exp = CodeSkill::find($request->id);
		$exp->delete();

		return response()->json([
			'status' => 'success',
			'message' => 'Code Skill data saved successfully'
		]);
	}
}

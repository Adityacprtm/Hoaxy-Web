<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\Journey;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class JourneyController extends Controller
{
	public function index()
	{
		return redirect('journey');
	}

	public function journey(Request $request)
	{
		$journey = Journey::all();
		if ($request->ajax()) {
			return DataTables::of($journey)
				->addIndexColumn()
				->addColumn('action', function ($row) {
					$btn = '
					<ul class="table-controls">
						<li>
							<a href="javascript:void(0);" title="Edit" data-id="' . $row->id . '" class="editJourney" >
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
										<path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
									</svg>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);" title="Delete" data-id="' . $row->id . '" class="deleteJourney" >
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
		return view('manage/journey/index', compact('journey'));
	}

	public function journeyStore(Request $request)
	{
		Journey::updateOrCreate(
			['id' => $request->id],
			['description' => $request->description, 'date' => $request->date]
		);

		return response()->json([
			'status' => 'success',
			'message' => 'Journey data saved successfully'
		]);
	}

	public function journeyDestroy(Request $request)
	{
		$edu = Journey::find($request->id);
		$edu->delete();

		return response()->json([
			'status' => 'success',
			'message' => 'Journey data deleted successfully'
		]);
	}
}

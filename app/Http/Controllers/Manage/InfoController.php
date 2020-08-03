<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class InfoController extends Controller
{
	public function index(Request $request)
	{
		$info = Info::all();
		if ($request->ajax()) {
			// $portfolio = Portfolio::all();
			return DataTables::of($info)
				->addIndexColumn()
				// ->editColumn('created_at', function ($row) {
				// 	return date('d M, Y - H:i', strtotime($row->created_at));
				// })
				->editColumn('value', function ($row) {
					if ($row->type == 1) {
						return '<span><img src="' . asset($row->value) . '" style="height:50px" alt="avatar"></span>';
					} else {
						return $row->value;
					}
				})
				->addColumn('action', function ($row) {
					$btn = '
					<ul class="table-controls">
					<li>
						<a href="javascript:void(0);" title="Edit" data-id="' . $row->id . '" class="editInfo" >
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
								<path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
							</svg>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);" title="Delete" data-id="' . $row->id . '" class="deleteInfo" >
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
				->rawColumns(['action', 'value'])
				->make(true);
		}
		return view('manage/info/index', compact('info'));
	}

	public function infoStore(Request $request)
	{
		if ($request->hasFile('value_image')) {
			$file = $request->file('value_image');

			$filename = \Carbon\Carbon::now()->timestamp . '-' . $request->title;
			$extension = '.' . $request->value_image->getClientOriginalExtension();
			$name = $filename . $extension;

			$dir = "assets/main/images/info";

			$file->move($dir, $name);

			$file_path = $dir . '/' . $name;

			Info::updateOrCreate(
				['id' => $request->id],
				['value' => $file_path, 'type' => $request->type, 'key' => $request->key]
			);
		} else {
			if ($request->type == 0) {
				Info::updateOrCreate(
					['id' => $request->id],
					['value' => $request->value_text, 'type' => $request->type, 'key' => $request->key]
				);
			}
		}

		return response()->json(['success' => 'Product saved successfully.']);
	}

	public function infoDestroy(Request $request)
	{
		$info = Info::find($request->id);
		if ($info->type == 1) {
			File::delete($info->value);
		}
		$info->delete();

		return response()->json(['success' => 'Product deleted successfully.']);
	}
}

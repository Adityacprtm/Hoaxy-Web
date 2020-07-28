<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aboutme;
use App\Models\Client;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;


class AboutController extends Controller
{
	// public function __construct()
	// {
	// 	$this->middleware(['auth', 'verified']);
	// }

	public function index()
	{
		$content = Aboutme::where('id', 1)->first();
		return view('manage/about/aboutme', compact('content'));
	}

	public function aboutUpdate(Request $request)
	{
		$id = 1;

		Aboutme::updateOrCreate(
			['id' => $id],
			['content' => $request->content]
		);
	}

	public function doing()
	{
		return view('manage/about/doing');
	}

	public function client(Request $request)
	{
		$clients = Client::all();
		if ($request->ajax()) {
			$clients = Client::latest()->get();
			return DataTables::of($clients)
				->addIndexColumn()
				->editColumn('image', function ($row) {
					return '<span><img src="' . asset($row->image) . '" style="height:50px" alt="avatar"></span>';
				})
				->addColumn('action', function ($row) {
					$btn = '
					<ul class="table-controls">
                    <li>
                        <a href="javascript:void(0);" title="Edit" data-id="' . $row->id . '" class="editClient" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" title="Delete" data-id="' . $row->id . '" class="deleteClient" >
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
				->rawColumns(['image', 'action'])
				->make(true);
		}

		return view('manage/about/client', compact('clients'));
	}

	public function clientStore(Request $request)
	{
		if ($request->hasFile('image')) {
			$file = $request->file('image');

			$filename = \Carbon\Carbon::now()->timestamp . '-' . $request->title;
			$extension = '.' . $request->image->getClientOriginalExtension();
			$name = $filename . $extension;

			$dir = "assets/main/images/client";

			$file->move($dir, $name);

			$file_path = $dir . '/' . $name;

			Client::updateOrCreate(
				['id' => $request->id],
				['image' => $file_path, 'title' => $request->title, 'url' => $request->url, 'activated' => $request->activated]
			);
		} else {
			Client::updateOrCreate(
				['id' => $request->id],
				['title' => $request->title, 'url' => $request->url, 'activated' => $request->activated]
			);
		}

		return response()->json(['success' => 'Product saved successfully.']);
	}

	public function clientDestroy(Request $request)
	{
		$client_data = Client::find($request->id);
		File::delete($client_data->image);
		$client_data->delete();

		return response()->json(['success' => 'Product deleted successfully.']);
	}
}

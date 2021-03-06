<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ContactController extends Controller
{
	public function index(Request $request)
	{
		$contact = Contact::all();
		if ($request->ajax()) {
			return DataTables::of($contact)
				->addIndexColumn()
				->editColumn('created_at', function ($row) {
					return date('d M, Y - H:i', strtotime($row->created_at));
				})
				->editColumn('message', function ($row) {
					return $row->message;
				})
				->addColumn('action', function ($row) {
					$btn = '
					<ul class="table-controls">
					<li>
						<a href="javascript:void(0);" title="Edit" data-id="' . $row->id . '" class="viewContact" >
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
								<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle>
							</svg>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);" title="Edit" data-id="' . $row->id . '" class="editContact" >
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
								<path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
							</svg>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);" title="Delete" data-id="' . $row->id . '" class="deleteContact" >
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
		return view('manage/contact/list', compact('contact'));
	}

	public function contactStore(Request $request)
	{
		Contact::updateOrCreate(
			['id' => $request->id],
			['name' => $request->name, 'email' => $request->email, 'message' => $request->message]
		);

		return response()->json(['status' => 'success', 'message' => 'Contact saved successfully.']);
	}

	public function contactDestroy(Request $request)
	{
		$edu = Contact::find($request->id);
		$edu->delete();

		return response()->json(['status' => 'success', 'message' => 'Contact deleted successfully.']);
	}
}

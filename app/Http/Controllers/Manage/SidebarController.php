<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\CategorySidebar;
use App\Models\Sidebar;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SidebarController extends Controller
{
	public function index(Request $request)
	{
		$sidebar = Sidebar::all();
		if ($request->ajax()) {
			return Datatables::of($sidebar)
				->addIndexColumn()
				->editColumn('category_sidebar_name', function ($row) {
					return $row->categorySidebar->category_sidebar_name;
				})
				->addColumn('action', function ($row) {
					$btn = '
					<ul class="table-controls">
					<li>
						<a href="javascript:void(0);" title="Edit" data-id="' . $row->id . '" class="editSidebar" >
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
								<path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
							</svg>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);" title="Delete" data-id="' . $row->id . '" class="deleteSidebar" >
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
		return view('manage/sidebar/items', compact('sidebar'));
	}

	public function sidebarStore(Request $request)
	{
		Sidebar::updateOrCreate(
			['id' => $request->id],
			['title' => $request->title, 'category_sidebar_id' => $request->category_sidebar_id, 'link' => $request->link]
		);

		return response()->json([
			'status' => 'success',
			'message' => 'Sidebar data saved successfully'
		]);
	}

	public function sidebarDestroy(Request $request)
	{
		$sidebar = Sidebar::find($request->id);
		$sidebar->delete();

		return response()->json([
			'status' => 'success',
			'message' => 'Sidebar data deleted successfully'
		]);
	}

	public function category(Request $request)
	{
		$category = CategorySidebar::all();
		if ($request->ajax()) {
			return DataTables::of($category)
				->addIndexColumn()
				->editColumn('total', function ($row) {
					return $row->sidebar->count();
				})
				->addColumn('action', function ($row) {
					$btn = '
					<ul class="table-controls">
					<li>
						<a href="javascript:void(0);" title="Edit" data-id="' . $row->id . '" class="editCategorySidebar" >
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
								<path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
							</svg>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);" title="Delete" data-id="' . $row->id . '" class="deleteCategorySidebar" >
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
		return view('manage/sidebar/category', compact('category'));
	}

	public function categoryStore(Request $request)
	{
		CategorySidebar::updateOrCreate(
			['id' => $request->id],
			['category_sidebar_name' => $request->category_sidebar_name]
		);

		return response()->json([
			'status' => 'success',
			'message' => 'Category sidebar saved successfully'
		]);
	}

	public function categoryDestroy(Request $request)
	{
		$category = CategorySidebar::find($request->id);
		if ($category->sidebar->count() > 0) {
			return response()->json([
				'status' => 'error',
				'message' => 'The selected category still has a sidebar item'
			]);
		} else {
			$category->delete();
			return response()->json([
				'status' => 'success',
				'message' => 'Sidebar successfully deleted
				'
			]);
		}
	}

	public function getCategory()
	{
		return CategorySidebar::all()->toJson();
	}
}

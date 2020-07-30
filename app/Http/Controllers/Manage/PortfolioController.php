<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\CategoryPortfolio;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
	public function index(Request $request)
	{
		$portfolio = Portfolio::all();
		if ($request->ajax()) {
			// $portfolio = Portfolio::all();
			return DataTables::of($portfolio)
				->addIndexColumn()
				->editColumn('category_name', function ($row) {
					return $row->categoryPortfolio->category_name;
				})
				->editColumn('media', function ($row) {
					return '<span><img src="' . asset($row->media) . '" style="height:50px"></span>';
				})
				->addColumn('action', function ($row) {
					$btn = '
					<ul class="table-controls">
					<li>
						<a href="javascript:void(0);" title="Edit" data-id="' . $row->id . '" class="editPortfolio" >
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
								<path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
							</svg>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);" title="Delete" data-id="' . $row->id . '" class="deletePortfolio" >
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
				->rawColumns(['media', 'action'])
				->make(true);
		}
		return view('manage/portfolio/items', compact('portfolio'));
	}

	public function portfolioStore(Request $request)
	{
		if ($request->hasFile('media')) {
			$file = $request->file('media');

			$filename = \Carbon\Carbon::now()->timestamp . '-' . $request->title;
			$extension = '.' . $request->media->getClientOriginalExtension();
			$name = $filename . $extension;

			$dir = "assets/main/images/portfolio";

			$file->move($dir, $name);

			$file_path = $dir . '/' . $name;

			Portfolio::updateOrCreate(
				['id' => $request->id],
				['title' => $request->title, 'category_id' => $request->category_id, 'link' => $request->link, 'text_link' => $request->text_link, 'media' => $file_path]
			);
		} else {
			Portfolio::updateOrCreate(
				['id' => $request->id],
				['title' => $request->title, 'category_id' => $request->category_id, 'link' => $request->link, 'text_link' => $request->text_link,]
			);
		}

		return response()->json(['success' => 'Experience saved successfully.']);
	}

	public function portfolioDestroy(Request $request)
	{
		$portfolio = Portfolio::find($request->id);
		File::delete($portfolio->media);
		$portfolio->delete();
		return response()->json(['success' => 'Experience deleted successfully.']);
	}

	public function category(Request $request)
	{
		$category = CategoryPortfolio::all();
		if ($request->ajax()) {
			// $cat = CategoryPortfolio::all();
			return DataTables::of($category)
				->addIndexColumn()
				->editColumn('total', function ($row) {
					return $row->portfolio->count();
				})
				->addColumn('action', function ($row) {
					$btn = '
					<ul class="table-controls">
					<li>
						<a href="javascript:void(0);" title="Edit" data-id="' . $row->id . '" class="editCategory" >
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
								<path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
							</svg>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);" title="Delete" data-id="' . $row->id . '" class="deleteCategory" >
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
		return view('manage/portfolio/category', compact('category'));
	}

	public function categoryStore(Request $request)
	{
		CategoryPortfolio::updateOrCreate(
			['id' => $request->id],
			['category_name' => $request->category]
		);

		return response()->json(['success' => 'Experience saved successfully.']);
	}

	public function categoryDestroy(Request $request)
	{
		$category = CategoryPortfolio::find($request->id);
		if ($category->portfolio->count() > 0) {
			return response()->json(['status' => 'error', 'message' => 'The selected category still has a portfolio']);
		} else {
			$category->delete();
			return response()->json(['status' => 'success', 'message' => 'Portfolio successfully deleted']);
		}
	}

	public function getCategory()
	{
		return CategoryPortfolio::all()->toJson();
	}
}

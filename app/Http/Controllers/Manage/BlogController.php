<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class BlogController extends Controller
{
	public function index(Request $request)
	{
		$blog = Blog::all();
		if ($request->ajax()) {
			return DataTables::of($blog)
				->addIndexColumn()
				->editColumn('thumbnail', function ($row) {
					return '<span><img src="' . asset($row->thumbnail) . '" style="height:50px"></span>';
				})
				->editColumn('content', function ($row) {
					return substr($row->content, 0, 100) . "....";
				})
				->editColumn('tags', function ($row) {
					$badge = '';
					foreach ($row->tags as $key) {
						$badge .= '<span class="badge badge-info"> ' . $key->name . ' </span>';
					}
					return $badge;
				})
				->editColumn('created_at', function ($row) {
					return date('d M, Y - H:i', strtotime($row->created_at));
				})
				->addColumn('action', function ($row) {
					$btn = '
					<ul class="table-controls">
					<li>
						<a href="' . route('manage.blog.edit', $row->id) . '" title="Edit" class="editBlog" >
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
								<path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
							</svg>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);" title="Delete" data-id="' . $row->id . '" class="deleteBlog" >
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
				->rawColumns(['thumbnail', 'action', 'content', 'tags'])
				->make(true);
		}
		return view('manage/blog/blog', compact('blog'));
	}

	public function blogStore(Request $request)
	{
		$sametitle = Blog::where('id', '!=', $request->id)->where('title', $request->title)->count();
		if ($sametitle > 0) {
			$slug = Str::slug($request->title . ' ' . $sametitle, '-');
		} else {
			$slug = Str::slug($request->title, '-');
		}

		$tags = explode(",", $request->tags);

		if ($request->hasFile('thumbnail')) {

			if ($request->id) {
				$blog = Blog::find($request->id);
				File::delete($blog->thumbnail);
			}

			$file = $request->file('thumbnail');
			$filename = \Carbon\Carbon::now()->timestamp . '-' . substr($slug, 0, 9);
			$extension = '.' . $request->thumbnail->getClientOriginalExtension();
			$name = $filename . $extension;
			$dir = "assets/main/images/blog/thumbnail";
			$file->move($dir, $name);
			$file_path = $dir . '/' . $name;

			$post = Blog::updateOrCreate(
				['id' => $request->id],
				['title' => $request->title, 'thumbnail' => $file_path, 'content' => $request->content, 'tags' => $request->tags, 'slug' => $slug, 'activated' => $request->activated]
			);
			$post->tag($tags);

			return response()->json([
				'status' => 'success',
				'message' => 'Blog data saved successfully'
			]);
		} else {
			$post = Blog::updateOrCreate(
				['id' => $request->id],
				['title' => $request->title, 'content' => $request->content, 'tags' => $request->tags, 'slug' => $slug, 'activated' => $request->activated]
			);
			$post->tag($tags);

			return response()->json([
				'status' => 'success',
				'message' => 'Blog data saved successfully'
			]);
		}

		return response()->json([
			'status' => 'error',
			'message' => 'Something went wrong, try again later'
		]);
	}

	public function blogDestroy(Request $request)
	{
		$blog = Blog::find($request->id);
		File::delete($blog->thumbnail);
		$blog->delete();

		return response()->json([
			'status' => 'success',
			'message' => 'Blog data deleted successfully'
		]);
	}

	public function blogAdd()
	{
		return view('manage/blog/form');
	}

	public function blogEdit($id)
	{
		$blog = Blog::find($id);
		if (empty($blog)) {
			return redirect()->route('manage.blog');
		}
		return view('manage/blog/form', compact('blog'));
	}

	public function blogUploadImage(Request $request)
	{
		if ($request->hasFile('upload')) {
			$file = $request->file('upload');
			$fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

			$fileName = $fileName . '_' . time() . '.' . $file->getClientOriginalExtension();

			$dir = "assets/main/images/blog/upload";

			$file->move($dir, $fileName);

			$ckeditor = $request->input('CKEditorFuncNum');
			$url = asset($dir . "/" . $fileName);
			$msg = 'Image uploaded successfully';

			$response = "<script>window.parent.CKEDITOR.tools.callFunction($ckeditor, '$url', '$msg')</script>";

			@header('Content-type: text/html; charset=utf-8');
			return $response;
		}
	}
}

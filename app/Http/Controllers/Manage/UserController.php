<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\User;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index(Request $request)
    {
        // $user_need_approval = User::whereNull('approved_at')->get();
        $users = User::all();
        if ($request->ajax()) {
            $user = User::latest()->get();
            return DataTables::of($user)
                ->addIndexColumn()
                ->editColumn('birth_date', function ($row) {
                    return $row->birth_date ? date_format(date_create($row->birth_date), "d F Y") : "Not Available";
                })
                ->editColumn('admin', function ($row) {
                    return ($row->admin == 1) ? 'Admin' : 'User';
                })
                ->editColumn('created_at', function ($row) {
                    return $row->created_at ? date_format(date_create($row->created_at), "F d, Y - H:m") : 'Not Available';
                })
                ->editColumn('avatar', function ($row) {
                    return '<span><img src="' . asset($row->avatar) . '" class="profile-img" alt="avatar"></span>';
                })
                ->editColumn('email_verified_at', function ($row) {
                    return '<span class="shadow-none badge badge-' . (($row->email_verified_at) ? 'primary' : 'danger') . '">' . (($row->email_verified_at) ? 'Yes' : 'No') . '</span>';
                })
                ->addColumn('action', function ($row) {
                    $btn = '<ul class="table-controls">
                    <li>
                        <a href="javascript:void(0);" title="Edit" data-id="' . $row->id . '" class="editUser" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" title="Delete" data-id="' . $row->id . '" class="deleteUser" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                            </svg>
                        </a>
                    </li>
                </ul>';
                    // $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action', 'avatar', 'email_verified_at'])
                ->make(true);
        }

        return view('manage/users/list', compact('users'));
    }

    public function profile()
    {
        return view('manage/users/profile');
    }

    public function setting()
    {
        return view('manage/users/setting');
    }

    public function approve($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->update(['approved_at' => now()]);

        return redirect()->route('admin.manage.users')->withMessage('User approved successfully');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('avatar')) {

            $file = $request->file('avatar');

            $filename = \Carbon\Carbon::now()->timestamp . '-user';
            $extension = '.' . $request->avatar->getClientOriginalExtension();
            $name = $filename . $extension;

            $dir = "assets/manage/images/users";

            $file->move($dir, $name);

            $file_path = $dir . '/' . $name;

            if ($request->has('password')) {
                User::updateOrCreate(
                    ['id' => $request->id],
                    ['password' => $request->password, 'email' => $request->email, 'avatar' => $file_path, 'name' => $request->name, 'admin' => $request->admin, 'birth_date' => $request->birth_date, 'approved_at' => ($request->approval == 1) ? now() : null]
                );
            } else {
                User::updateOrCreate(
                    ['id' => $request->id],
                    ['email' => $request->email, 'avatar' => $file_path, 'name' => $request->name, 'admin' => $request->admin, 'birth_date' => $request->birth_date, 'approved_at' => ($request->approval == 1) ? now() : null]
                );
            }
        } else {
            if ($request->has('password')) {
                User::updateOrCreate(
                    ['id' => $request->id],
                    ['password' => $request->password, 'email' => $request->email, 'name' => $request->name, 'admin' => $request->admin, 'birth_date' => $request->birth_date, 'approved_at' => ($request->approval == 1) ? now() : null]
                );
            } else {
                User::updateOrCreate(
                    ['id' => $request->id],
                    ['email' => $request->email, 'name' => $request->name, 'admin' => $request->admin, 'birth_date' => $request->birth_date, 'approved_at' => ($request->approval == 1) ? now() : null]
                );
            }
        }

        return response()->json(['success' => 'Product saved successfully.']);
    }

    public function destroy(Request $request)
    {
        $user_data = User::find($request->id);
        if (!strpos($user_data->avatar, 'default-user.png')) {
            File::delete($user_data->avatar);
        }
        $user_data->delete();

        return response()->json(['success' => 'Product deleted successfully.']);
    }
}

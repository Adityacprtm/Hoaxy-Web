<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\Info;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use File;
use Throwable;

class InfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $info = Info::all();
        return view('manage.info.index', compact('info'));
    }

    public function add(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'infoKey' => 'required',
            'infoText' => 'required_if:checkbox-image,null',
            'infoImage' => 'required_if:checkbox-image,on|image',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            if ($req->infoImage) {

                $file = $req->file('infoImage');

                $tipe = 1;

                $filename = $req->infoKey;
                $extension = '.' . $req->infoImage->getClientOriginalExtension();
                $name = $filename . $extension;

                $dir = "assets/static/images/info";

                $file->move($dir, $name);

                $infoValue = $dir . '/' . $name;
            } else {
                $tipe = 0;
                $infoValue = $req->infoText;
            }

            try {
                Info::create([
                    'tipe' => $tipe,
                    'key' => $req->infoKey,
                    'value' => $infoValue
                ]);
                return redirect()->route('manage.info');
            } catch (Throwable $e) {
                report($e);
                return redirect()->back()
                    ->withErrors($e->__toString())
                    ->withInput();
            }
        }
    }

    public function edit($id)
    {
        $info = Info::find($id);
        return response()->json($info);
    }

    public function delete(Request $req)
    {
        $dataInfo = Info::find($req->id);
        File::delete($dataInfo->value);
        $dataInfo->delete();
        return response()->json(['success' => 'Product deleted successfully.']);
    }
}

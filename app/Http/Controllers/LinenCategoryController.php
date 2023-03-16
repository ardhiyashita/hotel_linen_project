<?php

namespace App\Http\Controllers;

use App\Models\LinenCategory;
use Illuminate\Http\Request;

class LinenCategoryController extends Controller
{
    public function index()
    {
        $data = LinenCategory::all();

        return view('sidebar_linen/preset/linen_category/index', compact('data'));
    }

    public function create()
    {
        $data = LinenCategory::all();
        return view('sidebar_linen/preset/linen_category/create', compact('data'));
    }

    public function create_save(Request $request)
    {
        //dd($request);
        $value = $request->validate([
            'linen_code' => 'required',
            'linen_name' => 'required',
            'description' => 'required',
        ]);

        // $data = Driver::create($value);

        LinenCategory::create([
            // 'id' => Str::uuid(),
            'linen_code' => $request->linen_code,
            'linen_name' => $request->linen_name,
            'description' => $request->description,
        ]);

        return redirect()->back();
    }

    public function update($id)
    {
        $data = LinenCategory::find($id);
        $linen_center = LinenCategory::all();
        return view('sidebar_linen/preset/linen_category/update', compact('data'));
    }

    public function update_save(Request $request, $id)
    {

        // dd($request);
        $value = $request->validate([
            'linen_code' => 'required',
            'linen_name' => 'required',
            'description' => 'required',
        ]);

        $data = LinenCategory::find($id);

        $data->linen_code = $request->linen_code;
        $data->linen_name = $request->linen_name;
        $data->description = $request->description;
        $data->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        // dd($id);
        LinenCategory::find($id)->delete();
        return redirect()->back();
    }

    public function read($id)
    {
        $data = LinenCategory::find($id);
        return view('sidebar_linen/preset/linen_category/read', compact('data'));
    }
}

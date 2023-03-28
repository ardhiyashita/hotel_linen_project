<?php

namespace App\Http\Controllers;

use App\Models\LinenCategory;
use App\Models\LinenType;
use Illuminate\Http\Request;

class LinenTypeController extends Controller
{
    public function index()
    {
        $data = LinenType::all();

        return view('sidebar_linen/preset/linen_type/index', compact('data'));
    }

    public function create()
    {
        $linen_category = LinenCategory::all();
        return view('sidebar_linen/preset/linen_type/create', compact('linen_category'));
    }

    public function create_save(Request $request)
    {
        //dd($request);
        $value = $request->validate([
            'linen_code' => 'required',
            'linen_type' => 'required',
            'linen_category' => 'required',
            'size' => 'required',
            'color' => 'required',
            'max_cycle' => 'required',
            'standar_packing' => 'required',
        ]);

        $linen_category_id = LinenCategory::where('id', '=', $request->linen_category)->first();

        LinenType::create([
            // 'id' => Str::uuid(),
            'id_linen_category' => $request->linen_category,
            'linen_code' => $request->linen_code,
            'linen_type' => $request->linen_type,
            'linen_category' => $linen_category_id->linen_name,
            'size' => $request->size,
            'color' => $request->color,
            'max_cycle' => $request->max_cycle,
            'standar_packing' => $request->standar_packing,
        ]);

        return redirect()->back();
    }

    public function update($id)
    {
        //dd($id);
        $data = LinenType::find($id);
        $linen_type = LinenType::all();
        return view('sidebar_linen/preset/linen_type/update', compact('linen_type', 'data'));
    }

    public function update_save(Request $request, $id)
    {

        // dd($request);
        $value = $request->validate([
            'linen_code' => 'required',
            'linen_type' => 'required',
            'linen_category' => 'required',
            'size' => 'required',
            'color' => 'required',
            'max_cycle' => 'required',
            'standar_packing' => 'required',
        ]);

        $data = LinenType::find($id);
        $linen_type = LinenType::where('id', '=', $request->linen_type)->first();

        $data->linen_code = $request->linen_code;
        $data->linen_type = $linen_type->linen_code;
        $data->linen_category = $request->linen_category;
        $data->size = $request->size;
        $data->color = $request->color;
        $data->max_cycle = $request->max_cycle;
        $data->standar_packing = $request->standar_packing;
        $data->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        // dd($id);
        LinenType::find($id)->delete();
        return redirect()->back();
    }

    public function read($id)
    {
        $data = LinenType::find($id);
        return view('sidebar_linen/preset/linen_type/read', compact('data'));
    }
}

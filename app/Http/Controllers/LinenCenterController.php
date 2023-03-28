<?php

namespace App\Http\Controllers;

use App\Models\LinenCenterDetail;
use Illuminate\Http\Request;

class LinenCenterController extends Controller
{
    public function index()
    {
        $data = LinenCenterDetail::all();

        return view('menu_linen/linen_center/index', compact('data'));
    }

    public function create()
    {
        $data = LinenCenterDetail::all();
        return view('menu_linen/linen_center/create', compact('data'));
    }

    public function create_save(Request $request)
    {
        // dd($request);
        $value = $request->validate([
            'name' => 'required',
            'code' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'description' => 'required',
        ]);

        // $data = Driver::create($value);

        LinenCenterDetail::create([
            // 'id' => Str::uuid(),
            'name' => $request->name,
            'code' => $request->code,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'description' => $request->description,
        ]);

        return redirect()->back();
    }

    public function update($id)
    {
        $data = LinenCenterDetail::find($id);
        $linen_center = LinenCenterDetail::all();
        return view('menu_linen/linen_center/update', compact('data'));
    }

    public function update_save(Request $request, $id)
    {

        // dd($request);
        $value = $request->validate([
            'name' => 'required',
            'code' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'description' => 'required',
        ]);

        $data = LinenCenterDetail::find($id);

        $data->name = $request->name;
        $data->code = $request->code;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->description = $request->description;
        $data->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        // dd($id);
        LinenCenterDetail::find($id)->delete();
        return redirect()->back();
    }

    public function read($id)
    {
        $data = LinenCenterDetail::find($id);
        return view('menu_linen/linen_center/read', compact('data'));
    }
}

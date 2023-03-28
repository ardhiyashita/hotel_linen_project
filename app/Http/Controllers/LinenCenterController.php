<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LinenCenterDetail;
use RealRashid\SweetAlert\Facades\Alert;

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

        Alert::success('Congrats', 'Data Berhasil Disimpan');
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

        Alert::success('Congrats', 'Data Berhasil Diupdate');
        return redirect()->back();
    }

    public function delete($id)
    {
        // dd($id);
        LinenCenterDetail::find($id)->delete();

        Alert::success('Congrats', 'Data Berhasil Dihapus');
        return redirect()->back();
    }

    public function read($id)
    {
        $data = LinenCenterDetail::find($id);
        return view('menu_linen/linen_center/read', compact('data'));
    }
}

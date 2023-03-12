<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $data = Supplier::all();
        return view('sidebar_linen/preset/supplier/index', compact('data'));
    }

    public function create()
    {
        $data = Supplier::all();
        return view('sidebar_linen/preset/supplier/create', compact('data'));
    }

    public function create_save(Request $request)
    {
        //dd($request);
        $value = $request->validate([
            'code' => 'required',
            'name' => 'required',
            'manufacture' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'note' => 'required',
        ]);

        // $data = Driver::create($value);

        Supplier::create([
            // 'id' => Str::uuid(),
            'code' => $request->code,
            'name' => $request->name,
            'manufacture' => $request->manufacture,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'note' => $request->note,
        ]);

        return redirect()->back();
    }

    public function update($id)
    {
        $data = Supplier::find($id);
        $linen_center = Supplier::all();
        return view('sidebar_linen/preset/supplier/update', compact('data'));
    }

    public function update_save(Request $request, $id)
    {

        // dd($request);
        $value = $request->validate([
            'code' => 'required',
            'name' => 'required',
            'manufacture' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'note' => 'required',
        ]);

        $data = Supplier::find($id);

        $data->code = $request->code;
        $data->name = $request->name;
        $data->manufacture = $request->manufacture;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->note = $request->note;
        $data->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        // dd($id);
        Supplier::find($id)->delete();
        return redirect()->back();
    }
}

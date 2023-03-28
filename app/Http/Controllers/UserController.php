<?php

namespace App\Http\Controllers;

use App\Models\UserPegawai;
use App\Models\LaundryPlant;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $data = UserPegawai::all();
        // dd($data);
        return view('sidebar_linen/privillage/user/index', compact('data'));
    }

    public function create()
    {
        $laundry_plant = LaundryPlant::all();
        return view('sidebar_linen/privillage/user/create', compact('laundry_plant'));
    }

    public function create_save(Request $request)
    {
        $value = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'linen_center' => 'required',
            'laundry_plant' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        // $data = Driver::create($value);

        $laundry_plant_id = LaundryPlant::where('id', '=', $request->laundry_plant)->first();

        UserPegawai::create([
            // 'id' => Str::uuid(),
            'id_laundry_plant' => $request->laundry_plant,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'linen_center' => $request->linen_center,
            'laundry_plant' => $laundry_plant_id->name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        Alert::success('Congrats', 'Data Berhasil Disimpan');
        return redirect()->back();
    }

    public function update($id)
    {
        $data = UserPegawai::find($id);
        // $laundry_plant = LaundryPlant::where('id_laundry_plant', '=', $data->id_laundry_plant)->first();
        $laundry_plant = LaundryPlant::all();
        return view('sidebar_linen/privillage/user/update', compact('laundry_plant', 'data'));
    }

    public function update_save(Request $request, $id)
    {

        // dd($request);
        $value = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'linen_center' => 'required',
            'laundry_plant' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        $data = UserPegawai::find($id);
        $laundry_plant = LaundryPlant::where('id', '=', $data->id_laundry_plant)->first();
        // dd($laundry_plant);

        $data->id_laundry_plant = $request->laundry_plant;
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->linen_center = $request->linen_center;
        $data->laundry_plant = $laundry_plant->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->save();

        Alert::success('Congrats', 'Data Berhasil Diupdate');
        return redirect()->back();
    }

    public function delete($id)
    {
        // dd($id);
        UserPegawai::find($id)->delete();

        Alert::success('Congrats', 'Data Berhasil Dihapus');
        return redirect()->back();
    }

    public function read($id)
    {
        $data = UserPegawai::find($id);
        return view('sidebar_linen/privillage/user/read', compact('data'));
    }
}

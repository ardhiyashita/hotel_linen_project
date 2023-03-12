<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\LaundryPlant;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $data = Driver::all();
        // dd($data);
        return view('menu_linen/total_driver/index', compact('data'));
    }

    public function create()
    {
        $laundry_plant = LaundryPlant::all();
        return view('menu_linen/total_driver/create', compact('laundry_plant'));
    }

    public function create_save(Request $request)
    {
        $value = $request->validate([
            'driver_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'laundry_plant' => 'required',
            'company' => 'required',
        ]);

        // $data = Driver::create($value);

        $laundry_plant_id = LaundryPlant::where('id', '=', $request->laundry_plant)->first();

        Driver::create([
            // 'id' => Str::uuid(),
            'id_laundry_plant' => $request->laundry_plant,
            'driver_id' => $request->driver_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'laundry_plant' => $laundry_plant_id->name,
            'company' => $request->company,
        ]);

        return redirect()->back();
    }

    public function update($id)
    {
        $data = Driver::find($id);
        // $laundry_plant = LaundryPlant::where('id_laundry_plant', '=', $data->id_laundry_plant)->first();
        $laundry_plant = LaundryPlant::all();
        return view('menu_linen/total_driver/update', compact('laundry_plant', 'data'));
    }

    public function update_save(Request $request, $id)
    {

        // dd($request);
        $value = $request->validate([
            'driver_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'laundry_plant' => 'required',
            'company' => 'required',
        ]);

        $data = Driver::find($id);
        $laundry_plant = LaundryPlant::where('id', '=', $data->id_laundry_plant)->first();
        // dd($laundry_plant);

        $data->driver_id = $request->driver_id;
        $data->id_laundry_plant = $request->laundry_plant;
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->gender = $request->gender;
        $data->phone = $request->phone;
        $data->laundry_plant = $laundry_plant->name;
        $data->company = $request->company;
        $data->note = $request->note;
        $data->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        // dd($id);
        Driver::find($id)->delete();
        return redirect()->back();
    }

    public function read($id)
    {
        $data = Driver::find($id);
        return view('menu_linen/total_driver/read', compact('data'));
    }
}

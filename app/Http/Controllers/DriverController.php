<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\LaundryPlant;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index(Type $var = null)
    {
        $data = Driver::all();
        return view('menu_linen/total_driver/index', compact('data'));
    }

    public function create(Type $var = null)
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

        Driver::create([
            'driver_id' => $request->driver_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'laundry_plant' => $request->laundry_plant,
            'company' => $request->company,
        ]);
        
    }
}

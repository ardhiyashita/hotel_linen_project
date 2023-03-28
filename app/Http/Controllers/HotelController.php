<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\LaundryPlant;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $data = Hotel::all();

        return view('menu_linen/total_hotel/index', compact('data'));
    }

    public function create()
    {
        $laundry_plant = LaundryPlant::all();
        return view('menu_linen/total_hotel/create', compact('laundry_plant'));
    }

    public function create_save(Request $request)
    {
        // dd($request);
        $value = $request->validate([
            'hotel_code' => 'required',
            'hotel_name' => 'required',
            'laundry_plant' => 'required',
            'contact_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        // $data = Driver::create($value);

        $laundry_plant_id = LaundryPlant::where('id', '=', $request->laundry_plant)->first();
        // dd($laundry_plant_id);

        Hotel::create([
            // 'id' => Str::uuid(),
            'id_laundry_plant' => $request->laundry_plant,
            'hotel_code' => $request->hotel_code,
            'hotel_name' => $request->hotel_name,
            'laundry_plant' => $laundry_plant_id->name,
            'contact_name' => $request->contact_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'note' => $request->note,
        ]);

        return redirect()->back();
    }

    public function update($id)
    {
        // dd($id);
        $data = Hotel::find($id);
        // $laundry_plant = LaundryPlant::where('id', '=', $data->id)->first();
        $laundry_plant = LaundryPlant::all();
        return view('menu_linen/total_hotel/update', compact('laundry_plant', 'data'));
    }

    public function update_save(Request $request, $id)
    {

        // dd($request);
        $value = $request->validate([
            'hotel_code' => 'required',
            'hotel_name' => 'required',
            'laundry_plant' => 'required',
            'contact_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'note' => 'required',
        ]);

        $data = Hotel::find($id);
        $laundry_plant = LaundryPlant::where('id', '=', $data->id_laundry_plant)->first();
        //dd($linen_center);

        $data->id_laundry_plant = $request->laundry_plant;
        $data->hotel_code = $request->hotel_code;
        $data->hotel_name = $request->hotel_name;
        $data->laundry_plant = $laundry_plant->name;
        $data->contact_name = $request->contact_name;
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
        Hotel::find($id)->delete();
        return redirect()->back();
    }

    public function read($id)
    {
        $data = Hotel::find($id);
        return view('menu_linen/total_hotel/read', compact('data'));
    }
}

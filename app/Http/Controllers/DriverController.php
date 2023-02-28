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
        $laundry_plant = $request->laundry_plant;
        dd($request);
        $request->validate([
        'satuan' => 'required',
        'supplier' => 'required',
        'kategori' => 'required',
        'kode' => 'required',
        'nama' => 'required',
        'stok' => 'required',
        'beli' => 'required',
        'jual' => 'required',
        'foto' => 'required',
        ]);

    }
}

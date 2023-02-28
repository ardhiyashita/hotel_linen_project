<?php

namespace App\Http\Controllers;

use App\Models\LaundryPlant;
use Illuminate\Http\Request;

class LaundryPlantController extends Controller
{
    public function index(Type $var = null)
    {
        $data = LaundryPlant::all();

        return view('menu_linen/laundry_plant/index', compact('data'));
    }
}

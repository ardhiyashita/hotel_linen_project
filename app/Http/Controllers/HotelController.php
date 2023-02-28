<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(Type $var = null)
    {
        $data = Hotel::all();

        return view('menu_linen/total_hotel/index', compact('data'));
    }
}

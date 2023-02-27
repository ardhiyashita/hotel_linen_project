<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index(Type $var = null)
    {
        $data2 = Driver::all();
        return view('menu_linen/total_driver/index', compact('data2'));
    }
}

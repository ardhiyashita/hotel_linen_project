<?php

namespace App\Http\Controllers;

use App\Models\CleanLinen;
use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function coba(Type $var = null)
    {
        $data = CleanLinen::all();
        $data2 = CleanLinen::where('hotel_name', 'adipura 2')->first();
        // dd($data2);
        return view('coba', compact('data2'));
    }
}

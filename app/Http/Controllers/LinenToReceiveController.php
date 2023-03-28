<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinenToReceiveController extends Controller
{
    public function index()
    {
        $data = LinenToReceive::all();

        return view('menu_linen/linen_to_receive/index', compact('data'));
    }
}

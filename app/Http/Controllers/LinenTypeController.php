<?php

namespace App\Http\Controllers;

use App\Models\LinenType;
use Illuminate\Http\Request;

class LinenTypeController extends Controller
{
    public function index(Type $var = null)
    {
        $data = LinenType::all();

        return view('menu_linen/linen_type/index', compact('data'));
    }
}

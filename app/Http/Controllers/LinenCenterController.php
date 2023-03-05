<?php

namespace App\Http\Controllers;

use App\Models\LinenCenterDetail;
use Illuminate\Http\Request;

class LinenCenterController extends Controller
{
    public function index()
    {
        $data = LinenCenterDetail::all();

        return view('menu_linen/linen_center/index', compact('data'));
    }
}

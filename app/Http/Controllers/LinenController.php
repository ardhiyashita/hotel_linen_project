<?php

namespace App\Http\Controllers;

use App\Models\Linen;
use Illuminate\Http\Request;

class LinenController extends Controller
{
    public function index(Type $var = null)
    {
        $data = Linen::all();

        return view('menu_linen/total_linen/index', compact('data'));
    }
}

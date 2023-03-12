<?php

namespace App\Http\Controllers;

use App\Models\Linen;
use Illuminate\Http\Request;

class CheckLinenStatusController extends Controller
{
    public function index()
    {
        $data = Linen::all();
        // dd($data);
        return view('menu_linen/check_linen_status/index', compact('data'));
    }
}

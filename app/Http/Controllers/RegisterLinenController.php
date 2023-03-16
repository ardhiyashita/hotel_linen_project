<?php

namespace App\Http\Controllers;

use App\Models\Linen;
use App\Models\RegisterHistory;
use Illuminate\Http\Request;

class RegisterLinenController extends Controller
{
    public function index()
    {
        $data = RegisterHistory::all();

        return view('menu_linen/total_register_linen/index', compact('data'));
    }

    public function read($id)
    {
        $data = RegisterHistory::find($id);
        return view('menu_linen/total_register_linen/read', compact('data'));
    }
}

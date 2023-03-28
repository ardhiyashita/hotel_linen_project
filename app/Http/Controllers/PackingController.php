<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Hotel;
use App\Models\Packing;
use Illuminate\Http\Request;

class PackingController extends Controller
{
    public function index()
    {
        $data = Packing::all();

        return view('sidebar_linen/transaction_management/packing/index', compact('data'));
    }

    public function read($id)
    {
        $data = Packing::find($id);
        return view('sidebar_linen/transaction_management/packing/read', compact('data'));
    }
}

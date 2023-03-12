<?php

namespace App\Http\Controllers;

use App\Models\CleanLinen;
use App\Models\HotelTransaction;
use App\Models\Packed;
use Illuminate\Http\Request;

class HotelTransactionController extends Controller
{
    public function index()
    {
        $data = HotelTransaction::all();

        return view('menu_linen/hotel_transaction/index', compact('data'));
    }

    public function read()
    {
        return view('menu_linen/hotel_transaction/read', compact('data'));
    }
}

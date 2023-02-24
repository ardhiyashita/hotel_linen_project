<?php

namespace App\Http\Controllers;

use App\Models\HotelTransaction;
use Illuminate\Http\Request;

class HotelTransactionController extends Controller
{
    public function index(Type $var = null)
    {
        $data = HotelTransaction::all();

        return view('menu_linen/hotel_transaction/index', compact('data'));
    }

    public function update(Type $var = null)
    {
        # code...
    }

    
}

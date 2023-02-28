<?php

namespace App\Http\Controllers;

use App\Models\InternalTransaction;
use Illuminate\Http\Request;

class InternalTransactionController extends Controller
{
    public function index(Type $var = null)
    {
        $data = InternalTransaction::all();

        return view('menu_linen/internal_transaction/index', compact('data'));
    }
}

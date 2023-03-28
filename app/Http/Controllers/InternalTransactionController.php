<?php

namespace App\Http\Controllers;

use App\Models\InternalTransaction;
use Illuminate\Http\Request;

class InternalTransactionController extends Controller
{
    public function index()
    {
        $data = InternalTransaction::all();

        return view('menu_linen/internal_transaction/index', compact('data'));
    }

    public function read($id)
    {
        $data = InternalTransaction::find($id);
        return view('menu_linen/internal_transaction/read', compact('data'));
    }
}

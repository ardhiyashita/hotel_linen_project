<?php

namespace App\Http\Controllers;

use App\Models\LinenType;
use Illuminate\Http\Request;
use App\Models\LinenCategory;
use RealRashid\SweetAlert\Facades\Alert;

class Ajax extends Controller
{
    public function getlinenType(Request $req)
    {
        $q = LinenType::find($req->id);
        return response()->json($q);
    }
}

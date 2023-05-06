<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Linen;
use App\Models\LinenCenterDetail;
use App\Models\Template;
use Illuminate\Http\Request;

class LinenCenterApi extends Controller
{
    public function get(Request $req)
    {
        if (empty($req->id)) {
            $q =  LinenCenterDetail::all();
        } else {
            $q =  LinenCenterDetail::where('id', $req->id)->get();
        }
        return response()->json([
            'message' => 'Success',
            'data' => $q
        ], 200);
    }
}

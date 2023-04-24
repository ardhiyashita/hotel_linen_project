<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\LaundryPlant;
use App\Models\Linen;
use App\Models\LinenCategory;
use App\Models\Template;
use Illuminate\Http\Request;

class LaundryPlantApi extends Controller
{
    public function get()
    {
        $q =  LaundryPlant::with('jabatan', 'linen_center')->get();
        return response()->json([
            'message' => 'Success',
            'data' => $q
        ], 200);
    }
}

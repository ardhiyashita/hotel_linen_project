<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Linen;
use App\Models\LinenCategory;
use App\Models\Template;
use Illuminate\Http\Request;

class KategoriLinenApi extends Controller
{
    public function get()
    {
        $q =  LinenCategory::with('jabatan')->get();
        return response()->json([
            'message' => 'Success',
            'data' => $q
        ], 200);
    }
}

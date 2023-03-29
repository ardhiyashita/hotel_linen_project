<?php

namespace App\Http\Controllers;

use App\Models\LinenType;
use Illuminate\Http\Request;
use App\Models\LinenCategory;
use App\Models\Template;
use RealRashid\SweetAlert\Facades\Alert;

class Ajax extends Controller
{
    public function getlinenType(Request $req)
    {
        // get linen type
        $q = LinenType::find($req->id);
        return response()->json($q);
    }

    public function getTemplate(Request $req)
    {
        // get linen type
        $q = Template::find($req->id);
        return response()->json($q);
    }
}

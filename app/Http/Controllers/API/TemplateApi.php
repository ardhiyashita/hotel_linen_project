<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Linen;
use App\Models\Template;
use Illuminate\Http\Request;

class TemplateApi extends Controller
{
    public function get()
    {
        $q =  Template::with('linen_type.jabatan')->get();
        return response()->json([
            'message' => 'Success',
            'data' => $q
        ], 200);
    }

    public function insert(Request $req)
    {

        try {
            $tag_id = $req->tag_id;
            $id_template = $req->id_template;
            $arr_tag = $tag_id;

            if (count($arr_tag) > 0) {
                $data = [];
                for ($i = 0; $i < count($arr_tag); $i++) {
                    $data[] = [
                        'id_template' => $id_template,
                        'tag_id' => $arr_tag[$i],
                        'linen_name' => '',
                    ];
                }
                Linen::insert($data);
            }

            return response()->json([
                'message' => 'Success',
                'status' => true,
                'data' => $data
            ], 200);
        } catch (\Exception $err) {
            // show error server
            return response()->json([
                'message' => 'Error : ' . $err->getMessage(),
                'status' => false
            ], 500);
        }
    }
}

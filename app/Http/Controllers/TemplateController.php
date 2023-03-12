<?php

namespace App\Http\Controllers;

use App\Models\LinenType;
use App\Models\Supplier;
use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        $data = Template::all();

        return view('menu_linen/total_template/index', compact('data'));
    }

    public function create()
    {
        $linen_type = LinenType::all();
        return view('menu_linen/total_template/create', compact('linen_type'));
    }

    public function create_save(Request $request)
    {
        // dd($request);
        $value = $request->validate([
            'linen_code' => 'required',
            'template_name' => 'required',
            'linen_type' => 'required',
            'size' => 'required',
            'color' => 'required',
            'supplier' => 'required',
            'max_cycle' => 'required',
            'sew_by' => 'required',
            'ownership' => 'required',
            'linen_condition' => 'required',
            'quarter' => 'required',
            'year' => 'required',
        ]);

        $linen_type_id = LinenType::where('id', '=', $request->linen_type)->first();

        Template::create([
            // 'id' => Str::uuid(),
            'id_linen_type' => $request->linen_type,
            'linen_code' => $request->linen_code,
            'template_name' => $request->template_name,
            'linen_type' => $linen_type_id->linen_code,
            'size' => $request->size,
            'color' => $request->color,
            'supplier' => $request->supplier,
            'max_cycle' => $request->max_cycle,
            'sew_by' => $request->sew_by,
            'ownership' => $request->ownership,
            'linen_condition' => $request->linen_condition,
            'quarter' => $request->quarter,
            'year' => $request->year,
        ]);

        return redirect()->back();
    }

    public function update($id)
    {
        //dd($id);
        $data = Template::find($id);
        $linen_type = LinenType::all();
        return view('menu_linen/total_template/update', compact('linen_type', 'data'));
    }

    public function update_save(Request $request, $id)
    {

        // dd($request);
        $value = $request->validate([
            'linen_code' => 'required',
            'template_name' => 'required',
            'linen_type' => 'required',
            'size' => 'required',
            'color' => 'required',
            'supplier' => 'required',
            'max_cycle' => 'required',
            'sew_by' => 'required',
            'ownership' => 'required',
            'linen_condition' => 'required',
            'quarter' => 'required',
            'year' => 'required',
        ]);

        $data = Template::find($id);
        $linen_type = LinenType::where('id', '=', $request->linen_type)->first();

        $data->linen_code = $request->linen_code;
        $data->template_name = $request->template_name;
        $data->linen_type = $linen_type->linen_code;
        $data->size = $request->size;
        $data->color = $request->color;
        $data->supplier = $request->supplier;
        $data->max_cycle = $request->max_cycle;
        $data->sew_by = $request->sew_by;
        $data->ownership = $request->ownership;
        $data->linen_condition = $request->linen_condition;
        $data->quarter = $request->quarter;
        $data->year = $request->year;
        $data->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        // dd($id);
        Template::find($id)->delete();
        return redirect()->back();
    }
}

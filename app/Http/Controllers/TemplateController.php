<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(Type $var = null)
    {
        $data = Template::all();

        return view('menu_linen/total_template/index', compact('data'));
    }
}

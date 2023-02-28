<?php

namespace App\Http\Controllers;

use App\Models\LinenCategory;
use Illuminate\Http\Request;

class LinenCategoryController extends Controller
{
    public function index(Type $var = null)
    {
        $data = LinenCategory::all();

        return view('menu_linen/linen_category/index', compact('data'));
    }

    public function create(Type $var = null)
    {
        return view('menu_linen/linen_category/create');
    }

    public function read(Type $var = null)
    {
        # code...
    }

    public function update(Type $var = null)
    {
        # code...
    }

    public function delete(Type $var = null)
    {
        # code...
    }

}

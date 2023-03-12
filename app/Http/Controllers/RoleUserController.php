<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\RoleUser;
use Illuminate\Http\Request;

class RoleUserController extends Controller
{
    public function index()
    {
        $data = RoleUser::all();
        return view('sidebar_linen/privillage/role_user/index', compact('data'));
    }

    public function create()
    {
        $role_type = Jabatan::all();
        return view('sidebar_linen/privillage/role_user/create', compact('role_type'));
    }

    public function create_save(Request $request)
    {
        //dd($request);
        $value = $request->validate([
            'role' => 'required',
            'description' => 'required',
            'role_type' => 'required',
        ]);

        // $data = Driver::create($value);

        $role_type_id = Jabatan::where('id', '=', $request->role_type)->first();

        RoleUser::create([
            // 'id' => Str::uuid(),
            'id_jabatan' => $request->role_type,
            'role' => $request->role,
            'description' => $request->description,
            'role_type' => $role_type_id->nama_jabatan,
        ]);

        return redirect()->back();
    }

    public function update($id)
    {
        $data = RoleUser::find($id);
        $role_type = Jabatan::all();
        return view('sidebar_linen/privillage/role_user/update', compact('role_type', 'data'));
    }

    public function update_save(Request $request, $id)
    {

        // dd($request);
        $value = $request->validate([
            'role' => 'required',
            'description' => 'required',
            'role_type' => 'required',
        ]);

        $data = RoleUser::find($id);
        $role_type = Jabatan::where('id', '=', $data->id_jabatan)->first();

        $data->id_jabatan = $request->role_type;
        $data->role = $request->role;
        $data->description = $request->description;
        $data->role_type = $role_type->nama_jabatan;
        $data->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        // dd($id);
        RoleUser::find($id)->delete();
        return redirect()->back();
    }
}

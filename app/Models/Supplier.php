<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $guards = [];
    protected $table = 'tb_supplier';
    protected $fillable = ['id_supplier', 'id_jabatan', 'code_supplier', 'name_supplier', 'manufacture', 'phone', 'email', 'address', 'note'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan', 'id_jabatan');
    }

}

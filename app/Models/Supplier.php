<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guards = [];
    protected $table = 'tb_supplier';
    protected $fillable = ['id', 'id_jabatan', 'code', 'name', 'manufacture', 'phone', 'email', 'address', 'note'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id', 'id');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'id', 'id');
    }
}

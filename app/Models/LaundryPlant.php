<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaundryPlant extends Model
{
    use HasFactory;
    protected $guards = [];
    protected $table = 'tb_laundry_plant';
    protected $fillable = ['id_laundry_plant', 'id_jabatan', 'id_linen_center', 'name', 'code', 'phone', 'email', 'linen_center', 'address', 'description'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan', 'id_jabatan');
    }

    public function linen_center()
    {
        return $this->belongsTo(LinenCenterDetail::class, 'id_linen_center', 'id_linen_center');
    }
}

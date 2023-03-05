<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinenCenterDetail extends Model
{
    use HasFactory;
    protected $guards = [];
    protected $table = 'tb_linen_center_detail';
    protected $fillable = ['id', 'id_jabatan', 'name', 'code', 'phone', 'email', 'address', 'description'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan', 'id_jabatan');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinenType extends Model
{
    use HasFactory;
    protected $guards = [];
    protected $table = 'tb_linen_type';
    protected $fillable = ['id_linen_type', 'id_jabatan', 'id_linen_category', 'linen_code', 'linen_type', 'linen_category', 'size', 'color', 'max_cycle', 'standar_packing'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan', 'id_jabatan');
    }

    public function linen_category()
    {
        return $this->belongsTo(LinenCategory::class, 'id', 'id_linen_category');
    }
}

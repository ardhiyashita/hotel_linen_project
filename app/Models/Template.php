<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;
    protected $guards = [];
    protected $table = 'tb_template';
    protected $fillable = ['id_template', 'id_jabatan', 'id_linen_type', 'code', 'template_name', 'linen_code', 'linen_type', 'linen_place', 'size', 'color', 'supplier', 'max_cycle', 'sew_by', 'ownership', 'linen_condition', 'quarter'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan', 'id_jabatan');
    }

    public function linen_type()
    {
        return $this->belongsTo(LinenType::class, 'id_linen_type', 'id_linen_type');
    }
}

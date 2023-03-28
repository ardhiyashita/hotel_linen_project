<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Template extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guards = [];
    protected $table = 'tb_template';
    protected $fillable = ['id', 'id_jabatan', 'id_linen_type', 'linen_code', 'template_name', 'linen_type', 'size', 'color', 'supplier', 'max_cycle', 'sew_by', 'ownership', 'linen_condition', 'quarter', 'year'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id', 'id');
    }

    public function linen_type()
    {
        return $this->belongsTo(LinenType::class, 'id', 'id_linen_type');
    }
}

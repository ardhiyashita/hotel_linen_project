<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RegisterHistory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guards = [];
    protected $table = 'tb_register_history';
    protected $fillable = ['id', 'id_jabatan', 'id_linen', 'register_date', 'template_code', 'template_name', 'linen_type', 'size', 'total', 'supplier', 'color'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id', 'id');
    }

    public function linen()
    {
        return $this->belongsTo(Linen::class, 'id', 'id_linen');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterHistory extends Model
{
    use HasFactory;
    protected $guards = [];
    protected $table = 'tb_register_history';
    protected $fillable = ['id_register_history', 'id_jabatan', 'id_linen', 'register_date', 'template_code', 'template_name', 'linen_type', 'size', 'total', 'supplier', 'color'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan', 'id_jabatan');
    }

    public function linen()
    {
        return $this->belongsTo(Linen::class, 'id_linen', 'id_linen');
    }
}

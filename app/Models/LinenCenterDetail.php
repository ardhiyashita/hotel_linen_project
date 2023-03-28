<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LinenCenterDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guards = [];
    protected $table = 'tb_linen_center_detail';
    protected $fillable = ['id', 'id_jabatan', 'name', 'code', 'phone', 'email', 'address', 'description'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id', 'id');
    }

    public function linen_center()
    {
        return $this->belongsTo(LinenCenterDetail::class, 'id', 'id');
    }
}

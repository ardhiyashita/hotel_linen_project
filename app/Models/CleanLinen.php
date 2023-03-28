<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CleanLinen extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guards = [];
    protected $table = 'tb_clean_linen';
    protected $fillable = ['id_clean_linen', 'id_jabatan', 'id_linen', 'hotel_name', 'place', 'linen_code', 'linen_name', 'size', 'total', 'total_clean', 'total_dirty', 'linen_status'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id', 'id');
    }

    public function linen()
    {
        return $this->belongsTo(Linen::class, 'id_linen', 'id_linen');
    }
}

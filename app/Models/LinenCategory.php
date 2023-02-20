<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinenCategory extends Model
{
    use HasFactory;
    protected $guards = [];
    protected $table = 'tb_linen_category';
    protected $fillable = ['id_linen_category', 'id_jabatan', 'linen_code', 'linen_name', 'description'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan', 'id_jabatan');
    }
    
}

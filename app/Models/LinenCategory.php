<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LinenCategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guards = [];
    protected $table = 'tb_linen_category';
    protected $fillable = ['id_linen_category', 'id_jabatan', 'linen_code', 'linen_name', 'description'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id', 'id');
    }

    public function linen_category()
    {
        return $this->belongsTo(LLinenCategory::class, 'id', 'id');
    }
}

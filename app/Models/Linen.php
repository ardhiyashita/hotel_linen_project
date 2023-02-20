<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linen extends Model
{
    use HasFactory;
    protected $guards = [];
    protected $table = 'tb_linen';
    protected $fillable = ['id_linen', 'id_jabatan', 'id_template', 'id_supplier', 'id_hotel', 'tag_id', 'linen_name', 'size', 'price', 'hotel_name', 'color', 'linen_code', 'linen_code', 'linen_type', 'template', 'supplier', 'linen_status'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan', 'id_jabatan');
    }

    public function template()
    {
        return $this->belongsTo(Template::class, 'id_template', 'id_template');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'id_supplier', 'id_supplier');
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'id_hotel', 'id_hotel');
    }
}

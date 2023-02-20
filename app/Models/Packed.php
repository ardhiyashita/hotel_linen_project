<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packed extends Model
{
    use HasFactory;
    protected $guards = [];
    protected $table = 'tb_packed';
    protected $fillable = ['id_packed', 'id_jabatan', 'id_driver', 'id_hotel', 'packing_date', 'packing_date', 'packed_by', 'hotel_code', 'hotel_name', 'total', 'status', 'driver', 'manual_delivery_out', 'manual_to_hotel'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan', 'id_jabatan');
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class, 'id_driver', 'id_driver');
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'id_hotel', 'id_hotel');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packing extends Model
{
    use HasFactory;
    protected $guards = [];
    protected $table = 'tb_packing';
    protected $fillable = ['id', 'id_jabatan', 'id_driver', 'id_hotel', 'packing_code', 'packing_date', 'packed_by', 'hotel_code', 'hotel_name', 'total', 'status', 'driver_pickup_status', 'manual_delivery_out', 'manual_to_hotel'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan', 'id_jabatan');
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class, 'id', 'id_driver');
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'id', 'id_hotel');
    }
}

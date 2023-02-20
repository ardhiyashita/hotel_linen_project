<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $guards = [];
    protected $table = 'tb_driver';
    protected $fillable = ['id_driver', 'id_jabatan', 'id_laundry_plant', 'driver_id', 'first_name', 'last_name', 'gender', 'phone', 'laundry_plant', 'company', 'note'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan', 'id_jabatan');
    }

    public function laundry_plant()
    {
        return $this->belongsTo(LaundryPlant::class, 'id_laundry_plant', 'id_laundry_plant');
    }
}

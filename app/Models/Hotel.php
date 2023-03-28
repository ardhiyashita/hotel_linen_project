<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hotel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guards = [];
    protected $table = 'tb_hotel';
    protected $fillable = ['id_hotel', 'id_jabatan', 'id_laundry_plant', 'hotel_code', 'hotel_name', 'laundry_plant', 'contact_name', 'phone', 'email', 'address', 'note'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id', 'id');
    }

    public function laundry_plant()
    {
        return $this->belongsTo(LaundryPlant::class, 'id', 'id_laundry_plant');
    }
}

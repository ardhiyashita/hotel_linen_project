<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HotelTransaction extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guards = [];
    protected $table = 'tb_hotel_transaction';
    protected $fillable = ['id_hotel_transaction', 'id_jabatan', 'id_packed', 'id_clean_linen', 'trans_code', 'trans_date', 'hotel_code', 'hotel_name', 'clean', 'soil', 'stain', 'torn', 'trans_status', 'delivery_status', 'discard',  'treatment', 'request_linen', 'driver'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id', 'id');
    }

    public function packed()
    {
        return $this->belongsTo(Packed::class, 'id', 'id_packed');
    }

    public function clean_linen()
    {
        return $this->belongsTo(Packed::class, 'id', 'id_clean_linen');
    }
}

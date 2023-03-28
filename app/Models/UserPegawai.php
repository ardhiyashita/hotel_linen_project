<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserPegawai extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guards = [];
    protected $table = 'tb_user';
    protected $fillable = ['id', 'id_jabatan', 'id_laundry_plant', 'first_name', 'last_name', 'linen_center', 'laundry_plant', 'phone', 'email'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id', 'id');
    }

    public function laundry_plant()
    {
        return $this->belongsTo(LaundryPlant::class, 'id', 'id_laundry_plant');
    }
}

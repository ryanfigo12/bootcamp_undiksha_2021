<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mLokasi extends Model
{
    protected $table = 'tb_lokasi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'kode_lokasi',
        'lokasi',
        'tipe',
        'pic',
        'alamat',
        'telp',
        'potongan',
    ];

}

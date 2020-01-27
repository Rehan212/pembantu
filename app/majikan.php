<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class majikan extends Model
{
    protected $fillable = ['majikan_kode', 'nama_majikan', 'jenis_kelamin','alamat_majikan','no_ktp'];
    public $timestamps = true;


    public function pemesanan()
    {
        return $this->hasMany('App\Pemesanan', 'id_majikan');
    }
}

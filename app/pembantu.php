<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembantu extends Model
{
    protected $fillable = ['pembantu_kode', 'n_pembantu', 'alamat_pembantu','umur','jk_pembantu','pendidikan','agama','status','pengalaman_kerja','photo_art'];
    public $timestamps = true;

    public function pemesanan()
    {
        return $this->hasMany('App\Pemesanan', 'id_kategori');
    }
}

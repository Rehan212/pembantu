<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    public function pemesanan()
    {
        return $this->hasMany('App\Pemesanan', 'id_kategori');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{

    public function kategori()
    {
        return $this->belongsTo('App\kategori', 'kategori_kode');
    }
    public function majikan()
    {
        return $this->belongsTo('App\majikan', 'majikan_kode');
    }
    public function pembantu()
    {
        return $this->belongsTo('App\pembantu', 'pembantu_kode');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilPendataanWarga extends Model
{
      protected $table = 'hasil_pendataan_warga';

      public function warga(){
        return $this->belongsTo('App\Warga', 'warga_id', 'id');
      }
}

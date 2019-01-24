<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adresa extends Model
{
    public function trgovine()
    {
        return $this->belongsTo('App\Trgovina');
    }    
}

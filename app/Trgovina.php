<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trgovina extends Model
{
     public function mobiteli()
    {
       # php artisan make:migration create_mobitel_trgovina_pivot --create=mobitel_trgovina
        return $this->belongsToMany('App\Mobitel','mobitel_trgovina'); //m:n
    }
     public function drzava()
    {
        return $this->belongsTo('App\Drzava'); // inverse relation
    }  
    public function adresa() {
        return $this->hasMany('App\Adresa'); //1:n
    }
}

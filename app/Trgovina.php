<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trgovina extends Model
{
     public function mobiteli()
    {
       # php artisan make:migration create_mobitel_trgovina_pivot --create=mobitel_trgovina
        return $this->belongsToMany('App\Mobitel','mobitel_trgovina');
    }
}

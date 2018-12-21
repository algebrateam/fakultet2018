<?php
// php artisan make:model Mobitel --migration
namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobitel extends Model
{
     public function trgovine()
    {
     # php artisan make:migration create_mobitel_trgovina_pivot --create=mobitel_trgovina
         return $this->belongsToMany('Trgovina','mobitel_trgovina');
    }
}

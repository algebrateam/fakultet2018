<?php

// php artisan make:model Drzava -mcr
//php artisan make:model Drzava -a

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drzava extends Model
{
    protected $fillable = [
        'name', 'code'
    ];
    public function trgovine()
    {
        //return $this->hasMany('App\Trgovina','drzava_id','id');
        return $this->hasMany('App\Trgovina');  //Ovo isto radi
    }
}

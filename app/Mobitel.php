<?php

// php artisan make:model Mobitel --migration

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobitel extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'producer', 'model', 'screen', 'price'
    ];
    
    public function trgovine()
    {
        // php artisan make:migration create_mobitel_trgovina_pivot --create=mobitel_trgovina
        return $this->belongsToMany('App\Trgovina', 'mobitel_trgovina');
    }
}

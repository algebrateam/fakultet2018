<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trgovina extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name', 'drzava'
    ];
    public function mobiteli()
    {
        // php artisan make:migration create_mobitel_trgovina_pivot --create=mobitel_trgovina
        return $this->belongsToMany('App\Mobitel', 'mobitel_trgovina'); //m:n
    }

    public function drzava()
    {
        return $this->belongsTo('App\Drzava', 'drzava_id'); // inverse relation
    }

    public function adresa()
    {
        return $this->hasMany('App\Adresa'); //1:n
    }
}

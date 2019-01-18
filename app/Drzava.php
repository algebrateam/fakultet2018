<?php
// php artisan make:model Drzava -mcr
//php artisan make:model Drzava -a
namespace App;

use Illuminate\Database\Eloquent\Model;

class Drzava extends Model
{
    public function trgovine()
    {
        return $this->hasMany('App\Trgovina');
    }
}

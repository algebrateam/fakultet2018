<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adresa extends Model
{
    protected $primaryKey = 'id'; // bespotrebno, po defaultu je vec 'id'
    public function trgovine()
    {
        return $this->belongsTo('App\Trgovina');
    }    
}

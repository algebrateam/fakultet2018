<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adresa extends Model
{
    protected $primaryKey = 'id'; // bespotrebno, po defaultu je vec 'id'
    protected $table = 'adresas';  // bespotrebno, po defaultu je vec plural od adresa:  'adresas'
    protected $fillable = [
        'slika', 'country', 'city', 'pbr', 'street', 'phone'
    ];
    public function trgovine()
    {
        return $this->belongsTo('App\Trgovina', 'trgovina_id', 'id'); // dodao 'trgovina_id' jer AdresaController@show() ne kreitra model
    }
}

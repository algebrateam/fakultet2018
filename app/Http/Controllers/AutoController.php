<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function pokreniAuto(){
        return 'brmbrm';
    }
    public function zaustaviAuto(){
        return 'škiriiiiiip';
    }
    public function obojajAuto($boja){
        return '<span style="color:'.$boja.'">Ovo je neki obojani auto</span>';
    }
}

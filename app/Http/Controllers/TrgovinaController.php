<?php

namespace App\Http\Controllers;

use App\Trgovina;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TrgovinaController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $trgovine = Trgovina::all();
        return view('trgovina.index', ['trgovine' => $trgovine]);
        /*
        foreach ($trgovine as $t) {
            echo '<br><strong>' . $t->name . '</strong>';
            $mobovi = Trgovina::find($t->id)->mobiteli()->orderby('producer')->get();
            if ($mobovi != '') {

                echo '<ol>';
                foreach ($mobovi as $m) {
                    echo '<li>' . $m->producer . '</li>';
                }
                echo '</ol>';
            }
        }
         */
         

        //echo $trgovine->first()->producer;
        // echo "test";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        // TODO napravi view formu za unos nove trgovine
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        // TODO popuni proceduru za kreiranje nove trgovine
    }

    /**
     * Display the specified resource.
     *
     * @param  Trgovina  $trgovina
     * @return Response
     */
    public function show(Trgovina $trgovine) {
        $mobovi = Trgovina::find($trgovine->id)->mobiteli()->orderby('producer')->get();
        return view('trgovina.show', ['trgovine' => $trgovine,'mobovi'=>$mobovi]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Trgovina  $trgovina
     * @return Response
     */
    public function edit(Trgovina $trgovine) {
        // TODO izmjeni view za trgovinu
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Trgovina  $trgovina
     * @return Response
     */
    public function update(Request $request, Trgovina $trgovine) {
        // TODO izmjeni view EDIT za trgovinu
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Trgovina  $trgovina
     * @return Response
     */
    public function destroy(Trgovina $trgovine) {
        //
    }

}

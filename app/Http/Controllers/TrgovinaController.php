<?php

namespace App\Http\Controllers;

use App\Trgovina;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

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
       return view('trgovina.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
 $validator = Validator::make($request->all(), [
              "name" => "required|string|max:191",
              "drzava" => "required|string|max:191"
        ]);
        if ($validator->fails()) {
            Session::flash('error', 'Greška prošlo kroz kontroller!');
            return redirect('trgovine/create')
                    ->withErrors($validator)
                    ->withInput();
        } else {
            // store
            $trgovine = new Trgovina;
            $trgovine->name = $request->input('name');
            $trgovine->drzava = $request->input('drzava');
            $trgovine->save();
            // redirect
            Session::flash('message', 'Uspješno dodana trgovina!');
            return redirect()->route('trgovine.index');
        }
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
        return view('trgovina.edit', ['trgovine' => $trgovine]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Trgovina  $trgovina
     * @return Response
     */
    public function update(Request $request, Trgovina $trgovine) {
 $validator = Validator::make($request->all(), [
              "name" => "required|string|max:191",
              "drzava" => "required|string|max:191"
        ]);
        if ($validator->fails()) {
            Session::flash('error', 'Greška, molim ispravno popuniti polja!');
            return redirect('trgovine/'.$trgovine->id.'/edit')
                    ->withErrors($validator)
                    ->withInput();
        } else {
            // store
            $trgovine->name = $request->input('name');
            $trgovine->drzava = $request->input('drzava');
            $trgovine->save();
            // redirect
            Session::flash('message', 'Uspješno izmjenjena trgovina!');
            return redirect()->route('trgovine.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Trgovina  $trgovina
     * @return Response
     */
    public function destroy(Trgovina $trgovine) {
        $trgovine->delete();
        Session::flash('warning', 'Trgovina obrisana!');
        return redirect()->route('trgovine.index');
    }

}

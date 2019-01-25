<?php

namespace App\Http\Controllers;

use App\Adresa;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class AdresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return 'hello from index'; 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Adresa  $adresa
     * @return Response
     */
    //public function show(Adresa $adresa)  // jednostavno nece
    public function show($adresa_id)
    {
     $adresa=Adresa::find($adresa_id);
        // http://localhost:8000/adrese/1
       //return  $adresa->all(); 
       //return  $adresa->find(1); 
        //$adresa=Adresa::find($adresa->id);
      //dd($adresa);

        return view('adresa.show', ['adresa' => $adresa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Adresa  $adresa
     * @return Response
     */
    public function edit(Adresa $adresa)
    {
//return 'hello';   
//dd($adresa);

     return view('adresa.edit', ['adresa' => $adresa->find(1)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Adresa  $adresa
     * @return Response
     */
    public function update(Request $request, Adresa $adresa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Adresa  $adresa
     * @return Response
     */
    public function destroy(Adresa $adresa)
    {
        //
    }
}

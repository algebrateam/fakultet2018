<?php

namespace App\Http\Controllers;

use App\Drzava;
use Illuminate\Http\Request;

class DrzavaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('drzava.index', ['drzave' => Drzava::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Drzava  $drzava
     * @return \Illuminate\Http\Response
     */
    public function show(Drzava $drzava)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Drzava  $drzava
     * @return \Illuminate\Http\Response
     */
    public function edit(Drzava $drzava)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Drzava  $drzava
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drzava $drzava)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Drzava  $drzava
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drzava $drzava)
    {
        //
    }
}

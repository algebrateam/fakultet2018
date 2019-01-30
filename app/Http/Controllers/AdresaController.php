<?php

namespace App\Http\Controllers;

use App\Adresa;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
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
        //$adresa = Adresa::all();
        $adresa = Adresa::paginate(10);

        return view('adresa.index', compact('adresa'));
        //return view('adresa.index', ['adresa' => adresa]); // moze i ovako
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
     * @param Request $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Adresa $adresa
     *
     * @return Response
     */
    public function show(Adresa $adresa)  // jednostavno nece
    // ovo smo morali jer je routa bila nazvana adrese umjesto adresa
    // Route::resource('adrese','AdresaController');
    // Ispravno:
    // Route::resource('adresa','AdresaController');
    //public function show($adresa_id)
    {
        //$adresa=Adresa::find($adresa_id);
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
     * @param Adresa $adresa
     *
     * @return Response
     */
    public function edit(Adresa $adresa)
    {
        return view('adresa.edit', ['adresa' => $adresa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Adresa  $adresa
     *
     * @return Response
     */
    public function update(Request $request, Adresa $adresa)
    {
        $validator = Validator::make($request->all(), [
              'trgovina_id' => 'required|numeric',
              'country'     => 'required|string|max:191',
              'city'        => 'required|string|max:191',
              'pbr'         => 'required|string|max:191',
              'street'      => 'required|string|max:191',
        ]);
        if ($validator->fails()) {
            Session::flash('error', 'Greška, molim ispravno popuniti polja!');

            return redirect('adresa/'.$trgovine->id.'/edit')
                    ->withErrors($validator)
                    ->withInput();
        } else {
            // store
            $adresa->trgovina_id = $request->input('trgovina_id');
            $adresa->country = $request->input('country');
            $adresa->city = $request->input('city');
            $adresa->pbr = $request->input('pbr');
            $adresa->phone = $request->input('phone');

            // ako postoji slika uploadaj ju
            try {
                $imageExtension = $request->slika->getClientOriginalExtension();  // nastavak
                $imageName = 'adresa-'.$adresa->id.'-'.now()->format('Y-m-d').'.'.$imageExtension; // ime slike
                $adresa->slika = $imageName;  // ime slike u bazi
                $request->slika->move(public_path(), $imageName); // kopiraj u /public
            } catch (Exception $e) {
                dd($e);
            }

            $adresa->save();
            // redirect
            Session::flash('message', 'Uspješno izmjenjena adresa!');

            return redirect()->route('adresa.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Adresa $adresa
     *
     * @return Response
     */
    public function destroy(Adresa $adresa)
    {
        //
    }
}

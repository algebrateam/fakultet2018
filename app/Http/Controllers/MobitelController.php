<?php

namespace App\Http\Controllers;

use App\Mobitel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class MobitelController extends Controller {

    /**
     * Zaštićujemo kontroller pomoću middleware root
     */
    public function __construct() {
        /*

          $this->middleware('root')->only('index');

          //$this->middleware('web')

          $this->middleware('admin')->except(['store','create']);

         */
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $mobs = DB::select('select * from mobitels where id > ?', [2]);
        var_dump($mobs);
        echo '<br>Odabrani mobitel: ' . $mobs[1]->producer . ' ' . $mobs[1]->price;

        $mobs = Mobitel::all();
        echo "<hr>";
        echo '<table>';
        printf('<tr><th>%s</th><th>%s</th><th>%s</th></tr>', 'Proizvođač', 'Model', 'Cijena');
        foreach ($mobs as $m) {
            printf('<tr><td>%s</td><td>%s</td><td>%d</td></tr>', $m->producer, $m->model, $m->price);
        }
        echo '</table>';

///////////////////////////
        $mobs = Mobitel::where('id', 2)->take(1)->get();  // dohvati gdje je id=2
        echo "<hr>";
        echo '<table>';
        printf('<tr><th>%s</th><th>%s</th><th>%s</th></tr>', 'Proizvođač', 'Model', 'Cijena');
        foreach ($mobs as $m) {
            printf('<tr><td>%s</td><td>%s</td><td>%d</td></tr>', $m->producer, $m->model, $m->price);
        }
        echo '</table>';
/////////////////////////////
        $mobs = Mobitel::find(3);   // dohvati mobitel sa id=3
        echo "<hr>";

        $m = new Mobitel();
        $m->find(3);
        echo 'ODABRANI MOBITEL JE: ' . $m->producer;
        var_dump($m);

// echo '<table>';  
// printf('<tr><th>%s</th><th>%s</th><th>%s</th></tr>','Proizvođač','Model','Cijena');
//    foreach ($mobs as $m) {
//        printf('<tr><td>%s</td><td>%s</td><td>%d</td></tr>',$m->producer,$m->model,$m->price);
//}    
//echo '</table>';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Mobitel  $mobitel
     * @return Response
     */
    public function show(Mobitel $mobitel) {  // dependancy injection
        // vraća sve mobitele
        // return  $mobitel->all(); 
        
        // vraća ispis detalja samo jednog mobitela
        //return  $mobitel->id.' model je:'.$mobitel->producer.' trenutna cijena je:'.$mobitel->price;
        
        
        //  vraća view sa mobitelima
        return view('mobitels.show', ['mobitel' => $mobitel]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Mobitel  $mobitel
     * @return Response
     */
    public function edit(Mobitel $mobitel) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Mobitel  $mobitel
     * @return Response
     */
    public function update(Request $request, Mobitel $mobitel) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Mobitel  $mobitel
     * @return Response
     */
    public function destroy(Mobitel $mobitel) {
        //
    }

}

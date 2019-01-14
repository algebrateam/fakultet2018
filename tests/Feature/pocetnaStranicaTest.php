<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class pocetnaStranicaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
        public function testBasicTest()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        
        //Error 405 (Method Not Allowed) Laravel 5
        $response = $this->post('/');
        $response->assertStatus(405);
    }
      public function testDetaljiMobitelaTest()
    {
        // OBAVEZNO
        // da bi omogucili post metodu moramo dodati slijedece u
        // \app\Http\Middleware\VerifyCsrfToken.php
        //  -->  protected $except = ['/mobitels/show'];
        //  da bi smo zaobisli CSRF zastitu
        //  inace dobijamo gresku 419
        // http://localhost:8000/mobitels/1  -> Hello, Samsung.Trenutna cijena je 2.00, Model je: wewe, veličina ekrana je 2.00
               $response = $this->withHeaders([
            'Content-Type' => 'application/json',
                 'mobitel'=>1
        ])->json('POST', '/mobitels/show ', ['mobitel' => 1]);

        $response
            ->assertStatus(405);
    //        ->assertJson([
    //            'created' => true,
    //        ]);
        
        
         // $response = $this->post('/mobitels/1');
        //$response->assertStatus(200);
    }
    public function testSaHeaderimaMobitelShow(){
        
        $response = $this->withSession(['greska' => 'Ovo je samo testna greska'])
                         ->get('/mobitels/1');
        $response->assertStatus(200);
        $response->assertSee('Ovo je samo testna greska');  // ovo moram vidjeti
        $response->assertDontSee('Ovo je $amo testna greska');  // ovo ne smijem vidjeti
    }
    public function testRedirekcija() {
        $uri1='/here';
        $uri2='/there';
        $response = $this->get($uri1);
        $response->assertRedirect($uri2);      
    }
}

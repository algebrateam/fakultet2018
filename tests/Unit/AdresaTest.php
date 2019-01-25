<?php

namespace Tests\Unit;

use App\Adresa;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdresaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        
         $a = new Adresa;
         
        
         // ovo isto radi ali u bazi mora biti adresa Bermuda
         //$this->assertEquals("Bermuda", $a::find(1)->country, 'trazim adresu');
         
         $this->assertEquals(1, $a::find(1)->id, 'usporedjujem dobiveni i zadani id');
        //$this->assertTrue(true);
    }
}

<?php

// $ php artisan make:test MobitelTest --unit

namespace Tests\Unit;

use App\Adresa;
use App\Mobitel;
use App\Trgovina;
use Tests\TestCase;

class MobitelTest extends TestCase {

    /**
     * Barem dva modela mobitela moraju biti u nekoj trgovini
     * Barem dvije trgovine moraju imati neke mobitele
     *
     * @return void
     */
    public function testMobitelPovezanTrgovinom() {
        
        // with() is for eager loading, query is cached
        $this->assertGreaterThan(2,Trgovina::with('mobiteli')->count(),'Barem dvije trgovine moraju imati neke mobitele');
        
        //has() is to filter the selecting model based on a relationship like SQL WHERE
        $this->assertGreaterThan(2,Mobitel::has('trgovine')->count(),'Barem dva modela mobitela moraju biti u nekoj trgovini');
    }
     /**
     * Dohvati prvi mobitel koji postoji u trgovinama te ispisi samo trgovine koje imaju adresu
     * uz pomoc adrese preko trgovine dodji do trazenog mobitela
     *
     * @return void
     */ 
    public function testMobitelPovezanTrgovinom2() {
        // dohvati prvi mobitel koji postoji u trgovinama
        $mobile_id=Mobitel::has('trgovine')->first()->id;
        
        // Dohvati prvi mobitel koji postoji u trgovinama te ispisi samo trgovine koje imaju adresu
        $adr_id=Mobitel::has('trgovine')->first()->trgovine()->has('adresa')->first()->adresa()->first()->id;
        
        // uz pomoc adrese preko trgovine dodji do mobitela
        $seek_mobile=Adresa::find($adr_id)->trgovine()->first()->mobiteli()->find($mobile_id)->id;
        
                
        $this->assertEquals($mobile_id,$seek_mobile,'Tocno jedna adresa');

    }
      

    public function testNovaTrgovina() {
        // kreiraj dummy model trgovine
        $t = new Trgovina;
        $t->name = 'testlidl';
        $t->drzava = 'testdrzava';
        $t->save();
        $t1 = Trgovina::where('name', 'testlidl')->first();

        $this->assertTrue($t1->drzava == 'testdrzava', 'trgovina sa tim imenom ne postoji');
        $this->assertFalse($t1->drzava == 'testdrzava1', 'Nasao si drzavu koja ne postoji');
        
        // obrisi model
        $t1 = Trgovina::where('name', 'testlidl')->first();
        $t1->delete();
    }

}

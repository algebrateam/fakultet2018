<?php
// $ php artisan make:test MobitelTest --unit

namespace Tests\Unit;

use App\Trgovina;
use Tests\TestCase;

class MobitelTest extends TestCase
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
//      public function setUp()
//    {
//            $t = new Trgovina;
//            $t->name = 'testlidl';
//            $t->drzava = 'testdrzava';
//            $t->save();
//    }
//          public function tearDown()
//    {
//        //$t1= Trgovina::where('name','testlidl' )->first();
//        //$t1->delete();
//    }  
     public function testNovaTrgovina()
    {
        //parent::setUp();
         $t1= Trgovina::where('name','testlidl' )->first();
            
         $this->assertTrue($t1->drzava == 'testdrzava','trgovina sa tim imenom ne postoji');   
         $this->assertFalse($t1->drzava == 'testdrzava1','Nasao si drzavu koja ne postoji');
        // parent::tearDown();
    }   
}

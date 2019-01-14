<?php

// $ php artisan make:test MobitelTest --unit

namespace Tests\Unit;

use App\Trgovina;
use Tests\TestCase;

class MobitelTest extends TestCase {

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample() {
        $this->assertTrue(true);  // uvijek mora proci
    }

    public function testNovaTrgovina() {
        $t = new Trgovina;
        $t->name = 'testlidl';
        $t->drzava = 'testdrzava';
        $t->save();
        $t1 = Trgovina::where('name', 'testlidl')->first();

        $this->assertTrue($t1->drzava == 'testdrzava', 'trgovina sa tim imenom ne postoji');
        $this->assertFalse($t1->drzava == 'testdrzava1', 'Nasao si drzavu koja ne postoji');
        $t1 = Trgovina::where('name', 'testlidl')->first();
        $t1->delete();
    }

}

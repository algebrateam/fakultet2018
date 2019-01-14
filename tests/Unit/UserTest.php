<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExistUser()
    {
        $u = \App\User::find(1);
        $this->assertEquals($u->email, "pmrvic@123.com",'email nije ispravan');
        $this->assertEquals($u->name, "Predrag Mrvic",'ime nije ispravno');
        $this->assertEquals($u->password, '$2y$10$unv5NFvl89zxAhdy5.cnFOae8S01aoFdO73X..qPECtQV5YCrCPSG','password je pogresan');        
    }
}

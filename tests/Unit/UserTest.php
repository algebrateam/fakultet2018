<?php

namespace Tests\Unit;

use Tests\TestCase;

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
        $this->assertEquals($u->email, 'pmrvic@123.com', 'email nije ispravan');
        $this->assertEquals($u->name, 'Predrag Mrvic', 'ime nije ispravno');
    }
}

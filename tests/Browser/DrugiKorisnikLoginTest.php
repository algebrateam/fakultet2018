<?php

namespace Tests\Browser;

use App\User;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DrugiKorisnikLoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('na aplikaciju Fakultet')
                    ->clickLink('Register')
                    ->assertSee('Register a new membership')
                    ->type('name', 'Testina Testic')
                    ->type('email', 'test@test.com')
                    ->type('password', '123test123')
                    ->type('password_confirmation', '123test123')
                    ->press('Register')
                    ->assertSee('You are logged in')
                    ->clickLink('Log Out')
                    ->assertPathIs('/')
                    ->assertSee('na aplikaciju Fakultet');

            $korisnik = User::where('email', 'test@test.com')->first()->delete();
            //$korisnik->delete();
        });
    }
}

<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testRegister()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Register')
                    ->assertSee('Register')
                    ->value('#name', 'Huy Doan')
                    ->value('#email', 'doanhuy@gmail.com')
                    ->value('#password', '123123')
                    ->value('#password-confirm', '123123')
                    ->click('button[type="submit"]')
                    ->assertPathIs('/home')
                    ->assertSee("You are logged in!");
        });
    }
}

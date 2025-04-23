<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(url: '/')
                    ->assertSee(text: 'Enterprise Application Development')
                    ->clickLink(link: 'Register')
                    ->assertPathIs(path: '/register')
                    ->type(field: 'name', value: 'admin')
                    ->type(field: 'email', value: 'admin@gmail.com')
                    ->type(field: 'password', value: 'admin')
                    ->type(field: 'password_confirmation', value: 'admin')
                    ->press(button: 'REGISTER');


        });
    }
}

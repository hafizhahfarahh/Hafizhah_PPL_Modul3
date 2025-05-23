<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesDeleteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group delete-notes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee('Enterprise Application Development')
            ->clickLink(link: 'Log in')
            ->assertPathIs(path: '/login')
            ->type(field: 'email', value: 'admin@gmail.com')
            ->type(field: 'password', value: 'admin')
            ->press(button: 'LOG IN')
            ->assertPathIs(path: '/dashboard')
            ->assertSee('Dashboard')
            ->clickLink(link: 'Notes')
            ->assertPathIs(path: '/notes')
            ->press('Delete')
            ->assertPathIs(path: '/notes');
        });
    }
}

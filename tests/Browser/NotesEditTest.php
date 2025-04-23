<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesEditTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group edit-note
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
            ->clickLink(link: 'Edit')
            ->assertPathIs(path: '/edit-note-page/4')
            ->type(field: 'title', value: 'Report PPL Ya')
            ->type(field: 'description', value: 'Jangan Lupa Report')
            ->press(button: 'UPDATE');
        });
    }
}

<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/notes')
            ->assertSee(text: 'Dashboard Notes admin')
            ->clickLink(link: 'Create Note')
            ->assertPathIs(path: '/create-note')
            ->type(field: 'title', value: 'Report PPL')
            ->type(field: 'description', value: 'Jangan Lupa Report')
            ->press(button: 'CREATE');
        });
    }
}

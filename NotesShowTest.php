<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesShowTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/notes')
            ->assertSee(text: 'Dashboard Notes admin')
            ->clickLink(link: 'Report PPL Ya')
            ->assertPathIs(path: '/note/1');
        });
    }
}

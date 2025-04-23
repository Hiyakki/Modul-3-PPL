<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ViewNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group viewnotes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Log in')
                    ->assertSee('Email')
                    ->assertSee('Password')
                    ->type('email',  'laroibas14@gmail.com')
                    ->type('password', 'password')
                    ->press('LOG IN')

                    ->assertPathIs('/dashboard')
                    ->pause(1000) 
                    ->clickLink('Notes')
                    ->assertPathIs('/notes')
                    ->pause(500)
                    ->clickLink('PraktikumModul3') 
                    ->assertSee('Author');
        });
    }
}

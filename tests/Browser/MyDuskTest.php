<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class MyDuskTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/reclamations/create')
                    ->type('mod', 'monMod')
                    ->type('contenu', 'monContenu')
                    ->press('Envoyer')
                    ->assertPathIs('/reclamations')
                    ->assertSee('hello!');
        });
    }
}

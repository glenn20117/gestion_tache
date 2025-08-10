<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class LanguageChangeTest extends TestCase
{
    public function test_changer_langue_et_conserver_session()
    {
        // 1. L'utilisateur visite /about?langue=fr
        $response = $this->get('/about?langue=fr');

        // Vérifie que la vue existe bien
        $response->assertStatus(200);
        $response->assertViewIs('fr.about');

        // 2. On simule que la session a bien enregistré la langue
        $response = $this->withSession(['locale' => 'fr'])->get('/contact');

        // 3. La langue doit rester en français
        $response->assertStatus(200);
        $response->assertViewIs('fr.contact');
    }
}

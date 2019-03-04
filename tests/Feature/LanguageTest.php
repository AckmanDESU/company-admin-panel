<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LanguageTest extends TestCase
{
    /**
     * @return void
     */
    public function testEnglishIsTheDefaultLanguage()
    {
        $user = User::first();

        $response = $this
            ->actingAs($user)
            ->get('/home');

        $response->assertSee('Dashboard');
    }

    /**
     * @return void
     */
    public function testSpanishIsAvailable()
    {
        $user = User::first();

        $response = $this
            ->actingAs($user)
            ->withSession([
                'locale' => 'es'
            ])
            ->get('/home');

        $response->assertSee('Panel de control');
    }

    /**
     * @return void
     */
    public function testLocaleDefaultsToEnglish()
    {
        $user = User::first();

        $response = $this
            ->actingAs($user)
            ->withSession([
                'locale' => 'unknown'
            ])
            ->get('/home');

        $response->assertSee('Dashboard');
    }
}

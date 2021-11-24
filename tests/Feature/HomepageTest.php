<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomepageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_exists()
    {
        //this make an HTTP request onto / (empty URL path) with GET
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    
    public function test_login_page_returns_a_successful_response()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
}

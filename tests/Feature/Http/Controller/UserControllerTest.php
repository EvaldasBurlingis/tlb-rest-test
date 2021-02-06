<?php

namespace Tests\Feature\Http\Controller;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    /** @test */
    public function post_route_exist()
    {
        $response = $this->json('POST', 'api/users');

        $response->assertStatus(200);
    }
}

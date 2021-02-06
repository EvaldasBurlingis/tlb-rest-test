<?php

namespace Tests\Feature\Http\Controller;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserControllerTest extends TestCase
{

    /** @test */
    public function verify_unauthorized_request_returns_403()
    {
        $response = $this->post('/api/users', []);

        $response->assertStatus(403);
    }

    /** @test */
    public function verify_post_data_validation()
    {
        $u1_fn = 'Tom';
        $u1_ln = 'Trucker';
        $u2_fn = 'Peter';
        $u2_ln = 'Jackson';

        $response_data = [
            ['full_name' => "$u1_fn $u1_ln"],
            ['full_name' => "$u2_fn $u2_ln"]
        ];

        $request_data = [
            'users' => [
                [
                    'first_name' => $u1_fn,
                    'last_name' => $u1_ln
                ],
                [
                    'first_name' => $u2_fn,
                    'last_name' => $u2_ln
                ]
            ]
        ];

        $response = $this
                        ->withHeaders(['Authorization' => 'Bearer xNiEeqjQhA9kdw96DCKBIR9'])
                        ->json('POST', '/api/users', $request_data);

        $response
            ->assertStatus(200)
            ->assertJsonStructure(['users', 'message'])
            ->assertJson([
                'message' => 'User added successfully',
                'users' => $response_data
            ]);
    }

    /** @test */
    public function verify_incorrect_post_data()
    {
        $request_data = [
            'users' => [
                [
                    'first_n' => 'Tom',
                    'last_n' => 'Trucker'
                ],
            ]
        ];

        $response = $this
                        ->withHeaders(['Authorization' => 'Bearer xNiEeqjQhA9kdw96DCKBIR9'])
                        ->json('POST', '/api/users', $request_data);

        $response
            ->assertStatus(422)
            ->assertJsonStructure(['errors', 'message'])
            ->assertJsonFragment(['message' => 'The given data was invalid.']);
    }
}

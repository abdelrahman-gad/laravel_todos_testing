<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class TodosTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_logged_in_user_can_see_todos_page()
    {

        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get('/todo');

        $response->assertStatus(200);
    }
}

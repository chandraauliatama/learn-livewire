<?php

namespace Tests\Feature;

use App\Models\Todolist;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodolistTest extends TestCase
{
    // /**
    //  * A basic feature test example.
    //  *
    //  * @return void
    //  */
    // public function test_example()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
        $this->todolist = Todolist::factory()->ofUser($this->user)->create();
    }
    
    function test_get_user_and_todolist()
    {
        dd($this->user, $this->todolist);
    }
}

<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class StopwatchTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
        // $this->todolist = Todolist::factory()->ofUser($this->user)->create();
        $this->actingAs($this->user);
    }

    public function test_stopwatch_page_can_be_rendered()
    {
        $this->get('/stopwatchpage')->assertStatus(200);
    }

    public function test_stopwatch_page_contain_livewire_stopwatch_component()
    {
        $this->get('/stopwatchpage')->assertSeeLivewire('stopwatch');
    }

    public function test_start_new_stopwatch()
    {
        Livewire::test('stopwatch')->set('timedetail');   
    }
}
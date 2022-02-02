<?php

namespace Tests\Feature;

use App\Models\Todolist;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class TodolistTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
        $this->todolist = Todolist::factory()->ofUser($this->user)->create();
        $this->actingAs($this->user);
    }

    public function test_todolist_page_can_be_rendered()
    { 
        $this->get('/todopage')->assertStatus(200);
    }
    
    function test_todolist_page_contains_livewire_todolist_components()
    {
        $this->get('/todopage')->assertSeeLivewire('todo-list');
    }

    function test_todolist_page_dont_contains_livewire_todo_components()
    {
        $this->todolist->delete();
        $this->get('/todopage')->assertDontSeeLivewire('todo');
    }

    function test_todolist_page_contains_livewire_todo_components()
    {
        $this->get('/todopage')->assertSeeLivewire('todo');
    }

    function test_todolist_page_contains_livewire_todo_form_components()
    {
        $this->get('/todopage')->assertSeeLivewire('todo-form');
    }

    function test_create_new_todo()
    {
        Livewire::test('todo-list')->assertSeeHtml($this->todolist->body);
        Livewire::test('todo-form')->set('body', 'testing only')->call('add');
        Livewire::test('todo-list')->assertSee('testing only');
        $this->assertDatabaseCount('todolists', 2);
        $this->assertTrue(Todolist::whereBody('testing only')->exists());
    }

    function test_edit_existing_todo()
    {
        Livewire::test('todo-form')
            ->call('editing', $this->todolist->id)
            ->set('body', 'hasil edit')
            ->call('edit');
        Livewire::test('todo-list')->assertSee('hasil edit');
        $this->assertTrue(Todolist::whereBody('hasil edit')->exists());
    }
    
    function test_delete_existing_todo()
    {
        Livewire::test('todo-list')->assertSee($this->todolist->body);
        Livewire::test('todo-form')
            ->call('delete', $this->todolist->id);
        Livewire::test('todo-list')->assertDontSee($this->todolist->body);
        $this->assertFalse(Todolist::whereBody($this->todolist->body)->exists());
    }

}

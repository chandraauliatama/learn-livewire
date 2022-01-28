<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TodoList extends Component
{
    protected $listeners = [
        'todoRefresh' => '$refresh',
    ];
    public function getTodosProperty()
    {
        return auth()->user()->Todolists()->latest()->get();
    }
    public function render()
    {
        return view('livewire.todo-list');
    }
}

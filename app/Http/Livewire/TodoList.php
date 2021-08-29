<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TodoList extends Component
{
    public $todo;
    public function render()
    {
        return view('livewire.todo-list', [
            'todos' => auth()->user()->Todolists()->latest()->get()
        ]);
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todolist as Modeltodo;

class EditTodo extends Component
{
    public $todoId;

    public function render()
    {
        return <<<'blade'
            <button
            class="btn-todo btn-purple mb-2 sm:mb-0 mr-2"
            wire:click.stop="$emitTo('todo-form', 'todoEditing', {{$todoId}})">
                <x-icons.edit></x-icons.edit>
            </button>
        blade;
    }
}

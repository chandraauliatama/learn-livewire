<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todolist as Modeltodo;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class DeleteTodo extends Component
{
    use AuthorizesRequests;

    public $todoId;

    public function render()
    {
        return <<<'blade'
                <button class="btn-todo btn-red mb-2 sm:mb-0"
                wire:click.stop="$emitTo('todo-form', 'todoRemove', {{$todoId}})" wire:loading.attr="disabled">
                    <x-icons.trash></x-icons.trash>
                </button>
        blade;
    }
}

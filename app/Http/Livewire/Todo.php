<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public $todo;

    public function mount(\App\Models\Todolist $todo)
    {
        $this->todo = $todo;
    }

    public function complete()
    {
        $this->todo->toggleCompletion();
    }

    public function inProgress()
    {
        $this->todo->toggleInProgress();
    }

    public function render()
    {
        return view('livewire.todo');
    }
}

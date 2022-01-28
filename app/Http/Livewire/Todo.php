<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todolist;

class Todo extends Component
{
    public $todo;

    public function mount(Todolist $todo)
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

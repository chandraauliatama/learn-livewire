<?php

namespace App\Http\Livewire;

use App\Models\Todolist as Modeltodo;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class TodoForm extends Component
{
    use AuthorizesRequests;

    public $todo;

    public $body;

    protected $rules = ['body' => 'required|string|max:50'];

    private $messages = [
        'body.required' => 'The todo :attribute is required.',
    ];

    protected $listeners = [
        'todoEditing' => 'editing',
        'todoRemove' => 'delete',
    ];

    public function validateTodo()
    {
        $this->validate(
            $this->rules,
            $this->messages,
        );
    }
    public function add()
    {
        $this->validateTodo();

        auth()->user()->todolists()->create([
            'body' => $this->body,
        ]);

        $this->emitTo('todo-list', 'todoAdded');

        $this->reset();
    }

    public function delete($todoId)
    {
        $todo = ModelTodo::find($todoId);

        $todo->delete();

        $this->emitTo('todo-list', 'todoRemoved');

        $this->reset();
    }

    public function editing($todoId)
    {
        $this->todo = Modeltodo::find($todoId);
        $this->body = $this->todo->body;
    }

    public function getIsEditingProperty()
    {
        return $this->todo;
    }

    public function edit()
    {
        $this->validateTodo();

        $this->todo->update(['body' => $this->body]);

        $this->emitTo('todo-list', 'todoEdited');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.todo-form');
    }
}

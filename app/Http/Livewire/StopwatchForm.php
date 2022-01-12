<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Stopwatch;
use Exception;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class StopwatchForm extends Component
{
    use AuthorizesRequests;

    public $timedetail;

    protected $rules = ['timedetail' => 'required'];

    public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.
        try { 
            $old = auth()->user()->Stopwatches()->firstOrFail();
        } catch (Exception $e) {
            $old = false;
        }
        if($old){
            $old->delete();
        }
        auth()->user()->stopwatches()->create([
            'timedetail' => $this->timedetail,
        ]);

        // make start not refresh page but js variable not updated
        // $this->emitTo('stopwatch', 'stopwatchAdded');

        $this->reset();
        return redirect()->to('/stopwatchpage');

    }

    public function render()
    {
        return view('livewire.stopwatch-form');
    }
}

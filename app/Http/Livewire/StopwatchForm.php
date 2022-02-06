<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class StopwatchForm extends Component
{
    use AuthorizesRequests;

    public $timedetail;

    protected $rules = ['timedetail' => 'required|before:+7hours'];
    
    protected $messages = [
        'timedetail.required' => 'Please set time first',
        'timedetail.before' => 'Set time before now'
    ];

    private function deleteOldStopwatch()
    { 
        $lastStopwatch = auth()->user()->Stopwatches()->first();
        if($lastStopwatch) {
            $lastStopwatch->delete();
        }
    }

    public function updated($timedetail)
    {
        $this->validateOnly($timedetail);
    }

    public function submit()
    {
        $this->validate();
        $this->deleteOldStopwatch();
        auth()->user()->stopwatches()->create([
            'timedetail' => $this->timedetail,
        ]);
        // make start not refresh page but js variable not updated
        // $this->emitTo('stopwatch', 'stopwatchAdded');
        return redirect()->to('/stopwatchpage');
    }

    public function render()
    {
        return view('livewire.stopwatch-form');
    }
}

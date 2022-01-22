<?php

namespace App\Http\Livewire;

use DateTime;
use Exception;
use Livewire\Component;

class Stopwatch extends Component
{
    /* function without refresh page but still have problem
    protected $listeners = [
        'stopwatchAdded' => '$refresh',
    ];
    */
    
    public function getStopwatchProperty()
    {
        // Get user start time from db and current time
        try {
            $lastClick = new DateTime(auth()->user()->Stopwatches()->firstOrFail()->timedetail);
            $now = new DateTime('+7 hour');
            return $lastClick->diff($now);
        } catch (Exception $e) {
            return $lastClick = false;
        }
    }

    public function render()
    {
        return view('livewire.stopwatch');
    }
}

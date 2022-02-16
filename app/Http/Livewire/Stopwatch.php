<?php

namespace App\Http\Livewire;

use DateTime;
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
        $stopWatch = auth()->user()->stopwatches()->first();
        if($stopWatch) {
            $stopWatch = new DateTime($stopWatch->timedetail);
            return $stopWatch->diff(new DateTime('+7 hour'));
        }
    }

    public function render()
    {
        return view('livewire.stopwatch');
    }
}

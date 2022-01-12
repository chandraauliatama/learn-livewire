<?php

namespace App\Http\Livewire;

use DateTime;
use DateTimeZone;
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
            $start = auth()->user()->Stopwatches()->firstOrFail()->timedetail;
            $diff = new DateTime($start);
            $now = new DateTime();
            $now->modify('+7 hour');
            $diff = $diff->diff($now);
        } catch (Exception $e) {
            $diff = false;
        }
        
        return $diff;
    }

    public function render()
    {
        return view('livewire.stopwatch');
    }
}

<div class="text-blue-400">
    <h1 class="text-xl md:text-3xl text-center mb-3 ">{{ __("It's been ") }}</h1>
    <div class="text-3xl md:text-6xl text-center flex w-full items-center justify-center">
        {{-- <div class="text-2xl mr-1 font-extralight">in</div> --}}
        <div class="w-24mx-1 p-2 bg-white text-blue-500 rounded-lg">
            <div class="font-mono leading-none" id="days">0</div>
            <div class="text-sm leading-none">Days</div>
        </div>
        <div class="w-24 mx-1 p-2 bg-white text-blue-500 rounded-lg">
            <div class="font-mono leading-none" id="hours">0</div>
            <div class="text-sm leading-none">Hours</div>
        </div>
        <div class="w-24 mx-1 p-2 bg-white text-blue-500 rounded-lg">
            <div class="font-mono leading-none" id="minutes">0</div>
            <div class="text-sm leading-none">Minutes</div>
        </div>
        <div class="w-24 mx-1 p-2 bg-white text-blue-500 rounded-lg">
            <div class="font-mono leading-none" id="seconds">0</div>
            <div class="text-sm leading-none">Seconds</div>
        </div>
    </div>
    <h1 class="text-xl md:text-3xl text-center my-3 ">{{ __("since last time you clicked start") }}</h1>
    @if($this->stopwatch)
      <script>
        //Get detail time data
        var seconds = {{$this->stopwatch->s}}; 
        var minutes = {{$this->stopwatch->i}}; 
        var hours = {{$this->stopwatch->h}};
        var days = {{$this->stopwatch->days}};

        //create variable for shortcut js
        var appendSeconds = document.getElementById("seconds")
        var appendMinutes = document.getElementById("minutes")
        var appendHours = document.getElementById("hours")
        var appendDays = document.getElementById("days")
        
        //stopwatch function
        function myFunction(){
          seconds++
          if(seconds == 60){
            seconds = 0;
            minutes++
          }
          if(minutes == 60){
            minutes = 0;
            hours++
          }
          if(hours == 24){
            hours = 0;
            days++
          }
          appendDays.innerHTML = days
          appendHours.innerHTML = hours
          appendMinutes.innerHTML = minutes
          appendSeconds.innerHTML =  seconds;
          setTimeout(myFunction, 1000);
        }

        //run function after page loaded
        window.onload=myFunction
      </script>
    @endif
</div>

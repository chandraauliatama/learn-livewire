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

            //stopwatch function
            function myFunction(){
                seconds++;
                [seconds, minutes] = checker(seconds, minutes, 60, "seconds");
                [minutes, hours] = checker(minutes, hours, 60, "minutes");
                [hours, days] = checker(hours, days, 24, "hours");
                document.getElementById("days").innerHTML = days;
                setTimeout(myFunction, 1000);
            }

            function checker(a, b, c = 60, d = "seconds") {
                if (a == c) {
                    a = 0
                    b++
                }
                document.getElementById(d).innerHTML = a;
                return [a, b]
            }

            //run function after page loaded
            window.onload=myFunction
        </script>
    @endif
</div>

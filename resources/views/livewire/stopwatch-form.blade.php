<div class="flex justify-center">
    <form wire:submit.prevent="submit">
        <x-button type="submit" class="w-full justify-center mb-5">Start Counting</x-button>
        <input 
            type="datetime-local" 
            max="{{date('Y-m-d\TH:i', strtotime('+7 hours'))}}" 
            wire:model="timedetail" 
            class="w-full mb-4 rounded-md border-blue-600 text-blue-600"
        >
    </form>
</div>  

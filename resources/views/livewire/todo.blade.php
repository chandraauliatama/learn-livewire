<div class="flex flex-wrap md:flex-no-wrap justify-between items-center mt-4 pb-6 relative">
    <span class="mr-6 absolute z-10 top-8px left-15" style=" top: -8px; left: 15px;">
        <span class="flex-shrink-0
            {{ $todo->isCompleted() ? 'btn-green' : 'btn-gray' }}
            {{ !$todo->isInProgress() ?: 'btn-yellow' }}
            text-sm border-4 text-white py-1 px-2 rounded-md no-underline">
            {{ $todo->status }}
        </span>
    </span>
    <div class="relative task w-full transition duration-500 ease-in-out border-2 rounded-lg flex flex-wrap justify-between items-center p-3 pt-6 hover:bg-gray-300 cursor-pointer {{ !$todo->isCompleted() ?: 'border-green-600'}} {{ !$todo->isInProgress() ?: 'border-yellow-300' }}"
        wire:click="complete">

        <span class="flex sm:flex-row items-center text-left pb-2">
            <span class="flex-shrink-0">
                @if ($todo->isCompleted())
                <x-icons.happy></x-icons.happy>
                @elseif($todo->isInProgress())
                <x-icons.clock></x-icons.clock>
                @else
                <x-icons.sad></x-icons.sad>
                @endif
            </span>
            <span class="ml-2 {{ !$todo->isCompleted() ?: 'line-through'}}">{{ $todo->body }}</span>
        </span>
        <div class="absolute transition duration-500 ease-in-out flex justify-end flex-row flex-wrap mt-2 mb-2 sm:mt-0 actions opacity-0 h-0"
            style="right: 15px; bottom: 10px;">
            <button class="btn-todo btn-yellow mb-2 sm:mb-0 mr-2" wire:click.stop="inProgress">
                <x-icons.clock></x-icons.clock>
            </button>
            <livewire:edit-todo :todoId="$todo->id"></livewire:edit-todo>
            <livewire:delete-todo :todoId="$todo->id"></livewire:delete-todo>
        </div>
    </div>
</div>

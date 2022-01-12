<div class="w-full">
    <form class="w-full mb-2" wire:submit.prevent="">
        <div class="flex items-center border-b-2 border-teal-500 py-2">
            <input wire:model="body"
                class="shadow h-12 appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-4 leading-tight focus:outline-none"
                type="text" placeholder="To do ....." aria-label="Full name">
            <button class="btn-todo {{ $this->isEditing ? 'btn-purple' : 'btn-green' }}" type="submit"
                wire:click="{{ $this->isEditing ? 'edit' : 'add' }}" wire:loading.attr="disabled">
                @if ($this->isEditing)
                <x-icons.edit></x-icons.edit>
                @else
                <x-icons.plus></x-icons.plus>
                @endif
            </button>
        </div>
    </form>
    @error('body') <span class="text-red-600">{{ $message }}</span> @enderror
</div>
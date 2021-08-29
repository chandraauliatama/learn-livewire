<div class="w-full">
    <form class="w-full mb-2" wire:submit.prevent="">
        <div class="flex items-center border-b border-b-2 border-teal-500 py-2">
            <input wire:model="name"
                class="shadow h-12 appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-4 leading-tight focus:outline-none"
                type="text" placeholder="To do ....." aria-label="Full name">
            <button class="btn-todo btn-purple" type="submit"
                wire:click="add" wire:loading.attr="disabled">
                <x-icons.plus></x-icons.plus>
            </button>
        </div>
    </form>
    @error('name') <span class="text-red-600">{{ $message }}</span> @enderror
</div>
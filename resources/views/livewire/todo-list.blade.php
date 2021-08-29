<div class="mt-2 w-full text-center">
    @forelse ($this->todos as $todo)
        <livewire:todo :todo="$todo" :key="$todo->id . now()"></livewire:todo>
    @empty
        <p class="md:text-xl pt-5 text-red-700 font-bold">Your to do list is empty</p>
    @endforelse
</div>
<div class="mt-2 w-full text-center">
    @forelse ($todos as $todo)
        <livewire:todo :todo="$todo" :key="$todo->id . now()"></livewire:todo>
    @empty
        <p>No todos</p>
    @endforelse
</div>
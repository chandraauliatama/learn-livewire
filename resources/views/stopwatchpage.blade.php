<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-md text-gray-800 leading-tight">
            {{ __('Your Stop Watch') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <livewire:stopwatch/>
                    <livewire:stopwatch-form/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

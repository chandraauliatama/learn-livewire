{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-md text-gray-800 leading-tight">
            {{ __('') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md h-96 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-2xl rounded-lg">
                <div class="p-6 h-96 bg-white border-b border-gray-200 text-center">
                    <h1 class="font-bold text-blue-500 md:text-2xl">{{ __('Join To Use This App') }}</h1>
                    <div class="mt-10 justify-center">
                        <a href="{{ route('login') }}" class="w-full my-6 inline-flex justify-center items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">{{ __('Login')  }}</a>
                        <a href="{{ route('register') }}" class="w-full inline-flex justify-center items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">{{ __('Register')  }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo/>
            </a>
        </x-slot>

        <div class="p-6bg-white border-b border-gray-200 text-center">
            <h1 class="font-bold text-blue-500">{{ __('Join To Use This App') }}</h1>
            <div class="mt-10 justify-center">
                <a href="{{ route('login') }}" class="w-full mb-6 inline-flex justify-center items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">{{ __('Login')  }}</a>
                <a href="{{ route('register') }}" class="w-full inline-flex justify-center items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">{{ __('Register')  }}</a>
            </div>
        </div>
    </x-auth-card>
</x-guest-layout>
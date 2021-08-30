<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
    <p class="text-sm mt-4 text-center text-gray-500 dark:text-gray-300">© {{ date('Y')}} Made By Chandra Aulia Tama.
    </p>
</div>

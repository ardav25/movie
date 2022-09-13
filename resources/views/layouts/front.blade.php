<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->
    @livewireStyles
</head>

<body>
    <div class="min-h-screen bg-white text-gray-900">
        @livewire('menu')

        <main>
            {{ $slot }}
        </main>

        <div class="border-t dark:border-gray-800 bg-white dark:bg-gray-900 py-6 text-sm print:hidden md:py-8">
            <div class="flex items-center justify-center border-t dark:border-gray-800 pt-6 md:-mb-8">
                <div class="relative max-w-2xl px-4">
                    <div class="w-full text-center text-white">
                        <strong class="font-semibold">© Copyright 2022 Movie Maniak</strong>.
                        <a target="_blank" rel="noreferrer" href="#">All rights reserved</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stack('modals')
    @livewireScripts
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @stack('scripts')
</body>

</html>

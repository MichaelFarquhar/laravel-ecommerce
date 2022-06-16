<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js" defer></script>

        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-white dark:bg-gray-700">
        <div class="flex flex-col justify-between min-h-screen">

            <x-partials.header />
            <main class="flex-1 mt-8">
                @yield('main')
            </main>
            <x-partials.footer />

        </div>

        @livewireScripts
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_TITLE') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body class="{{ $body_class ?? null }} overflow-x-hidden antialiased">

    @if (Route::has('login'))
        <div class="z-10 p-6 text-right sm:fixed sm:right-0 sm:top-0">
            @auth
                <a href="{{ url('/home') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:text-gray-400 dark:hover:text-white">Home</a>
            @else
                <a href="{{ route('login') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:text-gray-400 dark:hover:text-white">Log
                    in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:text-gray-400 dark:hover:text-white">Register</a>
                @endif
            @endauth
        </div>
    @endif

    @yield('content')

    @include('layouts.footer')

    <x-status-message />
</body>

</html>

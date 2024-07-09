<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Condo Manager') }}</title>

        <!-- Fonts -->
        <link href="{{ asset('css/fonts.poppins.min.css') }}" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow"> 
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="pb-16">
                {{ $slot }}
            </main>
        </div>  

    </body>
    <footer class="relative pt-8 pb-6 bg-gray-100 dark:bg-gray-900">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-6/12 px-4 mx-auto text-center">
                    <div class="text-[12px] text-white font-sans py-1">
                        Made with ♥ by
                        <a href="https://jesus-portfolio.vercel.app/" class="text-white hover:text-white font-semibold" target="_blank">Jesús Ruiz</a>
                        <p>Desarrollando Aplicaciones Web de Perú para el mundo</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</html>

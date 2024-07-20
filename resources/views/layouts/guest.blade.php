<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <!-- Css -->
        <!-- Main Css -->
        <link rel="stylesheet" href="/assets/libs/icofont/icofont.min.css">
        <link rel="stylesheet" href="/assets/css/tailwind.min.css">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" />
        <!-- Google Fonts Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
        <!-- MDB -->
        <link rel="stylesheet" href="/css/mdb.min.css" />

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])


        @livewireStyles
    </head>
 
    <body class="font-sans antialiased">
    <x-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
    @endif

    <!-- Page Content -->
        <main>
            @include('layouts.flash_message')
            {{ $slot }}
        </main>
    </div>


    @stack('modals')
        @livewireScripts

        <!-- <div class="menu-overlay"></div> -->
        <script src="assets/libs/lucide/umd/lucide.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>

        <script src="assets/js/app.js"></script>
    </body>


</html>

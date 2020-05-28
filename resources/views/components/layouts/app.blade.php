<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Fire') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <livewire:styles>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('styles')
</head>
<body>
    <div id="app" class="h-screen flex flex-col">
        <!-- Navbar -->
        <x-toolbar></x-toolbar>
        <!-- Contents -->
        <div class="overflow-hidden h-screen">
            <div class="max-w-7xl flex mx-auto h-screen">
                <x-sidebar></x-sidebar>
                <main class="flex-1 flex">
                    {{ $slot }}
                </main>
            </div>
        </main>
        @yield('scripts')
        <script src="{{ mix('js/app.js') }}"></script>
        <livewire:scripts>
    </div>
</body>
</html>
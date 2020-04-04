<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500&display=swap" rel="stylesheet">

    <!-- Styles -->
    @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@1.x.x/dist/tailwind.min.css" rel="stylesheet">
    <style>
        html, body {
            font-family: 'Inter', sans-serif;
        }
    </style>
    @stack('styles')
</head>
<body>
    @yield('content')

    <!-- Scripts -->
    @livewireScripts
    @stack('scripts')
</body>
</html>
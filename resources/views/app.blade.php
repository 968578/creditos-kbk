<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Creditos KBK</title>

    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Mukta&family=Oswald:wght@500&family=Raleway:wght@500&display=swap"
        rel="stylesheet">
    @livewireStyles
</head>

<body>
    <div class="min-h-screen bg-gray-200">
        @yield('contenido')
        <x-footer />
    </div>

    @livewireScripts
</body>

</html>

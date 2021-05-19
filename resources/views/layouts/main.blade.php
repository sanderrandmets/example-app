<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="bg-yellow-600">
        <nav class="flex bg-black text-white justify-between">
            <a class="p-5 hover:bg-gray-400" href="/">Home</a>
            <a class="p-5 hover:bg-gray-400" href="/drum-kits">Drum kits</a>
            <a class="p-5 hover:bg-gray-400" href="/midi">MIDI</a>
            <a class="p-5 hover:bg-gray-400" href="/loops-samples">Loops & Samples</a>
            <a class="p-5 hover:bg-gray-400" href="/one-shots">One shots</a>
            <a class="p-5 hover:bg-gray-400" href="/videos">Videos</a>
            <a class="p-5 hover:bg-gray-400" href="/channels">Channels</a>
            <a class="p-5 hover:bg-gray-400" href="/softwares">Softwares</a>
            <a class="p-5 hover:bg-gray-400" href="/presets">Presets</a>
            <a class="p-5 hover:bg-gray-400" href="/plugins">Plugins</a>
            <a class="p-5 hover:bg-gray-400" href="{{ route('login') }}">Log in</a>
            <a class="p-5 hover:bg-gray-400" href="/register">Sign up</a>
        </nav>
            @yield("content")
    </body>
</html>
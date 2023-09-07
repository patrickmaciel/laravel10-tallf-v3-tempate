<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        @vite(['resources/css/app.scss'])
        @vite(['resources/js/app.js'])
    </head>
    <body>
        <div class='p-10 max-w-lg mx-auto'>
            <div x-data="{ show: false }">
                <h1 x-on:click="show = !show">Não é componente Livewire</h1>
                <h2>Alpine.js funcionando fora do Livewire</h2>
                <p x-show="show">Show com alpine</p>
            </div>

            <hr>

            {{ $slot }}
        </div>

        @livewireScriptConfig
    </body>
</html>

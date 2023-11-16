<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{ $titulo ?? 'Defecto' }}</title>
    </head>
    <body>
        
        @include('partials.nav')
        {{ $slot }}
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="{{ $metaDescription ?? 'Descripción por defecto' }}" />
    <title>{{ $titulo ?? 'Defecto' }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <x-layouts.nav />
    {{ $suma }}
    app
    {{ $slot }}
</body>

</html>

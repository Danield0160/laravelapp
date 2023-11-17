<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pokemon['name'] }}</title>
</head>

<body>
    <x-layouts.pokemon nombre="{{ $pokemon['name'] }}" datosUrl="{{ $pokemon['url'] }}"/>
    

</body>

</html>

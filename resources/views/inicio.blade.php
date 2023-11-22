<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <title>Inicio</title>
</head>

<body>
    <h1>Hola <?php echo session('usuario'); ?></h1>
    <a href="/logout"><button>Logout</button></a>


    <x-layouts.tabla datos='{{ $libros }}' />

</body>

</html>

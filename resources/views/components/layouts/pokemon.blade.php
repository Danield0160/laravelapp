<h1>{{ $nombre }}</h1>
<?php

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$urlDividida = explode('/', $url);

$boton = "<a href='/" . $urlDividida[1] . '/' . intval($urlDividida[2]) - 1 . "'>Anterior</a>";
echo $boton;

$datos = json_decode(file_get_contents($datosUrl), true);
echo "<img src='" . $datos['sprites']['front_default'] . "'>";

$boton = "<a href='/" . $urlDividida[1] . '/' . intval($urlDividida[2]) + 1 . "'>Siguiente</a>";
echo $boton;

?>

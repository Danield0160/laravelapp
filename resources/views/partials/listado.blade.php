<?php

$path = 'https://pokeapi.co/api/v2/pokemon/?offset=0&limit=1292'; //public_path()."\pokemon.json"; // puedes poner el json en storage y utilizar storage_path()
$content = json_decode(file_get_contents($path), true);
$i = 0;
foreach ($content['results'] as $key) {
    $i++;
    echo "<p><a href='pokemon/" . $i . "'>" . $key['name'] . '</a></p>';
}

?>

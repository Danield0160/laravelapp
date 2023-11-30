<?php

$datosLista = json_decode( html_entity_decode($datos),true);

echo "<table>";

echo "<tr>";
foreach (array_keys($datosLista[0]) as $key) {
        echo "<td>";
        echo $key;
        echo "</td>";
}
echo "</tr>";

foreach ($datosLista as $row) {
        echo "<tr>";

        echo '<td>';
        echo $row["id"];
        echo '</td>';
    
        echo '<td>';
        echo $row["nombre"];
        echo '</td>';
    
        echo '<td>';
        echo $row["unidades"];
        echo '</td>';
    
        echo '</tr>';
}
echo "</table>";
?>
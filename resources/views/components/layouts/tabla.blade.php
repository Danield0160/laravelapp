<?php
$datosLista = json_decode( str_replace("&quot;",'"',$datos),true);
var_dump(array_keys($datosLista[0]));

echo "<table>";



foreach ($datosLista as $row) {
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
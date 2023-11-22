<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <title>Bienvenido Inicio</title>
</head>
<body>
    <h1>Hola <?php echo session("usuario") ?></h1>
    <a href="/logout"><button>Logout</button></a>

    <table>
        <tr>
            <td>id</td>
            <td>nombre</td>
            <td>cantidad</td>
        </tr>
        <?php
            foreach ($libros as $key => $libro) {
                echo "<tr>";

                    echo "<td>";
                        echo $libro->id;
                    echo "</td>";

                    echo "<td>";
                        echo $libro->nombre;
                    echo "</td>";

                    echo "<td>";
                        echo $libro->unidades;
                    echo "</td>";

                    

                echo "</tr>";
            }


        ?>
    </table>


</body>
</html>
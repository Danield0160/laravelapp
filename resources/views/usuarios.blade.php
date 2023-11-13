<x-layouts.app titulo="Principal" :suma=2+3>

    <h1>Usuarios</h1>
    <p>{{ "Esto lo hacemos con BLADE" }}</p>
    @dump($users)

    <p>{{ "Esto lo hacemos con BLADE" }}</p>
        @foreach ($users as $u)
        {{ $u->usuario }}
        @endforeach


    <?php
    //Código de PHP embebido
    print "<p>Esto lo hacemos con PHP</p>";
    foreach ( $users as $u) {
        print $u->usuario.' ' ;
    }
?>

</x-layouts.app>

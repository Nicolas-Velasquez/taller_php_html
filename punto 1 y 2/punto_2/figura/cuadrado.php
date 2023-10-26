<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Punto 2</title>
    </head>
    <body>
        <a href="../../index.php">Volver</a><br>
    </body>
</html>

<?php

$lado = $_POST['ladoCuadrado'];

areaCuadrado($lado);

function areaCuadrado($lado){
    $area = $lado * $lado;
    echo '<br>El área del cuadrado es: '.$area;
}

?>
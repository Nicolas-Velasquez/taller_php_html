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

$base = $_POST['baseRectangulo'];
$altura = $_POST['alturaRectangulo'];

areaRectangulo($base, $altura);

function areaRectangulo($base, $altura){
    $area = $base * $altura;
    echo '<br>El área del rectángulo es: '.$area;
}

?>
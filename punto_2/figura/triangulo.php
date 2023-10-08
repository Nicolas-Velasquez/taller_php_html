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

$base = $_POST['baseTriangulo'];
$altura = $_POST['alturaTriangulo'];

areaRectangulo($base, $altura);

function areaRectangulo($base, $altura){
    $area = ($base * $altura) / 2;
    echo '<br>El área del triángulo es: '.$area;
}

?>
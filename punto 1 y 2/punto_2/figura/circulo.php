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

$radio = $_POST['radio'];

areaCirculo($radio);

function areaCirculo($radio){
    $area = 3.1416 * ($radio * $radio);
    echo '<br>El área del circulo es: '.$area;
}
?>
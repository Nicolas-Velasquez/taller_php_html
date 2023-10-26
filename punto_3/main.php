<?php

include 'punto3.php';

$cantidad_notas = $_POST['cantidad_notas'];
$materia = $_POST['materia'];
$rango_min = $_POST['rango_min'];
$rango_max = $_POST['rango_max'];
$suma_notas = 0;


echo '<br>';
for ($i = 1; $i <= $cantidad_notas; $i++) {
    echo "<label for='nota$i'>Nota $i:</label>";
    echo "<input type='number' name='nota$i' step='0.1' min='" . $_POST['rango_min'] . "' max='" . $_POST['rango_max'] . "' required><br><br>";
}

echo '<input value="Calcular" onclick="calc($cantidad_notas, $rango_min, $rango_max, $suma_notas, $materia)">';


function calc($cantidad_notas, $rango_min, $rango_max, $suma_notas, $materia){
    for ($i = 1; $i <= $cantidad_notas; $i++) {
        $nota = $_POST["nota$i"];
        if ($nota < $rango_min || $nota > $rango_max) {
            echo "<p>La nota $i está fuera del rango de calificación.</p>";
            exit();
        }
        $suma_notas += $nota;
    }
    
    $promedio = $suma_notas / $cantidad_notas;
    $nota_aprobacion = $rango_min / $rango_max;
    $nota_aprobacion =$nota_aprobacion + 0.5;
    echo "<p>El promedio de notas en la materia '$materia' es: $promedio</p>";
    
    if ($promedio >= $nota_aprobacion) {
        echo "<p>¡Felicidades! Has aprobado la materia.</p>";
    } else {
        echo "<p>Lo siento, no has aprobado la materia. La nota mínima para aprobar es $nota_aprobacion.</p>";
    }
}
?>
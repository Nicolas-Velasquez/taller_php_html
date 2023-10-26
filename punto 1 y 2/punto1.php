<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Punto 1</title>
    </head>
    <body>
        <a href="index.php">Volver</a>
    </body>
</html>

<?php

$lista = [7, 62, 3, 61, 6, 70, 23, 27, 8, 13, 67];//lista original

echo '<br><br>';
echo 'Lista original:';
foreach($lista as $num){
    echo '<br>'.$num;
}

echo '<br><br>';
echo 'Lista ordenada:';
ordenar($lista);
pares($lista);
impares($lista);

function ordenar($lista){//ya funciona
    $num = 0;
    $ordenado = $lista;
    for($i=0; $i<count($ordenado); $i++){
        for($j=$i; $j<count($ordenado); $j++){
            if($ordenado[$j] < $ordenado[$i]){
                $num = $ordenado[$i];
                $ordenado[$i] = $ordenado[$j];
                $ordenado[$j] = $num;
            }
        }
    }
    foreach($ordenado as $n){
        echo '<br>'.$n;
    }
}

function pares($lista){//ya funciona
    echo '<br><br>';
    echo 'Numeros pares de mayor a menor:';
    $x = 0;
    $num = 0;
    for($i=0; $i<count($lista); $i++){
        if($lista[$i] % 2 == 0){
            $pares[$x] = $lista[$i];
            $x++;
        }
    }
    for($i=count($pares)-1; $i>=0; $i--){
        for($j=$i; $j>=0; $j--){
            if($pares[$j] < $pares[$i]){
                $num = $pares[$i];
                $pares[$i] = $pares[$j];
                $pares[$j] = $num;
            }
        }
    }
    foreach($pares as $n){
        echo '<br>'.$n;
    }
}

function impares($lista){//ya funciona
    $impares = [];
    $n = 0;
    echo '<br><br>';
    echo 'Numeros impares de menor a mayor:';
    for($i=0; $i<count($lista); $i++){
        if($lista[$i] % 2 != 0){
            $impares[$n] = $lista[$i];
            $n++;
        }
    }
    ordenar($impares);
}
/*ordenado
3
6
7
8
13
23
27
61
62
67
70
*/

/*pares
70
62
8
6
*/

/*impares
3
7
13
23
27
61
67
*/
?>
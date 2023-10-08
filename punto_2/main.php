<?php

include 'punto2.php';

$tipoFigura = $_POST['figuraElegir'];

switch($tipoFigura){
    case "Círculo":
        ?>
        <form action="figura/circulo.php" method="post">
            <label>Ingrese las las propiedades de la figura:</label>
            <input type="number" name="radio" placeholder="radio" required>
            <button type="submit">Calcular área</button>
        </form>
        <?php
        break;
    case "Cuadrado":
        ?>
        <form action="figura/cuadrado.php" method="post">
            <label>Ingrese las las propiedades de la figura:</label>
            <input type="number" name="ladoCuadrado" placeholder="lado" required>
            <button type="submit">Calcular área</button>
        </form>
        <?php
        break;
    case "Rectángulo";
        ?>
        <form action="figura/rectangulo.php" method="post">
            <label>Ingrese las las propiedades de la figura:</label>
            <input type="number" name="baseRectangulo" placeholder="base" required>
            <input type="number" name="alturaRectangulo" placeholder="altura" required>
            <button type="submit">Calcular área</button>
        </form>
        <?php
        break;
    case "Triángulo":
        ?>
        <form action="figura/triangulo.php" method="post">
                <label>Ingrese las las propiedades de la figura:</label>
                <input type="number" name="baseTriangulo" placeholder="base" required>
                <input type="number" name="alturaTriangulo" placeholder="altura" required>
                <button type="submit">Calcular área</button>
            </form>
        <?php
        break;
    default:
        //no se seleccionó nada (no se puede)
        break;
}

?>
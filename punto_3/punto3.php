<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Promedio de Notas</title>
</head>
<body>
    <a href="../index.php">Volver</a><br><br>
    <form action="main.php" method="post">
        <label for="materia">Nombre de la materia:</label>
        <input type="text" name="materia" required><br><br>

        <label for="cantidad_notas">Cantidad de notas:</label>
        <input type="number" name="cantidad_notas" required><br><br>

        <label for="rango_min">Calificación mínima:</label>
        <input type="number" name="rango_min" required><br><br>

        <label for="rango_max">Calificación máxima:</label>
        <input type="number" name="rango_max" required><br><br>

        
        <input type="submit" value="Aceptar">

    </form>
</body>
</html>


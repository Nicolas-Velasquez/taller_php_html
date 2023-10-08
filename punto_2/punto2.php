<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Punto 2</title>
    </head>
    <body>
        <a href="../index.php">Volver</a><br>
        <form action="main.php" method="post">
            <div>
                <label>Elija una figura: </label>
                <select name="figuraElegir">
                    <option>Círculo</option>
                    <option selected>Cuadrado</option>
                    <option>Rectángulo</option>
                    <option>Triángulo</option>
                </select>
            </div>
            <div>
                <button type="submit">Elegir</button>
            </div>
        </form>
    </body>
</html>
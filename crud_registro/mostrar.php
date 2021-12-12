<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
</head>
<body>
    <h1>Consultar nivel</h1>
    <form action="" method="POST">
    <label for="idnivel">introduzca el número del nivel</label>
    <input type="text" name="idnivel">
    <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
    require 'metodos_sql.php';
    
    if (isset($_POST['enviar'])) {
        $conexion = new Metodos_sql();
        $conexion->mostrar();
    }
    
    ?>
</body>
</html>
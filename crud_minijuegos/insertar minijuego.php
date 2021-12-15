<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="nombre"></label>
        <input type="text" id="nombre"> <br />
        <label for="ruta"></label>
        <input type="text" id="ruta"> <br />
        <label for="portada"></label>
        <input type="text" id="portada"> <br />
        <label for="fecha"></label>
        <input type="date" id="fecha"> <br />
        <input type="submit" id="enviar" value="Subir">
    </form>
    <?php
    require 'metodos_minijuegos.php';
    $conexion = new Metodos_minijuegos();

    if(isset($_POST['enviar'])){
        $conexion->insertarMinijuegos();
    }
    ?>
</body>
</html>
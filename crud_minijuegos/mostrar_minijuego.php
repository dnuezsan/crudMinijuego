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
        <label for="id"></label> <br />
        <input type="text" id="id"> <br />
        <input type="submit" id="uno" value="mostrar minijuego">
        <input type="submit" id="todos" value="mostrar todos">
    </form>
    <?php
    require 'metodos_minijuegos.php';
    $conexion = new Metodos_minijuegos();

    if(isset($_POST['uno'])){
        $conexion->mostrarMinijuego();
    }

    if (isset($_POST['todos'])) {
        $conexion->mostrarMinijuegos();    
    }
    ?>
</body>
</html>
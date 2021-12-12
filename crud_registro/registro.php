<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    <h1>Consultar nivel</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td><label for="usuario">Introduzca un nombre de usuario</label></td>
                <td><input type="text" name="usuario"></td>
            </tr>
            <tr>
                <td><label for="contrasenia">Introduzca una contraseña</label></td>
                <td><input type="text" name="contrasenia"> <br /></td>
            </tr>
        </table>


        <?php
        require 'metodos_registro.php';
        echo '<br />';
        $conexion = new Metodos_registro();

        $conexion->generarCheck();
        $kal = new Metodos_registro();
        if (isset($_POST['enviar'])) {
            $kal->registro();
        }
        ?>

        <input type="submit" name="enviar" value="enviar">
    </form>

</body>

</html>
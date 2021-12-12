<?php
require 'config.php';

class Metodos_registro
{

    protected $conexion;

    function __construct()
    {
        $this->conexion = new mysqli(SERVIDOR, USUARIO, CONTRASEÑA, BD);
        if ($this->conexion->connect_errno) {
            echo 'Se ha producido un error: ' . $this->conexion->connect_error;
        }
    }

    function registro()
    { //ACABAR INSERCION EN PREFERENCIA
        $sql1 = 'INSERT INTO usuario VALUES ("' . $_POST['usuario'] . '", "' . $_POST['contrasenia'] . '")';

        $resultado1 = $this->conexion->query($sql1);

        if ($resultado1) {
            echo 'true';
        } else {
            echo 'false';
        }

        if ($resultado1) {
            if (!empty($_POST['lista_check'])) {
                foreach ($_POST['lista_check'] as $check) {
                    $sql2 = 'INSERT INTO preferencia VALUES ("' . $_POST['usuario'] . '", "' . $check . '")';
                    $resultado2 = $this->conexion->query($sql2);
                }
            }
            echo 'Se ha registrado el usuario adecuadamente';
        } else {
            echo 'No se pudo finalizar el registro';
        }
    }

    function generarCheck()
    {

        $sql = 'SELECT * FROM minijuego';

        $resultado = $this->conexion->query($sql);
        echo 'Por favor elige los juegos que prefieras';
        echo '<br />';
        while ($fila = $resultado->fetch_array(MYSQLI_ASSOC)) {
            echo '<input type="checkbox" name = "lista_check[]" value = "' . $fila['idMinijuego'] . '">' . $fila['nombre'];
            echo '<br />';
        }
    }
}

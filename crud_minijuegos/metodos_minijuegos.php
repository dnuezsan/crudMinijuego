<?php
require 'config.php';

class Metodos_minijuegos{

    protected $conexion;

    function __construct()
    {
        $this->conexion = new mysqli(SERVIDOR, USUARIO, CONTRASEÑA, BD);
        if ($this->conexion->connect_errno) {
            echo 'Se ha producido un error: '.$this->conexion->connect_error;
        }
    }

    function mostrarMinijuego(){
        $sql = 'SELECT * FROM minijuego WHERE idMinijuego = "'.$_POST['id'];
        $resultado = $this->conexion->query($sql);

        if ($fila = $resultado->fetch_array(MYSQLI_ASSOC)) {
            echo $fila['idMinijuego'];
            echo $fila['nombre'];
            echo $fila['ruta'];
            echo $fila['portada'];
            echo $fila['fechaHora'];
        }
    }

    function mostrarMinijuegos(){
        $sql = 'SELECT * FROM minijuego';
        $resultado = $this->conexion->query($sql);

        while ($fila = $resultado->fetch_array(MYSQLI_ASSOC)) {
            echo $fila['idMinijuego'];
            echo $fila['nombre'];
            echo $fila['ruta'];
            echo $fila['portada'];
            echo $fila['fechaHora'];
        }
    }

    function insertarMinijuegos(){
        $sql = 'INSERT INTO minijuego values (nombre = "'.$_POST['nombre'].'" ruta = "'.$_POST['ruta'].'" portada = "'.$_POST['portada'].'" fechaHora = "'.$_POST['fecha'];
        $resultado = $this->conexion->query($sql);

        if ($resultado) {
            echo 'Se ha insertado un nuevo minijuego';
        } else {
            echo 'No se pudo insertar el minijuego';
        }
    }

    function actualizarMinijuego(){

    }

    function borrarMinijuego(){
        $sql = 'DELETE FROM minijuego WHERE idMinijuego = '.$_POST['id'];
        $resultado = $this->conexion->query($sql);

        if ($resultado) {
            echo 'Se ha borrado el registro';
        } else {
            echo 'No pudo eliminar el registro';
        }
    }

}

?>
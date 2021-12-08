<?php

require 'config.php';

class Conexion{

    protected $conexion;

    function __construct()
    {
        $this->conexion = new mysqli(SERVIDOR, USUARIO, CONTRASEÑA, BD);
        if ($this->conexion->connect_errno) {
            echo 'Se ha producido un error: '.$this->conexion->connect_error;
        }
    }
}
?>
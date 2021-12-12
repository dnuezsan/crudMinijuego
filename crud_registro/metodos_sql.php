<?php
require 'config.php';

class Metodos_sql{

    protected $conexion;

    function __construct()
    {
        $this->conexion = new mysqli(SERVIDOR, USUARIO, CONTRASEÑA, BD);
        if ($this->conexion->connect_errno) {
            echo 'Se ha producido un error: '.$this->conexion->connect_error;
        }
    }

    function prueba(){
        echo $_POST['idnivel'];
    }

    function mostrar(){

        $sql = 'SELECT * FROM nivel WHERE idNivel = "'.$_POST['idnivel'].'"';
       $resultado = $this->conexion->query($sql);
        if ($resultado->num_rows != 0) {
            echo '<table>';
            echo '<tr>';
            echo '<td>idnivel</td>';
            echo '<td>puntuacion</td>';
            echo '<td>vida</td>';
            echo '<td>velocidad</td>';
            echo '<td>bolas</td>';
            echo '</tr>';
        while($fila=$resultado->fetch_array(MYSQLI_ASSOC)){
            echo '<tr>';
            echo '<td>'.$fila['idnivel'].'</td>';
            echo '<td>'.$fila['puntuacion'].'</td>';
            echo '<td>'.$fila['vida'].'</td>';
            echo '<td>'.$fila['velocidad'].'</td>';
            echo '<td>'.$fila['bolas'].'</td>';
            echo'</tr>';
        }
        echo '</table>';
    }else{
        echo 'No se encontro ningún resultado';
    }
    }

    function borrar(){
        $sql = 'DELETE FROM nivel WHERE idnivel = "'.$_POST['idnivel'].'"';
        $resultado = $this->conexion->query($sql);

        if ($resultado) {
            echo 'El nivel ha sido eliminado';
        }else{
            echo 'No se eliminó ningún nivel';
        }
    }

    /* function insertarPartida(){

    } */

    function registro(){ //ACABAR
        $sql = 'INSERT INTO usuario VALUES (usuario = "'.$_POST['usuario'].'", contrasenia = "'.$_POST['contrasenia'].'")';

        $resultado = $this->conexion->query($sql);

        if ($resultado) {
            echo 'Se ha registrado el usuario adecuadamente';
        } else {
            echo 'No se pudo finalizar el registro';
        }
    }

    function actualizar(){

    }

    function registrar(){

    }
}

?>
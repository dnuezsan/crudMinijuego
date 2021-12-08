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

    function prueba(){
        echo $_POST['idnivel'];
    }

    function mostrar(){

        $sql = 'SELECT * FROM niveles WHERE idNivel = "'.$_POST['idnivel'].'"';
       $resultado = $this->conexion->query($sql);
        if ($resultado->num_rows != 0) {
            echo '<table>';
            echo '<tr>';
            echo '<td>idNivel</td>';
            echo '<td>puntuacion</td>';
            echo '<td>vida</td>';
            echo '<td>velocidad</td>';
            echo '<td>bolas</td>';
            echo '</tr>';
        while($fila=$resultado->fetch_array(MYSQLI_ASSOC)){
            echo '<tr>';
            echo '<td>'.$fila['idNivel'].'</td>';
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
        $sql = 'DELETE FROM niveles WHERE idNivel = "'.$_POST['idnivel'].'"';
        $resultado = $this->conexion->query($sql);

        if ($resultado) {
            echo 'El nivel ha sido eliminado';
        }else{
            echo 'No se eliminó ningún nivel';
        }
    }
}

?>
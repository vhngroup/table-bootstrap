<?php
    class conectar{
        public function conexion(){
            $conexion=mysqli_connect('localhost', 'root','','juegos');
            return $conexion;
        }
    }
    #permite determinar si la conección esta activa
    $obj = new conectar ();

        if($obj->conexion()){
            echo "conectado";
        }

?>
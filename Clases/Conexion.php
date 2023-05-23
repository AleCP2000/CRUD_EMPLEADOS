<?php

class Conexion{

    protected $conexion;

    public function conectar(){
        /* Mysqli: solo para mysql
         * PDO:trabaja con distintos formatos de base de datos, ej: Oracle, sql, mysql
         * El metodo mysqli_connect solicita 4 parametros(servicor, usuario, password, nombre DB)
         */
        $this->conexion=mysqli_connect("localhost", "root", "", "crud_empleados");
    }
}

?>
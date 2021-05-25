<?php

//Para conectar BD
function conexion($tabla, $usuario, $pass){
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=$tabla", $usuario, $pass);
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}


?>
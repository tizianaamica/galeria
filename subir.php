<?php

//Conexion a la BD con funciones
$conexion = conexion('galeria_practica', 'root', '');

if (!$conexion) {
    die();
}

//Comprobar que el usuario envio los datos
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){
    # code...
}

require 'views/subir.view.php';

?>
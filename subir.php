<?php
require 'funciones.php';
//Conexion a la BD con funciones
$conexion = conexion('galeria_practica', 'root', '');

if (!$conexion) {
    die();
}
 
//Comprobar que el usuario envio los datos
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){
    $check = @getimagesize($_FILES['foto']['tmp_name']);
    if ($check !== false) {
        $carpeta_destino = 'fotos/';
        $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
        //echo $archivo_subido;
        //para subir la foto
        move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

        //llenamos la bd
        $statement = $conexion->prepare('INSERT INTO fotos (titulo, imagen, texto) VALUES (:titulo, :imagen, :texto)');
        $statement->execute(array(
            ':titulo' => $_POST['titulo'],
            ':imagen' => $_FILES['foto']['name'],
            ':texto'  => $_POST['texto']
        ));

        header('Location: index.php');
    }else{
        $error = "El archivo no es una imagen o el archivo es muy pesado";
    }
}

require 'views/subir.view.php';

?>
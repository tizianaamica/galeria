<?php

require 'funciones.php';
$fotos_por_pagina = 8;

$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina: 0;

$conexion = conexion('galeria_practica', 'root', '');

if (!$conexion) {
    die();
}

//traer fotos de la BD
$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotos_por_pagina");

$statement->execute();
$fotos = $statement->fetchAll();

if (!$fotos) {
    header('Location: index.php');
}

//Calcular el # de fotos
$statement = $conexion->prepare("SELECT FOUND_ROWS() as total_filas");
$statement->execute();
$total_post = $statement->fetch()['total_filas'];

$total_paginas = ceil($total_post / $fotos_por_pagina);


require 'views/index.view.php';

?>
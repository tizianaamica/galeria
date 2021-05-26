<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>

<body>

    <head>
        <div class="contenedor">
            <h1 class="titulo">Foto: <?php if(!empty($foto['titulo'])){
                echo $foto['titulo'];
            }else{
                echo $foto['imagen'];
            } ?></h1>
        </div>
    </head>
    
    <div class="contenedor">
        <div class="foto">
            <img src="fotos/<?php echo $foto['imagen']; ?>" alt="">
            <p class="texto"><?php echo $foto['texto']; ?></p>
            <a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i>  Regresar</a>
        </div>
    </div>

    <footer>
        <p class="copyright">Galeria creada por Tiziana Amicarella </p>
    </footer>
    

</body>

</html>
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
            <h1 class="titulo">Mi Increible Galeria en PHP y MySQL</h1>
        </div>
    </head>

    <section class="fotos">
        <div class="contenedor">
            <!--CARGANDO DINAMICAMENTE LAS IMAGENES -->
            <?php  foreach($fotos as $foto):?>
                <div class="thumb">
                    <a href="foto.php?id=<?php  echo $foto['id']; ?>">
                        <img src="fotos/<?php echo $foto['imagen']; ?>" alt="">
                    </a>
                </div>
            <?php endforeach;?>
            
            <div class="paginacion">
                <?php if($pagina_actual > 1):?>
                    <a href="index.php?p=<?php echo $pagina_actual - 1 ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>            
                    <a href="subir.php" class="derecha">Subir Foto</a>
                <?php endif ?>

                <?php if($total_paginas != $pagina_actual ):?>
                    <a href="index.php?p=<?php echo $pagina_actual + 1 ?>" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a>                     
                    <a href="subir.php">Subir Foto</a>
                <?php endif ?>
                
                <!--
                <a href="#" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>            
                <a href="#" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a>            
                -->
            </div>
        </div>
    </section>

    <footer>
        <p class="copyright">Galeria creada por Tiziana Amicarella </p>
    </footer>
    

</body>

</html>
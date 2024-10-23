<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $ruta;?>bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $ruta;?>css/estilo.css">
    <title>Proyecto Promocion</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="<?php echo $ruta2?>index.php">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $ruta3?>calculadora.php">Calculadora</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $ruta3?>tipos_de_lentes.php">Tipos de Lentes</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $ruta3?>susUsos.php">Usos en la ciencia</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $ruta3?>informacion.php">Información</a></li>
        </ul>
    </div>
</nav>
    
</body>
</html>
<?php
$ruta='../';
$ruta2='../';
$ruta3='';
include 'encabezado.php';
?>

<div class="container-fluid">
    <div class="row">
        <!-- Contenido principal con mayor ancho -->
        <main role="main" class="col-md-12 ml-sm-auto col-lg-10 px-md-4 mx-auto"> <!-- Agregada la clase mx-auto -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info mt-3">
                        <h1>Seleccione una ecuación para utilizar en el menú</h1>
                    </div>
                </div>

                <!-- Agregar tres elementos con enlaces a imágenes y títulos -->
                <div class="col-md-12 mt-3 text-center">
                    <a href="enlaces_calculadora/ecuacion.php" class="text-decoration-none">
                        <h4 class="mt-2">Ecuación del fabricante de lentes</h4>
                        <img src="../img/Captura de pantalla 2023-12-14 145626.png" alt="Ecuación del fabricante de lentes" class="img-fluid">
                    </a>
                </div>

                <div class="col-md-12 mt-3 text-center">
                    <a href="enlaces_calculadora/relacion.php" class="text-decoration-none">
                        <h4 class="mt-2">Relación distancia objeto-imagen</h4>
                        <img src="../img/Captura de pantalla 2023-12-14 145730.png" alt="Relación distancia objeto-imagen" class="img-fluid">
                    </a>
                </div>

                <div class="col-md-12 mt-3 text-center">
                    <a href="enlaces_calculadora/aumento.php" class="text-decoration-none">
                        <h4 class="mt-2">Aumento lateral</h4>
                        <img src="../img/Captura de pantalla 2023-12-14 145745.png" alt="Aumento lateral" class="img-fluid">
                    </a>
                </div>

            </div>
        </main>
    </div>
</div>

<?php include 'footer.php'; ?>



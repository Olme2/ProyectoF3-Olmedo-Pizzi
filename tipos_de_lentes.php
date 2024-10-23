<?php

$ruta='../';
$ruta2='../';
$ruta3='';
include 'encabezado.php';

?>
<header class="bg-light text-center py-5">
    <h1>Tipos de Lentes</h1>
</header>
<section id="lente-divergente" class="container mt-5">
    <h2 class="mb-3">Lente Divergente</h2>
    <p>Las lentes divergentes dispersan los rayos de luz paralelos que pasan a través de ellas. Tienen un grosor mayor en los bordes en comparación con el centro, lo que provoca que los rayos de luz se separen. A diferencia de las lentes convergentes, las divergentes tienen su foco virtual, es decir, la prolongación retroactiva de los rayos divergentes parece converger en un punto detrás de la lente. Este tipo de lentes se utiliza en aplicaciones donde es necesario dispersar la luz, como en corrección de miopía y en algunos microscopios especializados.</p>
    <img src="../img/lenteDivergente.jpeg" alt="Lente Divergente" class="img-fluid">
    <figcaption>Imagenes extraidas del Sears-Zemansky Vol.2 (Pagina 1179)</figcaption>
</section>

<section id="lente-convergente" class="container mt-5">
    <h2 class="mb-3">Lente Convergente</h2>
    <p>Las lentes convergentes son dispositivos ópticos que tienen la capacidad de enfocar los rayos de luz paralelos que inciden sobre ellas en un solo punto llamado foco principal. Estas lentes tienen un grosor mayor en el centro en comparación con los bordes, lo que provoca la convergencia de los rayos incidentes. Los lentes convergentes se utilizan en una variedad de aplicaciones, como cámaras, microscopios y telescopios, donde la capacidad de converger la luz es esencial para formar imágenes claras.</p>
    <img src="../img/lenteConvergente.jpeg" alt="Lente Convergente" class="img-fluid">
    <figcaption>Imagenes extraidas del Sears-Zemansky Vol.2(Pagina 1179)</figcaption>
</section>
<section class="container mt-5">
<h3 class="mb-3"><br>Formación de imágenes por una lente delgada convergente</h3>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-column" id="navbarNav">
        <ul class="navbar-nav flex-column">
        <li class="nav-item">
            <a href="#" class="enlace-con-imagen nav-link">
            <strong>Caso 1: </strong>El objeto O está afuera del punto focal; la imagen I es real
            <div class="imagenFlotante">
                <img src="../img/caso1.jpeg" alt="Descripción de la imagen">
            </div>
            </a>
        </li>
            <li class="nav-item">
                <a class="nav-link enlace-con-imagen" href="../img/caso2.jpeg">
                    <strong>Caso 2: </strong>El objeto O está más cerca del punto focal; la imagen I es real y más lejana
                    <div class="imagenFlotante">
                        <img src="../img/caso2.jpeg" alt="Descripción de la imagen">
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link enlace-con-imagen" href="../img/caso3.jpeg">
                    <strong>Caso 3: </strong>El objeto O está aun más cerca del punto focal; la imagen I es real e incluso más lejana
                    <div class="imagenFlotante">
                        <img src="../img/caso3.jpeg" alt="Descripción de la imagen">
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link enlace-con-imagen" href="../img/caso4.jpeg" >
                    <strong>Caso 4: </strong> El objeto O está en el punto focal; la imagen I está en el infinito
                    <div class="imagenFlotante">
                        <img src="../img/caso4.jpeg" alt="Descripción de la imagen">
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link enlace-con-imagen" href="../img/caso5.jpeg" >
                    <strong>Caso 5: </strong>El objeto O está adentro del punto focal; la imagen I es virtual y más grande que el objeto
                    <div class="imagenFlotante">
                        <img src="../img/caso5.jpeg" alt="Descripción de la imagen">
                    </div>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link enlace-con-imagen" href="../img/caso6.jpeg">
                    <strong>Caso 6: </strong>Un objeto virtual O (los rayos luminosos convergen en la lente)
                    <div class="imagenFlotante">
                        <img src="../img/caso6.jpeg" alt="Descripción de la imagen">
                    </div>
                </a>
            </li>
        </ul>
    </div>
</nav>
</section>
<script>
    function mostrarImagen() {
        document.getElementById("imagenFlotante").style.display = "block";
    }

    function ocultarImagen() {
        document.getElementById("imagenFlotante").style.display = "none";
    }
</script>
<?php
include_once("footer.php");
?>
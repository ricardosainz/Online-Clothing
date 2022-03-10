<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styleindex.css">
    <title>OC: Home</title>
</head>
<body>
<header>
    <div>
        <nav>
            <ul>
                <li><a class="link" href="clases/hombres.php">Hombre</a></li>
                <li><a class="link" href="clases/mujeres.php">Mujer </a></li>
                <li><a class="link" href="clases/unisex.php">Unisex</a></li>
                <li><a class="link" href="clases/galery.php">Galería</a></li>
                <li><a class="link" href="clases/iniciosesion.php">Inicia Sesión</a> </li>
                <li><a class="link" href="clases/registro.php">Registrate</a></li>
                <li><a class="link" href="clases/nosotros.php">Nosotros</a></li>
            </ul>
        </nav>
    </div>
</header>
<section>
    <img id="logo" src="img/index/logo2.png">
    <video onloadedmetadata="this.muted=true" autoplay loop>
        <source src="img/index/video_index.mp4">
    </video>
</section>
<section class="apartados">
    <div class="slide-contenedor">
        <div class="miSlider fade">
            <a href="clases/hombre.php"><img src="img/index/hombre.png" ></a>
        </div>
        <div class="miSlider fade">
            <a href="clases/mujer.php"><img src="img/index/mujer.png"></a>
        </div>
        <div class="miSlider fade">
            <a href="clases/unisex.php"><img src="img/index/unisex.png"></a>
        </div>
        <div class="direcciones">
            <a class="atras" onclick="avanzaSlide(-1)">&#10094;</a>
            <a class="adelante" onclick="avanzaSlide(1)">&#10095;</a>
        </div>
        <div class="barras">
            <span class="barra active" onclick="posicionSlide(1)"></span>
            <span class="barra" onclick="posicionSlide(2)"></span>
            <span class="barra" onclick="posicionSlide(3)"></span>
        </div>
    </div>
</section>
<script src="js/slider.js"></script>
</body>
</html>
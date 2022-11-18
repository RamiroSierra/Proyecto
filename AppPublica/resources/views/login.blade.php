<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/light.css" class="theme"><!--Necesario agregar clase theme para referenciarlo en js-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

    <title>AllScore</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="./images/logo.png" alt="" srcset="">
        </div>
       <!--Menu Hamburgesa-->
       <div class="icono-menu" id="icono-menu">
        <span class="btn-menu">
            <i class="fa-solid fa-bars"></i>
        </span>
    </div>
    <div class="cont-menu active" id="menu">
        <ul>
            <a href="index.html"><li >Home</li></a>
            <a href="login.html"><li class="activado">Iniciar Sesion</li></a>
            <a href="perfilusuario.html"><li>Configuracion</li></a>
            <a href="favoritos.html"><li>Favoritos</li></a>
          </ul>
    </div>
    </header>
<div class="contenedor">
<div class="contact-wrapper">
<div class="contact-form">

    <form action="{{ route('Autenticacion') }}" method="post"> @csrf
        email <input type="email" name="email"><br>
        Password <input type="password" name="password"><br>
        <input type="submit" value="Registrar">
    </form>
    <h1><a href="{{ route('Register') }}">¿No tienes una cuenta?Creala aqui!</a></h1>
</div>
<div class="contact-info">
    <div class="logo">
        <img src="./images/logo.png" alt="" srcset="">
    </div>
    <br>
    <h2>Inicia Sesion!</h2>
    <br>
<p>Y sigue visualizando los resultados de tus equipos favoritos</p>
<br>
<ul>
<li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
<li><a href="https://twitter.com/YzYSports" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
<li><a href="#" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
<li><a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
</ul>
</div>
</div>

</div>
<!--Comienzo footer-->
<footer>
    <div class="footer-content">
        <h3>AllScore</h3>
        <p>Gracias por visitar nuestra pagina, aqui tienes nuestras redes sociales</p>
        <ul class="socials">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
        </ul>
        <ul class="socials">
            <li><a href="#"><i>Nosotros</i></a></li>
            <li><a href="#"><i>Ayuda</i></a></li>
        </ul>

    </div>
    
    <div class="footer-bottom">
        <p>© Copyright by YzY</p>
    </div>
</footer>


<script src="js/swiper-bundle.min.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
<script src="js/main.js"></script>
<script src="js/app.js"></script>
</body>
</html>
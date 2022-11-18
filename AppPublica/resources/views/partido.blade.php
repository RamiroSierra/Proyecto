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
                    <a href="index.html"><li>Home</li></a>
                    <a href="login.html"><li>Iniciar Sesion</li></a>
                    <a href="perfilusuario.html"><li>Configuracion</li></a>
                    <a href="favoritos.html"><li>Favoritos</li></a>
                  </ul>
              
            </ul>
        </div>
    </header> 
    <div class="contenedor_general_evento">
    <div class="contenedor_evento">
        <a href="favoritos.html">
<div class="liga_evento">Agregar A Favoritos</div></a>
<a href="favoritos.html"><div class="fecha_hora_partido">Agregar A Favoritos</div></a>


    </div>
    <div class="partido_resultado">
    <div class="logo_equipo_1">
        <div class="nombre_equipo_local">Peñarol</div>
    <img src="./images/peñarol.png" alt="Peñarol">
</div>
    <div class="resultado_partido">3-1
    </div>
    <div class="logo_equipo_2">
    <div class="nombre_equipo_visitante">Real Madrid</div>
    <img src="./images/real.png" alt="">
</div>
</div>
</div>
<div class="contenedor_resultado_partido">
    <div class="publicidad_partido">
        <img src="./images/coca.jpg" alt="" >
        </div>
    <div class="contenedor_partido_ocasiones">
  
    <div class="ocasiones_partido">
  
        <div class="ocasiones_local">Nahuelpan<br>
        </div>
        <div class="ocasiones_visitante">Cristiano<br></div>
    </div>
</div>
<div class="publicidad_partido">
    <img src="./images/coca.jpg" alt="" >
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
   <!-- Swiper JS -->
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
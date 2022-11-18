<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="css/light.css" class="theme">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d9baa01937.js" crossorigin="anonymous"></script>
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
            <li class="activado">Home</li>
            <a href="{{ route('Login') }}"><li>Iniciar Sesion</li></a>
            <a href="favoritos.blade.php"><li>Favoritos</li></a>
        </ul>
    </div>
</header>
<div class="container">
    <div class="slide-container swiper">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                @foreach($sports as $sport)
                    <div class="card swiper-slide">
                        <a href="{{ route('Sport', $sport['id']) }}">
                            <div class="image-content">
                                <span class="overlay1"></span>
                                <div class="card-image">
                                    <img src="{{ $sport['URL'] }}" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <h2 class="name"><b>{{ $sport['nombre'] }}</b></h2>
                                <p class="description"><br>selecciona este deporte para ver los partidos</p><br>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>

</div>

<div class="publicidad">
<img src="./images/coca.jpg" alt="" >
</div>
<div class="general">
    <div class="container-eventos">
        <a href="partido.html">
            <div class="eventos">
                <div class="equipo1">
                    <img src="./images/peñarol.png" alt="" srcset="">
                </div>
                <div class="resultado-evento">3-1</div>
                <div class="equipo2">
                    <img src="./images/real.png" alt="" srcset="">
                </div>
            </div>
        </a>
        <a href="partido.html">
            <div class="eventos">
                <div class="equipo1">
                    <img src="./images/peñarol.png" alt="" srcset="">
                </div>
                <div class="resultado-evento">3-1</div>
                <div class="equipo2">
                    <img src="./images/real.png" alt="" srcset="">
                </div>
            </div>
        </a>
        <a href="partido.html">
            <div class="eventos">
                <div class="equipo1">
                    <img src="./images/peñarol.png" alt="" srcset="">
                </div>
                <div class="resultado-evento">3-1</div>
                <div class="equipo2">
                    <img src="./images/real.png" alt="" srcset="">
                </div>
            </div>
        </a>
        <a href="partido.html">
            <div class="eventos">
                <div class="equipo1">
                    <img src="./images/peñarol.png" alt="" srcset="">
                </div>
                <div class="resultado-evento">3-1</div>
                <div class="equipo2">
                    <img src="./images/real.png" alt="" srcset="">
                </div>
            </div>
        </a>
        <a href="partido.html">
            <div class="eventos">
                <div class="equipo1">
                    <img src="./images/peñarol.png" alt="" srcset="">
                </div>
                <div class="resultado-evento">3-1</div>
                <div class="equipo2">
                    <img src="./images/real.png" alt="" srcset="">
                </div>
            </div>
        </a>
        <a href="partido.html">
            <div class="eventos">
                <div class="equipo1">
                    <img src="./images/peñarol.png" alt="" srcset="">
                </div>
                <div class="resultado-evento">3-1</div>
                <div class="equipo2">
                    <img src="./images/real.png" alt="" srcset="">
                </div>
            </div>
        </a>
        <a href="partido.html">
            <div class="eventos">
                <div class="equipo1">
                    <img src="./images/peñarol.png" alt="" srcset="">
                </div>
                <div class="resultado-evento">3-1</div>
                <div class="equipo2">
                    <img src="./images/real.png" alt="" srcset="">
                </div>
            </div>
        </a>  
    </div>

<div class="ligas">
    <p class="liga">Ligas</p>
    @foreach($leagues as $league)
        <a href="{{ route('League', $league['id']) }}"><div class="liga1">{{ $league['nombre']}}</div></a>
    @endforeach
</div>
</div>

<h2 class="subscripcion">SUSCRIPCIONES</h2>
<div class="pagos">
    <div class="card">
       
        <div class="face front">
            <h4>GRATIS</h4>
            <h3>ESTANDAR</h3>
        </div>
        <div class="face back">
            <h3>ESTANDAR</h3>
            <p>Este es el plan por defecto,podras visualizar los resultados y equipos que desees,pero tendras publicidad.</p>
            <div class="link">
                <a href="#">Mas Informacion</a>
            </div>
        </div>
    </div>
    <div class="card">
        <a href="suscripcion.blade.php">
        <div class="face front">
            <h4 class="box">5$</h4>
            <h3>PREMIUM</h3>
        </div>
        <div class="face back">
            <h3>PREMIUM</h3>
            <p>Este plan cuenta con un sistema de notificacion de tus equipos favoritos y no tiene publicidad</p>
            <div class="link">
                <a href="#">Mas Informacion</a>
            </div>
        </div>
    </a>
    </div>
</div>
<div class="publicidad">
    <img src="./images/coca.jpg" alt="" >
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
    </div>
    <div class="footer-bottom">
        <p>© Copyright by YzY</p>
    </div>
</footer>

    <script src="{{ asset ('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset ('js/script.js') }}"></script>
    <script src="{{ asset ('js/main.js') }}"></script>
    <script src="{{ asset ('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=chrome" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <link rel="stylesheet" href="css/light.css" class="theme" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <title>AllScore</title>
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="./images/logo.png">
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
          <a href="{{ route('Login') }}"><li>Iniciar Sesion</li></a>
          <a href="perfilusuario.html"><li>Configuracion</li></a>
          <a href="favoritos.html"><li>Favoritos</li></a>
        </ul>
      </div>
    </header>
    <div class="publicidad_liga">
      <img src="./images/coca.jpg" alt="" srcset="" />
    </div>
    <div class="nombre_liga">

      <h1 class="nombre">Campeonato Uruguayo</h1>
    </div>
    <div class="liga_tabla">
      <div class="liga_equipo">
        <p class="equipos_liga_resultado"><b>Equipos</b></p>
        @foreach($dataLeagues as $dataLeague)
          <p class="equipos_liga_resultado">{{$dataLeague['nombre']}}</p>
        @endforeach
      </div>
    </div>
    <div class="publicidad_liga">
      <img src="./images/coca.jpg" alt="" srcset="" />
    </div>

    <div class="general_liga">
      <div class="container-evento_liga">
        <a href="partido.html">
        <div class="eventos_liga">
          <div class="equipo1">
            <img src="./images/peñarol.png" alt="" srcset="" />
          </div>
          <div class="resultado-evento">3-1</div>
          <div class="equipo2">
            <img src="./images/real.png" alt="" srcset="" />
          </div>
        </div>
        <a href="partido.html">
        <div class="eventos_liga">
          <div class="equipo1">
            <img src="./images/peñarol.png" alt="" srcset="" />
          </div>
          <div class="resultado-evento">3-1</div>
          <div class="equipo2">
            <img src="./images/real.png" alt="" srcset="" />
          </div>
        </div>
      </a>
        <a href="partido.html">
        <div class="eventos_liga">
          <div class="equipo1">
            <img src="./images/peñarol.png" alt="" srcset="" />
          </div>
          <div class="resultado-evento">3-1</div>
          <div class="equipo2">
            <img src="./images/real.png" alt="" srcset="" />
          </div>
        </div>
      </a>
        <a href="partido.html">
        <div class="eventos_liga">
          <div class="equipo1">
            <img src="./images/peñarol.png" alt="" srcset="" />
          </div>
          <div class="resultado-evento">3-1</div>
          <div class="equipo2">
            <img src="./images/real.png" alt="" srcset="" />
          </div>
        </div>
      </a>
        <a href="partido.html">
        <div class="eventos_liga">
          <div class="equipo1">
            <img src="./images/peñarol.png" alt="" srcset="" />
          </div>
          <div class="resultado-evento">3-1</div>
          <div class="equipo2">
            <img src="./images/real.png" alt="" srcset="" />
          </div>
        </div>
      </a>
        <a href="partido.html">
        <div class="eventos_liga">
          <div class="equipo1">
            <img src="./images/peñarol.png" alt="" srcset="" />
          </div>
          <div class="resultado-evento">3-1</div>
          <div class="equipo2">
            <img src="./images/real.png" alt="" srcset="" />
          </div>
        </div>
      </a>
      </div>
    </div>
    <div class="publicidad_liga">
      <img src="./images/coca.jpg" alt="" srcset="" />
    </div>
    <!--Comienzo footer-->
    <footer>
      <div class="footer-content">
        <h3>AllScore</h3>
        <p>
          Gracias por visitar nuestra pagina, aqui tienes nuestras redes
          sociales
        </p>
        <ul class="socials">
          <li>
            <a href="#"><i class="fa fa-facebook"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-twitter"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-google-plus"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-youtube"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-linkedin-square"></i></a>
          </li>
        </ul>
      </div>

      <div class="footer-bottom">
        <p>© Copyright by YzY</p>
      </div>
    </footer>
    <script src="{{ asset ('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset ('js/script.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset ('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
  </body>
</html>

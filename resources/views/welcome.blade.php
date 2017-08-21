<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <title>Sisdemocracia</title>
        <!-- Styles -->
        <style>
        body,h1,h2,h3,h4,h5,h6 {
          font-family: "Lato", sans-serif
        }
        .w3-bar,h1,button {
          font-family: "Montserrat", sans-serif
        }
        .fa-anchor,.fa-coffee {
          font-size:200px
        }
        </style>
      </head>
    <body>
      <!-- Navbar -->
        <div class="w3-top">
          <div class="w3-bar w3-blue w3-card-2 w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-blue" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            @if (Route::has('login'))
            @auth
            <a href="{{ url('/home') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Logout</a>
            @else
            <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Login</a>
            <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Registre-se</a>
            @endauth
          </div>
            @endif
            <!-- Navbar on small screens -->
          <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
            @if (Route::has('login'))
            @auth
            <a href="{{  url('/home') }}" class="w3-bar-item w3-button w3-padding-large"> Logout</a>
            @else
            <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-padding-large">Login</a>
            <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-padding-large">Registre-se</a>
            @endauth
            </div>
            @endif
        </div>
        <!-- Header -->
        <div class="container-fluid">
        <header class="w3-container w3-blue w3-center" style="padding:70px 20px">
          <h1 class="w3-margin w3-jumbo">Sisdemocracia</h1>
          <p class="w3-xlarge">Um sistema para projetos de iniciativa popular de João Monlevade.Assine um projeto de lei
Um projeto de lei de iniciativa popular precisa atingir uma porcentagem mínima de assinaturas de eleitores para ser encaminhado e apresentado em uma classe legislativa</p>
          <!--Pensar sobre utilidade do button -->

          <a href="{{ route('login') }}" class="w3-button w3-white w3-padding-large w3-large w3-margin-top" role="button" aria-pressed="true">Votar em Projetos</a>
        </header>
        </div>
        <h2 >Conheça nossos projetos de Iniciativa popular</h2>
        <div class="container-fluid">
          <div class="row">
              <div class="col-sm-6 col-md-4 clearfix">
                <div class="thumbnail">
                  <img src="http://lorempixel.com/400/200/sports/1" class="img-responsive" alt="">
                  <div class="caption">
                    <h3>Projeto Estacionamento</h3>
                    <p>Este projeto tem por obejtivo regulamentar ... </p>
                    <p><a href="/projetos" class="btn btn-primary" role="button">Votar</a> </p>

                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4 clearfix">
                <div class="thumbnail">
                  <img src="http://lorempixel.com/400/200/sports/2" class="img-responsive" alt="...">
                  <div class="caption">
                    <h3>Projeto Parque do Areao</h3>
                    <p>Este projeto trata da revitalização do parque do areao ... </p>
                    <p><a href="/projetos" class="btn btn-primary" role="button">Votar</a> </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 clearfix">
                <div class="thumbnail">
                  <img src="http://lorempixel.com/400/200/sports/3" class="img-responsive" alt="...">
                  <div class="caption">
                    <h3>Projeto Escola Tecnologica</h3>
                    <p>Este projeto trata da inserção do curriculun...</p>
                    <p><a href="/projetos" class="btn btn-primary" role="button">Votar</a> </p>
                  </div>
                </div>
              </div>
        </div>
          </div>
          <!-- Footer -->
            <footer class="w3-container w3-padding-64 w3-center w3-opacity">
              <div class="w3-xlarge w3-padding-32">
                <i class="fa fa-facebook-official w3-hover-opacity"></i>
                <i class="fa fa-instagram w3-hover-opacity"></i>
                <i class="fa fa-snapchat w3-hover-opacity"></i>
                <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                <i class="fa fa-twitter w3-hover-opacity"></i>
                <i class="fa fa-linkedin w3-hover-opacity"></i>
             </div>
             <p>Powered by <a href="https://www.a3ideiasweb.com" target="_blank">www.a3ideiasweb.com</a></p>
            </footer>

          <script>
          // Used to toggle the menu on small screens when clicking on the menu button
          function myFunction() {
              var x = document.getElementById("navDemo");
              if (x.className.indexOf("w3-show") == -1) {
                  x.className += " w3-show";
              } else {
                  x.className = x.className.replace(" w3-show", "");
              }
          }
          </script>
    </body>
</html>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Instituto | Itali</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css">
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 1000px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view {
        height: 650px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #1C2331!important;
              }
          }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="" target="_blank">
        <strong>ITALI</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>

        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">

          <li class="nav-item">
            <a href="" class="nav-link border border-light rounded"
              target="_blank">
              <i class="fab fa- mr-2"></i>Contactanos en Puno: +51 945317511 | Contactanos en Juliaca: +51 936089095
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <div  class="container">

        <hr class="my-5">

        <!--Section: Main features & Quick Start-->
        <section >
        <!--Grid row-->
        <div class="row wow fadeIn">

            <!--Grid column-->
            <div class="col-lg-6 col-md-12 px-4">
            <h1 style="color:white;" class="display-4 font-weight-bold">PROGRAMA LECTURA VELÓZ</h1>
            <div class="card">
           
            <!--Card content-->
            <div class="card-body">
            @if(session()->has('message'))
                <div class="alert alert-success" role="alert">{{ session('message') }}</div>
            @endif

            @if(session()->has('messageerror'))
            <div class="alert alert-success" role="alert">Error al guardar datos</div>
            @endif
                <form  method="post" action="{{route('contact.send')}}">
                @csrf
                        <!-- Heading -->
                        <h3 class="dark-grey-text text-center">
                            <strong>Regístrate:</strong>
                        </h3>
                        <hr>

                        <div class="md-form">
                            <i class="fas fa-user prefix grey-text"></i>
                            <input type="text" name="nombre" id="form3" class="form-control">
                            <label for="form3">Nombre Completo</label>
                        </div>
                        <div class="md-form">
                            <i class="fas fa-home prefix grey-text"></i>
                            <input type="text" name="sede" id="form2" class="form-control">
                            <label for="form2">Lugar Donde Vive</label>
                        </div>
                        
                        <div class="md-form">
                            <i class="fas fa-phone prefix grey-text"></i>
                            <input type="number" name="celular" id="form2" class="form-control">
                            <label for="form2">Número de Celular</label>
                        </div>
                        <div class="md-form">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="text" name="email" id="form2" class="form-control">
                            <label for="form2">Correo Electronico</label>
                        </div>
                        <div class="form-group invisible">
                            <input type="text" class="form-control" name="programa" value="Lectura Veloz" >
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-indigo">Enviar Datos</button>
                        </div>
                        </form>
                    </div>
                </div>

            <div style="height:30px"></div>

            </div>
            <!--/Grid column-->

            <!--Grid column-->
            <div style="color:white;" class="col-lg-6 col-md-12">
            <h3>¿Tiénes mucho que leer, pero no te alcanza el tiempo?</h3> 
            <p>Incrementa tu velocidad al máximo con las estrategias del programa de Lectura Veloz. 
                        Que te permitirá:</p>
                   
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://youtube.com/embed/TNHY2zOsrYk" allowfullscreen></iframe>
            </div>
                <p class="mb-4 d-none d-md-block">
                    <p>- Acelerar el trabajo de lectura.</p> 
                    <p>- Facilitar el proceso de comprensión.</p>
                    <p>- E incorporar inmediatamente los conocimientos.</p>
                </p>

                <a target="_blank" href="https://www.youtube.com/channel/UCf59FngOA3kbUaakjqHPyog" class="btn btn-indigo btn-lg">Visita Nuestro Canal
                <i class="fas fa-graduation-cap ml-2"></i>
                </a>
                
            </div>
            
            <!--/Grid column-->

        </div>
        <!--/Grid row-->

        </section>
        <!--Section: Main features & Quick Start-->

<hr class="mb-5">

</div>

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->

  <!--Main layout-->
  <main>
    <div  class="container">

      <hr class="my-5">

      <!--Section: Main features & Quick Start-->
      <section >

      <!--Carousel Wrapper-->
<div id="video-carousel-example" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#video-carousel-example" data-slide-to="0" class="active"></li>
    <li data-target="#video-carousel-example" data-slide-to="1"></li>
    <li data-target="#video-carousel-example" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="item embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UvNcestjPFs" allowfullscreen></iframe>
        </div>
    </div>
    <div class="carousel-item">
    <div class="item embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PFiMZ_68O9E" allowfullscreen></iframe>
        </div>
    </div>
    <div class="carousel-item">
    <div class="item embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8YvBcsas2BY" allowfullscreen></iframe>
        </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#video-carousel-example" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#video-carousel-example" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--Carousel Wrapper-->     
      </section>
      <!--Section: Main features & Quick Start-->

      <hr class="mb-5">

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">
  <br>
        <div class="row">
          <div class="col-md-4">
          <br>
            <h3>¡SÍGUENOS AHORA!</h3>
                <!-- Social icons -->
                <div class="pb-4">
                <a href="https://www.facebook.com/mdbootstrap" target="_blank">
                    <i class="fab fa-facebook-f mr-3"></i>
                </a>

                <a href="https://twitter.com/MDBootstrap" target="_blank">
                    <i class="fab fa-twitter mr-3"></i>
                </a>

                <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
                    <i class="fab fa-youtube mr-3"></i>
                </a>

                <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                    <i class="fab fa-google-plus-g mr-3"></i>
                </a>

                <a href="https://dribbble.com/mdbootstrap" target="_blank">
                    <i class="fab fa-dribbble mr-3"></i>
                </a>

                <a href="https://pinterest.com/mdbootstrap" target="_blank">
                    <i class="fab fa-pinterest mr-3"></i>
                </a>

                <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
                    <i class="fab fa-github mr-3"></i>
                </a>

                <a href="http://codepen.io/mdbootstrap/" target="_blank">
                    <i class="fab fa-codepen mr-3"></i>
                </a>
                </div>
                <!-- Social icons -->

           
          </div>

          <br>

          <div class="col-md-3 ml-auto pull-left">
            <h3>UBICACIÓN</h3>
            <ul class="list-unstyled footer-links">
            <p>Una Institución de Terapias y Técnicas Avanzadas en Lectura Integral</p>
            <p>Puno: Av. Simon Bolivar #459 (rejas celeste) referencia esquina de Av. Simon Bolivar con Jiron los Incas<</p>
            <p>Juliaca: Urb. Villa Mercedes D – 7 RINCONADA (2 Cuadras arriba de la piscina</p>
              <li><a href="#"></a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <h3>CONTACTO</h3>
            <p><a href="#">Central telefónica Puno: +(051) 638618</a></p>
            <p><a href="#">Central telefónica Juliaca: +(051) 634889</a></p>
            <p>E-mail: italipuno@gmail.com</p>
            <p>E-mail: italijuliaca@gmail.com</p>
            
          </div>

        </div>
    <hr class="my-4">
    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>

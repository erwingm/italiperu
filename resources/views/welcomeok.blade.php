<!DOCTYPE html>

<html lang="es">



<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Landing page del instituto ITALI">

    <meta name="keywords" content="landing,startup,flat">

    <meta name="author" content="EGM">



    <title>Itali - Instituto Itali</title>



    <!-- // PLUGINS (css files) // -->

    <link href="{{asset('assets/js/plugins/bootsnav_files/skins/color.css')}}" rel="stylesheet">

    <link href="{{asset('assets/js/plugins/bootsnav_files/css/animate.css')}}" rel="stylesheet">

    <link href="{{asset('assets/js/plugins/bootsnav_files/css/bootsnav.css')}}" rel="stylesheet">

    <link href="{{asset('assets/js/plugins/bootsnav_files/css/overwrite.css')}}" rel="stylesheet">

    <link href="{{asset('assets/js/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">

    <link href="{{asset('assets/js/plugins/owl-carousel/owl.theme.css')}}" rel="stylesheet">

    <link href="{{asset('assets/js/plugins/owl-carousel/owl.transitions.css')}}" rel="stylesheet">

    <link href="{{asset('assets/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/magnific-popup.css')}}" rel="stylesheet">

    <!--// ICONS //-->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--// BOOTSTRAP & Main //-->

    <link href="{{asset('assets/bootstrap-3.3.7/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

</head>



<body>



    <!--======================================== 

           Preloader

    ========================================-->

    <div class="page-preloader">

        <div class="spinner">

            <div class="rect1"></div>

            <div class="rect2"></div>

            <div class="rect3"></div>

            <div class="rect4"></div>

            <div class="rect5"></div>

        </div>

    </div>

    <!--======================================== 

           Header

    ========================================-->



    <!--//** Navigation**//-->

    <nav class="navbar navbar-default navbar-fixed white no-background bootsnav navbar-scrollspy" data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">



        <div class="container">

            <!-- Start Header Navigation -->

            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">

                    <i class="fa fa-bars"></i>

                </button>

                <a class="navbar-brand" href="#brand">

                    <img style ="width: 120px; height: 110px;" src="{{asset('assets/img/italiperu.png')}}" class="logo" alt="logo">

                </a>

            </div>

            <!-- End Header Navigation -->



            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="navbar-menu">

                <ul class="nav navbar-nav navbar-right">

                    <li class="button-holder">

                        <button type="button" class="btn btn-blue navbar-btn" data-toggle="modal" data-target="#SignIn">Contactanos en Puno: +51 945317511 | Contactanos en Juliaca: +51 936089095 </button>

                    </li>

                </ul>

            </div>

                <!-- <ul class="nav navbar-nav navbar-right">

                    <li class="button-holder">

                        <button type="button" class="btn btn-blue navbar-btn "  data-target="#SignIn">+ 950424232</button>

                    </li>

                </ul> -->

           

            <!-- /.navbar-collapse -->

        </div>

    </nav>



    <!--//** Banner**//-->

    <section id="home">

        <div class="container">

            <div class="row">

                <!-- Introduction -->
                <h1 align="center">PROGRAMA LECTURA VELOZ</h1>
                <div style="padding:1px"class="col-md-6 caption">

                    <!-- <h1>PROGRAMA LECTURA VELOZ</h1> -->

                    <h2>

                    ¿Tiénes mucho que leer, 

                            <span class="animated-text"></span>

                            <span class="typed-cursor"></span>

                        </h2>
                    <p>Incrementa tu velocidad al máximo con las estrategias del programa de Lectura Veloz. 
                        Que te permitirá:</p>
                    <p>- Acelerar el trabajo de lectura.</p> 
                    <p>- Facilitar el proceso de comprensión.</p>
                    <p>- E incorporar inmediatamente los conocimientos.</p>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UvNcestjPFs" allowfullscreen></iframe>
                      </div>
                      
                    <a class="btn btn-blue" href="https://institutoitaliperu.com/" target="_blank">
                    <i class="material-icons">play_circle_filled</i>Visita nuestra Web</a>
                  
                    <a class="btn btn-blue" href="https://www.youtube.com/channel/UCf59FngOA3kbUaakjqHPyog" target="_blank">

                        <i class="material-icons">play_circle_filled</i>Visita Nuestro Canal

                    </a>

                </div>
                <br>

                <!-- Sign Up -->

                <div class="col-md-5 col-md-offset-1">
                    @if(session()->has('message'))
                            <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                    @endif

                    @if(session()->has('messageerror'))
                    <div class="alert alert-success" role="alert">Erro al guardar datos</div>
                    @endif

                    <form class="signup-form" method="post" action="{{route('contact.send')}}">
                    @csrf
                        <h2 class="text-center">Regístrate</h2>

                        <hr>

                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="Nombre Completo" name="nombre" required="required">

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="sede" placeholder="Lugar donde vive" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Ingrese su E-mail" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="celular" placeholder="Número de Celular " required="required">
                        </div>
                        <div class="form-group invisible">
                            <input type="text" class="form-control" name="programa" value="Lectura Veloz" >
                        </div>
                        <div class="form-group text-center">

                            <button type="submit" class="btn btn-blue btn-block">Enviar Datos</button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </section>



    <!--======================================== 

           About Us

    ========================================-->


<!-- 
    <section id="about" class="section-padding">

        <div class="container">

            <h2>About Us</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, optio.</p>

            <div class="row">

                <div class="col-md-4">

                    <div class="icon-box">

                        <i class="material-icons">favorite</i>

                        <h4>Simple To Use</h4>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas minima, dicta quaerat sit cupiditate eum mollitia.</p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="icon-box">

                        <i class="material-icons">flash_on</i>

                        <h4>Powerful</h4>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas minima, dicta quaerat sit cupiditate eum mollitia.</p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="icon-box">

                        <i class="material-icons">settings</i>

                        <h4>Easy To Customize</h4>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas minima, dicta quaerat sit cupiditate eum mollitia.</p>

                    </div>

                </div>

            </div>

        </div>

    </section> -->


    <!--======================================== 

           Clients

    ========================================-->

    <section id="clients" class="section-padding">

        <div class="container">

            <div class="row">

            <h2>Testimonios</h2>
            <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <div class="item embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UvNcestjPFs" allowfullscreen></iframe>
        </div>
        <div class="carousel-caption">
          <h3>Testimonios</h3>
          <p>Programa PELA</p>
        </div>
      </div>

      <div class="item">
        <div class="item embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PFiMZ_68O9E" allowfullscreen></iframe>
        </div>
        <div class="carousel-caption">
          <h3>Testimonios</h3>
          <p>Hernán Camacho</p>
        </div>
      </div>
    
      <div class="item">
        <div class="item embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8YvBcsas2BY" allowfullscreen></iframe>
        </div>
        <div class="carousel-caption">
          <h3>Testimonios</h3>
          <p>Ángel Chavéz</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


            </div>

        </div>

    </section>


    <!--======================================== 

           Footer

    ========================================-->



    <footer class="footer-section bg-white">
      <div class="container">
        <div class="row">
        <img style="width: 100px; height: 100px;" src="assets/img/itali2020.png" class="img-responsive center-block" alt="logo">
          <div class="col-md-4">
          <br>
            <h3>¡SÍGUENOS AHORA!</h3>
            <ul class="liste-unstyled pull-left">

                        <li><a href="#facebook"><i class="fa fa-facebook"></i></a></li>

                        <li><a href="#twitter"><i class="fa fa-twitter"></i></a></li>

                        <li><a href="#linkedin"><i class="fa fa-linkedin"></i></a></li>

                        <li><a href="#instagram"><i class="fa fa-instagram"></i></a></li>

                    </ul>
           
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


        

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="{{asset('assets/bootstrap-3.3.7/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('assets/js/plugins/owl-carousel/owl.carousel.min.js')}}"></script>

    <script src="{{asset('assets/js/plugins/bootsnav_files/js/bootsnav.js')}}"></script>

    <script src="{{asset('assets/js/plugins/typed.js-master/typed.js-master/dist/typed.min.js')}}"></script>

    <!-- <script src="https://maps.googleapis.com/maps/api/js"></script> -->

    <script src="{{asset('assets/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/jquery.magnific-popup.js')}}"></script>

    <script src="{{asset('assets/js/main.js')}}"></script>

</body>



</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="reactium">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Centro Educativo CARBA - @yield('title')</title>

  {{-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> --}}

  <link href="https://fonts.googleapis.com/css?family=Baloo|Open+Sans:400,600,700" rel="stylesheet"> 
    <!--
    CSS 
    ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">              
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">     
    <link rel="stylesheet" href="css/jquery-ui.css">      
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <header id="header" id="home">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
              <ul>
              <li><a href="https://www.facebook.com/colegiocarba"><i class="fab fa-facebook-square" target="_blank"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
              {{-- <li><a href="#"><i class="fa fa-behance"></i></a></li> --}}
              </ul>     
            </div>
            <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
              <a href="tel:+525959534445"><span class="lnr lnr-phone-handset"></span> <span class="text">+52 (595) 95 3 44 45</span></a>
              <a href="mailto:atencion@carba.edu.mx"><span class="lnr lnr-envelope"></span> <span class="text">atencion@carba.edu.mx</span></a>     
            </div>
          </div>
        </div>
    </div>
      <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="{{ url('/') }}"><img src="img/carba-logo.png" width="147" height="30" alt="Logotipo CARBA" title="Sólo con disciplina lo logras" /></a>
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li class="nav-listItem"><a class="bg-pink text-white nav-link" href="{{ url('/') }}">Inicio</a></li>
              <li class="nav-listItem"><a class="bg-blue text-white nav-link" href="{{ url('/nosotros') }}">Nosotros</a></li>
              <li class="nav-listItem"><a class="bg-orange text-white nav-link" href="{{ url('/preescolar') }}">Preescolar</a></li>
              <li class="nav-listItem"><a class="bg-purple-carba text-white nav-link" href="{{ url('/primaria') }}">Primaria</a></li>
              <li class="nav-listItem"><a class="bg-red text-white nav-link" href="{{ url('/inscripciones') }}">Inscripciones</a></li>
              {{-- <li><a href="{{ url('/cursos') }}">Cursos</a></li>
              <li><a href="{{ url('/eventos') }}">Eventos</a></li>
              <li><a href="{{ url('/instalaciones') }}">Instalaciones</a></li> --}}
              {{-- <li class="menu-has-children"><a href="">Noticias</a>
                <ul>
                  <li><a href="blog-home.html">Blog Home</a></li>
                  <li><a href="blog-single.html">Blog Single</a></li>
                </ul>
              </li> --}} 
              {{-- <li class="menu-has-children"><a href="">Talleres</a>
                <ul>
                    <li><a href="course-details.html">Sabatinos</a></li>   
                    <li><a href="event-details.html">De tareas</a></li>   
                    <li><a href="elements.html">Elementos</a></li>
                  <li class="menu-has-children"><a href="">Nivel 2 </a>
                    <ul>
                      <li><a href="#">Item Uno</a></li>
                      <li><a href="#">Item Dos</a></li>
                    </ul>
                  </li>                             
                </ul>
              </li> --}}                                                     
              <li class="nav-listItem"><a class="bg-green-organic nav-link" href="{{ url('/contacto')}}">Contacto</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->            
        </div>
      </div>
    </header><!-- #header -->

    @yield('content')
         
    <!-- start footer Area -->    
    <footer class="footer-area section-gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h4>Concursos</h4>
              <ul>
                <li><a href="https://www.amc.edu.mx/amc/index.php?option=com_content&view=article&id=83&Itemid=80" target="_blank">Cótorra matemática</a></li>
                {{-- <li><a href="#">Escuela en casa</a></li>
                <li><a href="#">Valores en la familia</a></li>
                <li><a href="#">Dieta infantil</a></li> --}}
              </ul>               
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h4>Reglamento</h4>
              <ul>
                <li><a href="#">Reglamento interno</a></li>
                {{-- <li><a href="#">Políticas de marca</a></li>
                <li><a href="#">Relaciones comerciales</a></li>
                <li><a href="#">Términos de servicio</a></li> --}}
              </ul>               
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h4>Comunicados</h4>
              <ul>
                <li><a href="pdfs/aviso-de-privacidad.pdf" target="_blank">Aviso de Privacidad</a></li>
                {{-- <li><a href="#">Brand Assets</a></li>
                <li><a href="#">Investor Relations</a></li>
                <li><a href="#">Terms of Service</a></li> --}}
              </ul>               
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h4>Recursos</h4>
              <ul>
                <li><a href="#">Guías escolares</a></li>
                {{-- <li><a href="#">Investigación</a></li>
                <li><a href="#">Expertos</a></li>
                <li><a href="#">Agencia digital</a></li> --}}
              </ul>               
            </div>
          </div>                                    
          <div class="col-lg-4  col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h4>Boletín</h4>
              <p>Entérate de lo nuevo</p>
              <div class="" id="mc_embed_signup">
                 <form action="/" method="POST">
                  @csrf
                  <div class="input-group">
                    <input type="email" class="form-control" name="email" placeholder="Escribe tu correo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required>
                    <div class="input-group-btn">
                      <button class="btn btn-default" type="submit">
                        <span class="lnr lnr-arrow-right"></span>
                      </button>    
                    </div>
                      <div class="info"></div>  
                  </div>
                </form> 
              </div>
            </div>
          </div>                      
        </div>
        <div class="footer-bottom row align-items-center justify-content-between">
          <p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Reactium can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; <script>document.write(new Date().getFullYear());</script> Centro Educativo CARBA <i class="fa fa-code" aria-hidden="true"></i> made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://reactium.com" target="_blank">Reactium</a>
<!-- Link back to Reactium can't be removed. Template is licensed under CC BY 3.0. --></p>
          <div class="col-lg-6 col-sm-12 footer-social">
            <a href="https://www.facebook.com/colegiocarba"><i class="fa fa-facebook" target="_blank"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            {{-- <a href="#"><i class="fa fa-behance"></i></a> --}}
          </div>
        </div>            
      </div>
    </footer> 
    <!-- End footer Area -->
    <script src="https://kit.fontawesome.com/314c16c060.js"></script>
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>      
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="js/easing.min.js"></script>      
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script> 
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script> 
    <script src="js/jquery.tabs.min.js"></script>           
    <script src="js/jquery.nice-select.min.js"></script>  
    <script src="js/owl.carousel.min.js"></script>                  
    <script src="js/mail-script.js"></script> 
    <script src="js/main.js"></script>  
  </body>
</html>
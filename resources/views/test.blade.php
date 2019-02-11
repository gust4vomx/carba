<!DOCTYPE html>
<html lang="zxx" class="no-js">
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
  <title>Centro Educativo CARBA</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
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
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              {{-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li> --}}
              {{-- <li><a href="#"><i class="fa fa-behance"></i></a></li> --}}
              </ul>     
            </div>
            <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
              <a href="tel:+525959535808"><span class="lnr lnr-phone-handset"></span> <span class="text">+52 (595) 95 3 5808</span></a>
              <a href="mailto:tucolegio@carba.edu.mx"><span class="lnr lnr-envelope"></span> <span class="text">tucolegio@carba.edu.mx</span></a>     
            </div>
          </div>                  
        </div>
    </div>
      <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="{{ url('/test') }}"><img src="img/logo.png" alt="" title="" /></a>
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li><a href="#">Home</a></li>
              <li><a href="#">Nosotros</a></li>
              <li><a href="#">Cursos</a></li>
              <li><a href="#">Eventos</a></li>
              <li><a href="#">Galería</a></li>
              {{-- <li class="menu-has-children"><a href="">Noticias</a>
                <ul>
                  <li><a href="blog-home.html">Blog Home</a></li>
                  <li><a href="blog-single.html">Blog Single</a></li>
                </ul>
              </li> --}} 
              <li class="menu-has-children"><a href="">Secciones</a>
                <ul>
                    <li><a href="course-details.html">Detalles curso</a></li>   
                    <li><a href="event-details.html">Detalles Eventos</a></li>   
                    <li><a href="elements.html">Elementos</a></li>
                  <li class="menu-has-children"><a href="">Nivel 2 </a>
                    <ul>
                      <li><a href="#">Item Uno</a></li>
                      <li><a href="#">Item Dos</a></li>
                    </ul>
                  </li>                             
                </ul>
              </li>                                                     
              <li><a href="contact.html">Contacto</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->            
        </div>
      </div>
    </header><!-- #header -->

    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
      <div class="overlay overlay-bg"></div>  
      <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-between">
          <div class="banner-content col-lg-9 col-md-12">
            <h1 class="text-uppercase">
              La mejor educación
              para un mundo mejor      
            </h1>
            <p class="pt-10 pb-10">
              En la historia de la educación moderna, no hay probablemente un salto más grande hacia adelante que la construcción y el lanzamiento del conocimiento humano.
            </p>
            <a href="#" class="primary-btn text-uppercase">Agenda una cita</a>
          </div>                    
        </div>
      </div>          
    </section>
    <!-- End banner Area -->

    <!-- Start feature Area -->
    <section class="feature-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="single-feature">
              <div class="title">
                <h4>Educación continua</h4>
              </div>
              <div class="desc-wrap">
                <p>
                  Domina nuevas herramientas como padre de familia y haz crecer a tu hijo. ¡Que esperas!
                </p>
                <a href="#">Unirse ahora</a>                  
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="single-feature">
              <div class="title">
                <h4>Aprendizaje escolar</h4>
              </div>
              <div class="desc-wrap">
                <p>
                  Más de 10 años como centro educativo
                  comprometido con la formación académica.
                </p>
                <a href="#">Unirse ahora</a>                  
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="single-feature">
              <div class="title">
                <h4>¡Mucho más!</h4>
              </div>
              <div class="desc-wrap">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae hic fuga, consequuntur harum necessitatibus quas.
                </p>
                <a href="#">Unirse ahora</a>                  
              </div>
            </div>
          </div>                        
        </div>
      </div>  
    </section>
    <!-- End feature Area -->
        
    <!-- Start popular-course Area -->
    <section class="popular-course-area section-gap">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="menu-content pb-70 col-lg-8">
            <div class="title text-center">
              <h1 class="mb-10">Nuestros cursos más demandados</h1>
              <p>Cambiar y crecer para los tuyos esta en ti.</p>
            </div>
          </div>
        </div>            
        <div class="row">
          <div class="active-popular-carusel">
            <div class="single-popular-carusel">
              <div class="thumb-wrap relative">
                <div class="thumb relative">
                  <div class="overlay overlay-bg"></div>  
                  <img class="img-fluid" src="img/p1.jpg" alt="">
                </div>
                <div class="meta d-flex justify-content-between">
                  <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                  <h4>$150</h4>
                </div>                  
              </div>
              <div class="details">
                <a href="#">
                  <h4>
                    Aprende juegos
                  </h4>
                </a>
                <p>
                  When television was young, there was a hugely popular show based on the still popular fictional characte                    
                </p>
              </div>
            </div>  
            <div class="single-popular-carusel">
              <div class="thumb-wrap relative">
                <div class="thumb relative">
                  <div class="overlay overlay-bg"></div>  
                  <img class="img-fluid" src="img/p2.jpg" alt="">
                </div>
                <div class="meta d-flex justify-content-between">
                  <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                  <h4>$150</h4>
                </div>                  
              </div>
              <div class="details">
                <a href="#">
                  <h4>
                    Colores aplicados
                  </h4>
                </a>
                <p>
                  When television was young, there was a hugely popular show based on the still popular fictional characte                    
                </p>
              </div>
            </div>  
            <div class="single-popular-carusel">
              <div class="thumb-wrap relative">
                <div class="thumb relative">
                  <div class="overlay overlay-bg"></div>  
                  <img class="img-fluid" src="img/p3.jpg" alt="">
                </div>
                <div class="meta d-flex justify-content-between">
                  <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                  <h4>$150</h4>
                </div>                  
              </div>
              <div class="details">
                <a href="#">
                  <h4>
                    Mecánica de aprendizaje
                  </h4>
                </a>
                <p>
                  When television was young, there was a hugely popular show based on the still popular fictional characte                    
                </p>
              </div>
            </div>  
            <div class="single-popular-carusel">
              <div class="thumb-wrap relative">
                <div class="thumb relative">
                  <div class="overlay overlay-bg"></div>  
                  <img class="img-fluid" src="img/p4.jpg" alt="">
                </div>
                <div class="meta d-flex justify-content-between">
                  <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                  <h4>$150</h4>
                </div>                  
              </div>
              <div class="details">
                <a href="#">
                  <h4>
                    Pedagogía
                  </h4>
                </a>
                <p>
                  When television was young, there was a hugely popular show based on the still popular fictional characte                    
                </p>
              </div>
            </div>
            <div class="single-popular-carusel">
              <div class="thumb-wrap relative">
                <div class="thumb relative">
                  <div class="overlay overlay-bg"></div>  
                  <img class="img-fluid" src="img/p1.jpg" alt="">
                </div>
                <div class="meta d-flex justify-content-between">
                  <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                  <h4>$150</h4>
                </div>                  
              </div>
              <div class="details">
                <a href="#">
                  <h4>
                    Domina Matemáticas
                  </h4>
                </a>
                <p>
                  When television was young, there was a hugely popular show based on the still popular fictional characte                    
                </p>
              </div>
            </div>  
            <div class="single-popular-carusel">
              <div class="thumb-wrap relative">
                <div class="thumb relative">
                  <div class="overlay overlay-bg"></div>  
                  <img class="img-fluid" src="img/p2.jpg" alt="">
                </div>
                <div class="meta d-flex justify-content-between">
                  <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                  <h4>$150</h4>
                </div>                  
              </div>
              <div class="details">
                <a href="#">
                  <h4>
                    Baile y danza
                  </h4>
                </a>
                <p>
                  When television was young, there was a hugely popular show based on the still popular fictional characte                    
                </p>
              </div>
            </div>  
            <div class="single-popular-carusel">
              <div class="thumb-wrap relative">
                <div class="thumb relative">
                  <div class="overlay overlay-bg"></div>  
                  <img class="img-fluid" src="img/p3.jpg" alt="">
                </div>
                <div class="meta d-flex justify-content-between">
                  <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                  <h4>$150</h4>
                </div>                  
              </div>
              <div class="details">
                <a href="#">
                  <h4>
                    Teatro y arte
                  </h4>
                </a>
                <p>
                  When television was young, there was a hugely popular show based on the still popular fictional characte                    
                </p>
              </div>
            </div>  
            <div class="single-popular-carusel">
              <div class="thumb-wrap relative">
                <div class="thumb relative">
                  <div class="overlay overlay-bg"></div>  
                  <img class="img-fluid" src="img/p4.jpg" alt="">
                </div>
                <div class="meta d-flex justify-content-between">
                  <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                  <h4>$150</h4>
                </div>                  
              </div>
              <div class="details">
                <a href="#">
                  <h4>
                    Música
                  </h4>
                </a>
                <p>
                  When television was young, there was a hugely popular show based on the still popular fictional characte                    
                </p>
              </div>
            </div>              
          </div>
        </div>
      </div>  
    </section>
    <!-- End popular-course Area -->
    

    <!-- Start search-course Area -->
    <section class="search-course-area relative">
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-6 col-md-6 search-course-left">
            <h1 class="text-white">
              La pre-inscripciones <br>
              han llegado!
            </h1>
            <p>
              No esperes a que los tiempos te coman, aprovecha nuestras promociones para el siguiente ciclo escolar.
            </p>
            <div class="row details-content">
              <div class="col single-detials">
                <span class="lnr lnr-graduation-hat"></span>
                <a href="#"><h4>Profesores calificados</h4></a>   
                <p>
                  Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                </p>            
              </div>
              <div class="col single-detials">
                <span class="lnr lnr-license"></span>
                <a href="#"><h4>Certificaciones</h4></a>    
                <p>
                  Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                </p>            
              </div>                
            </div>
          </div>
          <div class="col-lg-4 col-md-6 search-course-right section-gap">
            <form class="form-wrap" action="#">
              <h4 class="text-white pb-20 text-center mb-30">Búsqueda de cursos disponibles</h4>   
              <input type="text" class="form-control" name="name" placeholder="Tu nombre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" >
              <input type="phone" class="form-control" name="phone" placeholder="Número telefónico" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Phone Number'" >
              <input type="email" class="form-control" name="email" placeholder="Correo electrónico" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" >
              <div class="form-select" id="service-select">
                <select>
                  <option datd-display="">Elige un curso</option>
                  <option value="1">Curso Uno</option>
                  <option value="2">Curso Dos</option>
                  <option value="3">Curso Tres</option>
                  <option value="4">Curso Cuatro</option>
                </select>
              </div>                  
              <button class="primary-btn text-uppercase">Enviar</button>
            </form>
          </div>
        </div>
      </div>  
    </section>
    <!-- End search-course Area -->
    
  
    <!-- Start upcoming-event Area -->
    <section class="upcoming-event-area section-gap">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="menu-content pb-70 col-lg-8">
            <div class="title text-center">
              <h1 class="mb-10">Eventos próximos del Instituto</h1>
              <p>If you are a serious astronomy fanatic like a lot of us</p>
            </div>
          </div>
        </div>                
        <div class="row">
          <div class="active-upcoming-event-carusel">
            <div class="single-carusel row align-items-center">
              <div class="col-12 col-md-6 thumb">
                <img class="img-fluid" src="img/e1.jpg" alt="">
              </div>
              <div class="detials col-12 col-md-6">
                <p>25th February, 2018</p>
                <a href="#"><h4>El universo a través de la educación</h4></a>
                <p>
                  For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                </p>
              </div>
            </div>
            <div class="single-carusel row align-items-center">
              <div class="col-12 col-md-6 thumb">
                <img class="img-fluid" src="img/e2.jpg" alt="">
              </div>
              <div class="detials col-12 col-md-6">
                <p>25th February, 2018</p>
                <a href="#"><h4>El universo a través de la educación</h4></a>
                <p>
                  For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                </p>
              </div>
            </div>  
            <div class="single-carusel row align-items-center">
              <div class="col-12 col-md-6 thumb">
                <img class="img-fluid" src="img/e1.jpg" alt="">
              </div>
              <div class="detials col-12 col-md-6">
                <p>25th February, 2018</p>
                <a href="#"><h4>El universo a través de la educación</h4></a>
                <p>
                  For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                </p>
              </div>
            </div>  
            <div class="single-carusel row align-items-center">
              <div class="col-12 col-md-6 thumb">
                <img class="img-fluid" src="img/e1.jpg" alt="">
              </div>
              <div class="detials col-12 col-md-6">
                <p>25th February, 2018</p>
                <a href="#"><h4>El universo a través de la educación</h4></a>
                <p>
                  For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                </p>
              </div>
            </div>
            <div class="single-carusel row align-items-center">
              <div class="col-12 col-md-6 thumb">
                <img class="img-fluid" src="img/e2.jpg" alt="">
              </div>
              <div class="detials col-12 col-md-6">
                <p>25th February, 2018</p>
                <a href="#"><h4>El universo a través de la educación</h4></a>
                <p>
                  For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                </p>
              </div>
            </div>  
            <div class="single-carusel row align-items-center">
              <div class="col-12 col-md-6 thumb">
                <img class="img-fluid" src="img/e1.jpg" alt="">
              </div>
              <div class="detials col-12 col-md-6">
                <p>25th February, 2018</p>
                <a href="#"><h4>El universo a través de la educación</h4></a>
                <p>
                  For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                </p>
              </div>
            </div>                                            
          </div>
        </div>
      </div>  
    </section>
    <!-- End upcoming-event Area -->
          
    <!-- Start review Area -->
    <section class="review-area section-gap relative">
      <div class="overlay overlay-bg"></div>
      <div class="container">       
        <div class="row">
          <div class="active-review-carusel">
            <div class="single-review item">
              <div class="title justify-content-start d-flex">
                <a href="#"><h4>Arantxa Gómez</h4></a>
                <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
              </div>
              <p>
                Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
              </p>
            </div>
            <div class="single-review item">
              <div class="title justify-content-start d-flex">
                <a href="#"><h4>Sandra Mendoza</h4></a>
                <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
              </div>
              <p>
                Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
              </p>
            </div>
            <div class="single-review item">
              <div class="title justify-content-start d-flex">
                <a href="#"><h4>Arantxa Gómez</h4></a>
                <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
              </div>
              <p>
                Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
              </p>
            </div>
            <div class="single-review item">
              <div class="title justify-content-start d-flex">
                <a href="#"><h4>Sandra Mendoza</h4></a>
                <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
              </div>
              <p>
                Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
              </p>
            </div>  
            <div class="single-review item">
              <div class="title justify-content-start d-flex">
                <a href="#"><h4>Arantxa Gómez</h4></a>
                <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
              </div>
              <p>
                Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
              </p>
            </div>
            <div class="single-review item">
              <div class="title justify-content-start d-flex">
                <a href="#"><h4>Sandra Mendoza</h4></a>
                <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
              </div>
              <p>
                Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
              </p>
            </div>
            <div class="single-review item">
              <img src="img/r1.png" alt="">
              <div class="title justify-content-start d-flex">
                <a href="#"><h4>Arantxa Gómez</h4></a>
                <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
              </div>
              <p>
                Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
              </p>
            </div>
            <div class="single-review item">
              <div class="title justify-content-start d-flex">
                <a href="#"><h4>Sandra Mendoza</h4></a>
                <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
              </div>
              <p>
                Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
              </p>
            </div>                                                        
          </div>
        </div>
      </div>  
    </section>
    <!-- End review Area -->  
    
    <!-- Start cta-one Area -->
    <section class="cta-one-area relative section-gap">
      <div class="container">
        <div class="overlay overlay-bg"></div>
        <div class="row justify-content-center">
          <div class="wrap">
            <h1 class="text-white">Asociado CARBA</h1>
            <p>
              Cada ciclo escolar estamos en busca de nuevos talentos de valor, está es la oportunidad para que formes parte de nuestro equipo de trabajo.
            </p>
            <a class="primary-btn wh" href="#">Solicitud de forma</a>               
          </div>          
        </div>
      </div>  
    </section>
    <!-- End cta-one Area -->

    <!-- Start blog Area -->
    <section class="blog-area section-gap" id="blog">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="menu-content pb-70 col-lg-8">
            <div class="title text-center">
              <h1 class="mb-10">Últimas novedades</h1>
              <p>In the history of modern astronomy there is.</p>
            </div>
          </div>
        </div>          
        <div class="row">
          <div class="col-lg-3 col-md-6 single-blog">
            <div class="thumb">
              <img class="img-fluid" src="img/b1.jpg" alt="">               
            </div>
            <p class="meta">25 April, 2018  |  By <a href="#">Mark Wiens</a></p>
            <a href="blog-single.html">
              <h5>Addiction When Gambling Becomes A Problem</h5>
            </a>
            <p>
              Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their.
            </p>
            <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Detalles</span><span class="lnr lnr-arrow-right"></span></a>    
          </div>
          <div class="col-lg-3 col-md-6 single-blog">
            <div class="thumb">
              <img class="img-fluid" src="img/b2.jpg" alt="">               
            </div>
            <p class="meta">25 April, 2018  |  By <a href="#">Mark Wiens</a></p>
            <a href="blog-single.html">
              <h5>Computer Hardware Desktops And Notebooks</h5>
            </a>
            <p>
              Ah, the technical interview. Nothing like it. Not only does it cause anxiety, but it causes anxiety for several different reasons. 
            </p>
            <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Detalles</span><span class="lnr lnr-arrow-right"></span></a>            
          </div>
          <div class="col-lg-3 col-md-6 single-blog">
            <div class="thumb">
              <img class="img-fluid" src="img/b3.jpg" alt="">               
            </div>
            <p class="meta">25 April, 2018  |  By <a href="#">Mark Wiens</a></p>
            <a href="blog-single.html">
              <h5>Make Myspace Your Best Designed Space</h5>
            </a>
            <p>
              Plantronics with its GN Netcom wireless headset creates the next generation of wireless headset and other products such as wireless.
            </p>
            <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Detalles</span><span class="lnr lnr-arrow-right"></span></a>                  
          </div>
          <div class="col-lg-3 col-md-6 single-blog">
            <div class="thumb">
              <img class="img-fluid" src="img/b4.jpg" alt="">               
            </div>
            <p class="meta">25 April, 2018  |  By <a href="#">Mark Wiens</a></p>
            <a href="blog-single.html">
              <h5>Video Games Playing With Imagination</h5>
            </a>
            <p>
              About 64% of all on-line teens say that do things online that they wouldn’t want their parents to know about.   11% of all adult internet 
            </p>
            <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Detalles</span><span class="lnr lnr-arrow-right"></span></a>              
          </div>              
        </div>
      </div>  
    </section>
    <!-- End blog Area -->      
    

    <!-- Start cta-two Area -->
    <section class="cta-two-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 cta-left">
            <h1>¿Quieres saber más?</h1>
          </div>
          <div class="col-lg-4 cta-right">
            <a class="primary-btn wh" href="#">Noticias recientes</a>
          </div>
        </div>
      </div>  
    </section>
    <!-- End cta-two Area -->
          
    <!-- start footer Area -->    
    <footer class="footer-area section-gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h4>Top Products</h4>
              <ul>
                <li><a href="#">¿Niños hiperáctivos?</a></li>
                <li><a href="#">Escuela en casa</a></li>
                <li><a href="#">Valores en la familia</a></li>
                <li><a href="#">Dieta infantil</a></li>
              </ul>               
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h4>Quick links</h4>
              <ul>
                <li><a href="#">Empleos</a></li>
                <li><a href="#">Políticas de marca</a></li>
                <li><a href="#">Relaciones comerciales</a></li>
                <li><a href="#">Términos de servicio</a></li>
              </ul>               
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h4>Features</h4>
              <ul>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Brand Assets</a></li>
                <li><a href="#">Investor Relations</a></li>
                <li><a href="#">Terms of Service</a></li>
              </ul>               
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h4>Resources</h4>
              <ul>
                <li><a href="#">Guías</a></li>
                <li><a href="#">Investigación</a></li>
                <li><a href="#">Expertos</a></li>
                <li><a href="#">Agencia digital</a></li>
              </ul>               
            </div>
          </div>                                    
          <div class="col-lg-4  col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h4>Boletín</h4>
              <p>Entérate de lo nuevo</p>
              <div class="" id="mc_embed_signup">
                 <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
                  <div class="input-group">
                    <input type="text" class="form-control" name="EMAIL" placeholder="Escribe tu correo electrónico" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Centro Educativo CARBA code made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://reactium.com" target="_blank">Reactium</a>
<!-- Link back to Reactium can't be removed. Template is licensed under CC BY 3.0. --></p>
          <div class="col-lg-6 col-sm-12 footer-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            {{-- <a href="#"><i class="fa fa-dribbble"></i></a> --}}
            {{-- <a href="#"><i class="fa fa-behance"></i></a> --}}
          </div>
        </div>            
      </div>
    </footer> 
    <!-- End footer Area -->  


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
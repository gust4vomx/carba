@extends('layouts.app')

@section('title', 'Bienvenidos')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
      <div class="overlay overlay-bg"></div>  
      <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-between">
          <div class="banner-content col-lg-9 col-md-12">
            <h1 class="title-hero text-uppercase">
              ¡Sólo con disciplina <br>lo logras!      
            </h1>
            <p class="pt-10 pb-10 p-white">
              El Centro Educativo CARBA te da la más cordial bienvenida, nos complace informarte que nuestro periodo de Inscripciones y Re-inscripciones ¡ha comenzado!
            </p>
            <a href="{{ url('/inscripciones') }}" class="primary-btn text-uppercase">Quiero informes</a>
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
                  Nos encantan los retos y generación tras generación renovamos cursos ¡Que esperas!
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
                  Un ambiente agradable con instalaciones de primer nivel y sobre todo ¡diversión! 
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
              <h1 class="title-hero mb-10">Elige un curso a tu medida</h1>
              <p>Estar a la vanguardia es indispensable, por eso aprovecha los cursos que tenemos para ti.</p>
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
                  <h4>$ 1,550 MXN*</h4>
                </div>                  
              </div>
              <div class="details">
                <a href="{{ url('/de-verano-carba') }}">
                  <h4>
                    De verano CARBA
                  </h4>
                </a>
                <p>
                  Reserva tu lugar con $ 1,000.00 MXN antes del 12 de Julio de 2019 y recibe una playera ¡totalmente gratis!
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
                  <p><span class="lnr lnr-users"></span> 30 <span class="lnr lnr-bubble"></span>10</p>
                  <h4>8 -17 años</h4>
                </div>                  
              </div>
              <div class="details">
                <a href="{{ url('/summer-camp-england-2019') }}">
                  <h4>
                    Summer Camp ENGLAND
                  </h4>
                </a>
                <p>
                  ¡Esta es tu oportunidad! Viaja con pagos en cómodas parcialidades y liquida el 30 de abril del 2019.
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
                  <p><span class="lnr lnr-users"></span> 40 <span class="lnr lnr-bubble"></span>15</p>
                  <h4>Sin costo</h4>
                </div>                  
              </div>
              <div class="details">
                <a href="{{ url('/regularizacion-de-ingles') }}">
                  <h4>
                    Regularización de Inglés
                  </h4>
                </a>
                <p>
                  Aprender inglés nunca fue tan fácil, domina las habilidades en las 4 áreas de este bonito idioma ¡Let's go!
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
                  <p><span class="lnr lnr-users"></span> 25 <span class="lnr lnr-bubble"></span>18</p>
                  <h4>Sin costo</h4>
                </div>                  
              </div>
              <div class="details">
                <a href="{{ url('/nivelacion-de-alumnos') }}">
                  <h4>
                    Nivelación de Alumnos
                  </h4>
                </a>
                <p>
                  Leer y escribir son las bases de la educación, este curso está pensado para los más pequeños. 
                </p>
              </div>
            </div>
            {{-- <div class="single-popular-carusel">
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
            </div> --}}              
          </div>
        </div>
      </div>  
    </section>
    <!-- End popular-course Area --> 

    <!-- Start search-course Area -->
    {{-- <section class="search-course-area relative">
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
    </section> --}}
    <!-- End search-course Area -->
    
    <!-- Start cta-one Area -->
    <section class="cta-one-area relative section-gap">
      <div class="container">
        <div class="overlay overlay-bg"></div>
        <div class="row justify-content-center">
          <div class="wrap">
            <h1 class="text-white title-hero">Ciclo escolar 2019 - 2020</h1>
            <p>
              Cada ciclo escolar queremos premiar tu confianza, está es la oportunidad para que formes parte de nuestra comunidad, ¡además tenemos promociones para ti!
            </p>
            <a class="primary-btn wh" href="{{ url('inscripciones')}}">Quiero inscribirme</a>
          </div>          
        </div>
      </div>  
    </section>
    <!-- End cta-one Area -->

    <!-- Start upcoming-event Area -->
    <section class="upcoming-event-area section-gap">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="menu-content pb-70 col-lg-8">
            <div class="title text-center">
              <h1 class="title-hero mb-10">Próximos eventos escolares</h1>
              <p>Disfruta de un excelente ambiente y conoce más sobre nuestro alumnado.</p>
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
                <p>26 de Octubre, 2018</p>
                <a href="#"><h4>Halloween</h4></a>
                <p>
                  La noche más terrorífica del año está más cerca que nunca. Este 26 de Octubre viene cargado de dulce o truco pero sobre todo de mucho... ¡muchísimo miedo!
                </p>
              </div>
            </div>
            <div class="single-carusel row align-items-center">
              <div class="col-12 col-md-6 thumb">
                <img class="img-fluid" src="img/e2.jpg" alt="">
              </div>
              <div class="detials col-12 col-md-6">
                <p>14 de Diciembre, 2018</p>
                <a href="#"><h4>Festival Navideño</h4></a>
                <p>
                  Navidad a la vuelta de la esquina, ¿y tú que esperas? el momento de disfrutar con los tuyos en esta víspera de emociones y llena de sentimientos ha llegado.
                </p>
              </div>
            </div>  
            <div class="single-carusel row align-items-center">
              <div class="col-12 col-md-6 thumb">
                <img class="img-fluid" src="img/e1.jpg" alt="">
              </div>
              <div class="detials col-12 col-md-6">
                <p>20 de Febrero, 2019</p>
                <a href="#"><h4>Inscríbete ahora</h4></a>
                <p>
                  Para este ciclo escolar 2019 - 2020 aparta tu lugar antes del 22 de Marzo con un anticipo de $ 4,000.00 MXN y recibe nuestro fabuloso Kit de estudios. 
                </p>
              </div>
            </div>  
            <div class="single-carusel row align-items-center">
              <div class="col-12 col-md-6 thumb">
                <img class="img-fluid" src="img/e1.jpg" alt="">
              </div>
              <div class="detials col-12 col-md-6">
                <p>16 de Abril, 2019</p>
                <a href="#"><h4>Certificaciones Cambridge</h4></a>
                <p>
                  Abril es el mes de las ¡certificaciones! todo nuestro alumnado a través de esta evaluación internacional respaldan sus conocimientos en el idioma inglés.
                </p>
              </div>
            </div>
            <div class="single-carusel row align-items-center">
              <div class="col-12 col-md-6 thumb">
                <img class="img-fluid" src="img/e2.jpg" alt="">
              </div>
              <div class="detials col-12 col-md-6">
                <p>30 de Abril, 2019</p>
                <a href="#"><h4>Día del niño</h4></a>
                <p>
                  Celebrar el día del niño es uno de los eventos más esperados del año, esta fecha nos llena de mucha alegría ¡No te lo puedes perder! habrá sorpresas y mucho más.
                </p>
              </div>
            </div>  
            <div class="single-carusel row align-items-center">
              <div class="col-12 col-md-6 thumb">
                <img class="img-fluid" src="img/e1.jpg" alt="">
              </div>
              <div class="detials col-12 col-md-6">
                <p>13 de Mayo, 2019</p>
                <a href="#"><h4>Demostración de Artes</h4></a>
                <p>
                  Nuestra alfombra roja se viste de gala, la fecha más esperada del ciclo escolar. Reserva tu pase doble para este macro evento ¡15 días de talento y diversión!
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
                <a href="https://www.facebook.com/mariadelrosario.lopeztrejo?fref=ufi&rc=p"><h4>María del Rosario López Trejo</h4></a>
                <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                </div>
              </div>
              <p>
                Muy buena escuela, me encanta la disciplina y a mi hija también. Recomendable 100% para padres responsables.
              </p>
            </div>
            <div class="single-review item">
              <div class="title justify-content-start d-flex">
                <a href="https://www.facebook.com/profile.php?id=100006120945700&fref=ufi&rc=p"><h4>Cortes Helen</h4></a>
                <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
              </div>
              <p>
                Excelente evento, sobre todo el gran talento de los pequeños.
              </p>
            </div>
            <div class="single-review item">
              <div class="title justify-content-start d-flex">
                <a href="https://www.facebook.com/profile.php?id=100010259798914&fref=ufi&rc=p"><h4>Isis Maât</h4></a>
                <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
              </div>
              <p>
                Excelente evento, como siempre!!
              </p>
            </div>
            <div class="single-review item">
              <div class="title justify-content-start d-flex">
                <a href="https://www.facebook.com/profile.php?id=100000417441939&fref=ufi&rc=p"><h4>Portuguez Liudmila</h4></a>
                <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
              </div>
              <p>
                Colegio CARBA ¡El mejor!
              </p>
            </div>  
            <div class="single-review item">
              <div class="title justify-content-start d-flex">
                <a href="https://www.facebook.com/karina.a.savignon?fref=ufi&rc=p"><h4>Karina Andrade Savignon</h4></a>
                <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                </div>
              </div>
              <p>
                Excelente como siempre, ayudándonos a crear los mejores recuerdos de nuestros hijos, gracias!
              </p>
            </div>
            {{-- <div class="single-review item">
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
            </div> --}}                                                    
          </div>
        </div>
      </div>  
    </section>
    <!-- End review Area -->  
    
    <!-- Start blog Area -->
    {{-- <section class="blog-area section-gap" id="blog">
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
    </section> --}}
    <!-- End blog Area -->      

    <!-- Start cta-two Area -->
    <section class="cta-two-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 cta-left">
            <h1 class="title-hero">¿Quieres saber más?</h1>
          </div>
          <div class="col-lg-4 cta-right">
            <a class="primary-btn wh" href="#">Noticias recientes</a>
          </div>
        </div>
      </div>  
    </section>
    <!-- End cta-two Area -->
@endsection
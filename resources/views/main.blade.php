@extends('layouts.app')

@section('title', 'Bienvenidos')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
      <div class="overlay overlay-bg"></div>  
      <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-between">
          <div class="banner-content col-lg-9 col-md-12">
            <h1 class="text-uppercase">
              ¡Sólo con disciplina <br>lo logras!      
            </h1>
            <p class="pt-10 pb-10">
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
              <h1 class="mb-10">Tenemos cursos a tu medida</h1>
              <p>Estar a la vanguardia es indispensable, aprovecha los cursos curriculares y extracurriculares.</p>
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
                  <h4>$150 MXN</h4>
                </div>                  
              </div>
              <div class="details">
                <a href="{{ url('/curso-detalle1') }}">
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
                  <p><span class="lnr lnr-users"></span> 30 <span class="lnr lnr-bubble"></span>10</p>
                  <h4>Gratuito</h4>
                </div>                  
              </div>
              <div class="details">
                <a href="{{ url('/curso-detalle2') }}">
                  <h4>
                    Nivelación Inglés - Español
                  </h4>
                </a>
                <p>
                  Este curso está diseñado por nuestros profesores certificados para regularizar el nivel de aprendizaje.
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
                  <h4>$1,550 MXN</h4>
                </div>                  
              </div>
              <div class="details">
                <a href="{{ url('/curso-detalle3') }}">
                  <h4>
                    Curso de Verano
                  </h4>
                </a>
                <p>
                  Estos cursos están diseñados para disfrutar de la convivencia, diversión y el aprendizaje por edades.
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
                  <h4>$4,000 USD</h4>
                </div>                  
              </div>
              <div class="details">
                <a href="{{ url('/curso-detalle4') }}">
                  <h4>
                    Summer Camp
                  </h4>
                </a>
                <p>
                  Este curso te ayudará a vivir una experiencia de 2 semanas en el Extranjero, Inglaterra ¡te está esperando!                    
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

    <!-- Start upcoming-event Area -->
    <section class="upcoming-event-area section-gap">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="menu-content pb-70 col-lg-8">
            <div class="title text-center">
              <h1 class="mb-10">Eventos próximos del Centro Educativo</h1>
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
                <p>28 de Marzo, 2019</p>
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
                <p>10 de Mayo, 2019</p>
                <a href="#"><h4>El universo a través de la educación</h4></a>
                <p>
                  For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                </p>
              </div>
            </div>  
            {{-- <div class="single-carusel row align-items-center">
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
            </div> --}}                                            
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
            {{-- <div class="single-review item">
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
            <h1>¿Quieres saber más?</h1>
          </div>
          <div class="col-lg-4 cta-right">
            <a class="primary-btn wh" href="#">Noticias recientes</a>
          </div>
        </div>
      </div>  
    </section>
    <!-- End cta-two Area -->
@endsection
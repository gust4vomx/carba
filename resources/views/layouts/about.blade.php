@extends('layouts.app')

@section('title', 'Nosotros')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">   
        <div class="overlay overlay-bg"></div>
        <div class="container">             
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        {{-- Nosotros --}}                
                    </h1>   
                    {{-- <p class="text-white link-nav"><a href="{{ url('/') }}}">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Nosotros</a></p> --}}
                </div>  
            </div>
        </div>
    </section>
    <!-- End banner Area -->    

    <!-- Start feature Area -->
    <section class="feature-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>Misión</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                                Fungir como órgano coadyuvante de la familia para fomentar en los alumnos autonomía y capacidad crítica a través del desarrollo de habilidades cognitivas, afectivas y sociales, en un ambiente de disciplina basada en valores.
                            </p>
                            <a href="#">Saber más</a>                                    
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>Visión</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                                Consolidarnos como una institución de calidad por su alto nivel académico y humanista, capaz de lograr que nuestros egresados se coloquen en instituciones educativas de reconocido prestigio brindándoles mejores oportunidades a nivel profesional.
                            </p>
                            <a href="#">Saber más</a>                                    
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>Valores</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                                Compromiso como obligación contraída, Amistad como afecto personal puro y desinteresado, compartido con otra persona, que nace y se fortalece con el trato. Respeto como atención, consideración y manifestaciones de acatamiento que se hacen por cortesía. Benevolencia como buena voluntad o simpatía hacia las personas o sus obras. Afecto como sentimiento de cariño hacia otros.
                            </p>
                            <a href="#">Saber más</a>                                    
                        </div>
                    </div>
                </div>                                              
            </div>
        </div>  
    </section>
    <!-- End feature Area -->       

    <!-- Start info Area -->
    <section class="info-area pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 no-padding info-area-left">
                    <img class="img-fluid" src="img/about-img.jpg" alt="">
                </div>
                <div class="col-lg-6 info-area-right">
                    <h1 class="title-hero f-24em">Un poco de historia</h1>
                    <p class="text-justify">El Centro Educativo CARBA inicia operaciones en el año 2008 con la firme convicción de
                    crear un ambiente adecuado para nuevas generaciones, en dónde mejoramos lo que necesita ser actualizado y conservamos las tradiciones que forman parte de nuestra esencia; cómo el orden, la disciplina y la constancia.</p>
                    <br>
                    <p class="text-justify">Nuestro preescolar (semillero de generaciones exitosas) y primaria (sinónimo de
                    logros académicos y personales) demuestran que se pueden tener cualidades excepcionales gracias a que la inteligencia está presente en todos los seres humanos. Sin embargo para conquistar metas y alcanzar el éxito es necesario tener disciplina, pues las acciones educativas en los primeros años se convierten en el espacio más relevante en la vida del ser humano.</p>
                </div>
            </div>
        </div>  
    </section>
    <!-- End info Area -->  

    <!-- Start course-mission Area -->
    <section class="course-mission-area pb-120">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="title-hero mb-10">Nuestro modelo académico</h1>
                        <p>Se fundamenta en pilares importantes que conllevan al éxito.</p>
                    </div>
                </div>
            </div>                          
            <div class="row">
                <div class="col-md-6 accordion-left">

                    <!-- accordion 2 start-->
                    <dl class="accordion">
                        <dt>
                            <a href="">Valores</a>
                        </dt>
                        <dd>
                            <b>Compromiso, Amistad, Respeto, Benevolencia y Afecto</b> son los valores que conforman los ideales de esta institución, logrando así en cada una de las iniciales de estas palabras; se forme una nueva palabra <b>CARBA</b>.
                        </dd>
                        <dt>
                            <a href="">Objetivo</a>
                        </dt>
                        <dd>
                            Fomentar en cada uno de nuestros alumnos el deseo constante de ser un individuo <b>exitoso</b>, por medio de retos que potencialicen su existencia.
                        </dd>
                        <dt>
                            <a href="">Propuesta</a>
                        </dt>
                        <dd>
                            Construir un ambiente <b>agradable</b> para el aprendizaje; que sea <b>organizado</b> y <b>eficaz</b>, en dónde las tareas apropiadas motiven al alumno a disfrutar de sus actividades al mismo tiempo que encuentre un balance adecuado con los métodos de enseñanza, herramientas y la tecnología que tiene disponible.
                        </dd>
                        <dt>
                            <a href="">Lema</a>
                        </dt>
                        <dd>
                            <b>"Sólo con disciplina lo logras"</b>, nuestro lema engloba metas y logros alcanzados; gracias a que la disciplina no se visualiza como un problema, contrario a ello representa la posibilidad para adquirir aprendizajes, formación y nuevas experiencias que abren ventanas al mundo interesante del conocimiento.
                        </dd>
                    </dl>
                    <!-- accordion 2 end-->
                </div>
                {{-- <div class="col-md-6 video-right justify-content-center align-items-center d-flex relative">
                    <div class="overlay overlay-bg"></div>
                    <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid mx-auto" src="img/play.png" alt=""></a>
                </div> --}}
                <div class="col-md-6 justify-content-center align-items-center d-flex relative">
                    <video controls autoplay>
                      {{-- <source src="foo.ogg" type="video/ogg"> --}}
                      <source src="video/carba-video.mp4" type="video/mp4">
                      Tu navegador no implementa el elemento <code>video</code>.
                    </video>
                </div>
            </div>
        </div>  
    </section>
    <!-- End course-mission Area -->
    
    <!-- Start search-course Area -->
    {{-- <section class="search-course-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-6 search-course-left">
                    <h1 class="text-white">
                        Get reduced fee <br>
                        during this Summer!
                    </h1>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
                    </p>
                    <div class="row details-content">
                        <div class="col single-detials">
                            <span class="lnr lnr-graduation-hat"></span>
                            <a href="#"><h4>Expert Instructors</h4></a>     
                            <p>
                                Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                            </p>                        
                        </div>
                        <div class="col single-detials">
                            <span class="lnr lnr-license"></span>
                            <a href="#"><h4>Certification</h4></a>      
                            <p>
                                Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                            </p>                        
                        </div>                              
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 search-course-right section-gap">
                    <form class="form-wrap" action="#">
                        <h4 class="text-white pb-20 text-center mb-30">Search for Available Course</h4>     
                        <input type="text" class="form-control" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" >
                        <input type="phone" class="form-control" name="phone" placeholder="Your Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Phone Number'" >
                        <input type="email" class="form-control" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" >
                        <div class="form-select" id="service-select">
                            <select>
                                <option datd-display="">Choose Course</option>
                                <option value="1">Course One</option>
                                <option value="2">Course Two</option>
                                <option value="3">Course Three</option>
                                <option value="4">Course Four</option>
                            </select>
                        </div>                                  
                        <button class="primary-btn text-uppercase">Submit</button>
                    </form>
                </div>
            </div>
        </div>  
    </section> --}}
    <!-- End search-course Area -->         

    <!-- Start review Area -->
    {{-- <section class="review-area section-gap relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">             
            <div class="row">
                <div class="active-review-carusel">
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <a href="#"><h4>Fannie Rowe</h4></a>
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
                            <a href="#"><h4>Hulda Sutton</h4></a>
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
                            <a href="#"><h4>Fannie Rowe</h4></a>
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
                            <a href="#"><h4>Hulda Sutton</h4></a>
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
                            <a href="#"><h4>Fannie Rowe</h4></a>
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
                            <a href="#"><h4>Hulda Sutton</h4></a>
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
                            <a href="#"><h4>Fannie Rowe</h4></a>
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
                            <a href="#"><h4>Hulda Sutton</h4></a>
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
    </section> --}}
    <!-- End review Area -->                  

    <!-- Start cta-two Area -->
    {{-- <section class="cta-two-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 cta-left">
                    <h1>Not Yet Satisfied with our Trend?</h1>
                </div>
                <div class="col-lg-4 cta-right">
                    <a class="primary-btn wh" href="#">view our blog</a>
                </div>
            </div>
        </div>  
    </section> --}}
    <!-- End cta-two Area -->
@endsection
@extends('layouts.app')

@section('title', 'Nivel Preescolar')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative preescolar-banner" id="home">   
        <div class="overlay overlay-bg"></div>
        <div class="container">             
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        {{-- Nivel Preescolar    --}}  
                    </h1>   
                    {{-- <p class="text-white link-nav"><a href="{{ url('/') }}">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Preescolar</a></p> --}}
                </div>  
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start Sample Area -->
    <section class="sample-text-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="text-heading title-hero text-center">Nuestra Base Educativa</h3>      
                    <p>
                        Sabemos lo importante que es contar con un entorno de desarrollo agradable, por esa razón contamos con instalaciones de <b>primer nivel</b> que permiten a nuestros pequñ@s estudiantes adquirir habilidades a temprana edad a través de la convivencia, socialización, juegos y diversión. <br><br>

                        Además este ambiente de trabajo y aprendizaje cuenta con espacio suficiente para desarrollar actividades que seguramente harán de tu pequeñ@ una futura estrella.
                    </p>
                    <p>
                        Por ello nuestras instalaciones cuentan con área de juegos, música, danza, natación aula de estimulación temprana, auditorio multimedia, área de enfermería, seguro escolar, áreas recreativas, trotapista, comedor.
                    </p>
                </div>
            </div>
            
        </div>
    </section>
    <!-- End Sample Area -->

    <!-- Start gallery Area -->
    <section class="gallery-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <a href="img/gallery-prees/g1.jpg" class="img-gal">
                        <div class="single-imgs relative">      
                            <div class="overlay overlay-bg"></div>
                            <div class="relative">              
                                <img class="img-fluid" src="img/gallery-prees/g1.jpg" alt="">     
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-5">
                    <a href="img/gallery-prees/g2.jpg" class="img-gal">
                        <div class="single-imgs relative">      
                            <div class="overlay overlay-bg"></div>
                            <div class="relative">              
                                <img class="img-fluid" src="img/gallery-prees/g2.jpg" alt="">             
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="img/gallery-prees/g3.jpg" class="img-gal">
                        <div class="single-imgs relative">      
                            <div class="overlay overlay-bg"></div>
                            <div class="relative">              
                                <img class="img-fluid" src="img/gallery-prees/g3.jpg" alt="">             
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="img/gallery-prees/g4.jpg" class="img-gal">
                        <div class="single-imgs relative">      
                            <div class="overlay overlay-bg"></div>
                            <div class="relative">                  
                                <img class="img-fluid" src="img/gallery-prees/g4.jpg" alt="">             
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="img/gallery-prees/g5.jpg"  class="img-gal">
                        <div class="single-imgs relative">      
                            <div class="overlay overlay-bg"></div>
                            <div class="relative">                  
                                <img class="img-fluid" src="img/gallery-prees/g5.jpg" alt="">             
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-5">
                    <a href="img/gallery-prees/g6.jpg" class="img-gal">
                        <div class="single-imgs relative">      
                            <div class="overlay overlay-bg"></div>
                            <div class="relative">              
                                <img class="img-fluid" src="img/gallery-prees/g6.jpg" alt="">             
                            </div>
                        </div>
                     </a>
                </div>
                <div class="col-lg-7">
                    <a href="img/gallery-prees/g7.jpg" class="img-gal">
                        <div class="single-imgs relative">      
                            <div class="overlay overlay-bg"></div>
                            <div  class="relative">                 
                                <img class="img-fluid" src="img/gallery-prees/g7.jpg" alt="">             
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="img/gallery-prees/g8.jpg" class="img-gal">
                        <div class="single-imgs relative">      
                            <div class="overlay overlay-bg"></div>
                            <div  class="relative">                 
                                <img class="img-fluid" src="img/gallery-prees/g8.jpg" alt="">             
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="img/gallery-prees/g9.jpg" class="img-gal">
                        <div class="single-imgs relative">      
                            <div class="overlay overlay-bg"></div>
                            <div  class="relative">                 
                                <img class="img-fluid" src="img/gallery-prees/g9.jpg" alt="">             
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="img/gallery-prees/g9.jpg" class="img-gal">
                        <div class="single-imgs relative">      
                            <div class="overlay overlay-bg"></div>
                            <div  class="relative">                 
                                <img class="img-fluid" src="img/gallery-prees/g9.jpg" alt="">             
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>  
    </section>
    <!-- End gallery Area -->

    {{-- <!-- Logros Destacados -->
    <section class="sample-text-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="text-heading title-hero text-center">Logros destacados</h3>      
                    <p class="sample-text">
                        Somos un colegio de alto rendimiento con primeros lugares en la competencia <b>Cotorra de matemáticas</b> y las <b>Olimpiadas del conocimiento</b> a nivel <u>zona</u>, <u>región</u> y <u>estado</u>. Comprometidos con fomentar una educación que desde temprana edad haga trascender a nuestro alumnado, para ello hemos destacados en diferentes justas de conocimiento siendo reconocidos por nuestros valores e ideales. Nuestro semillero - preescolar - es una de nuestras más grandes satisfacciones ¿Quieres saber más? Te invitamos a conocerlo ¡Que esperas!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Logros Destacados --> --}}

    <!-- Start Sample Area -->
    <section class="sample-text-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h3 class="text-heading title-hero text-center">Horario escolar</h3>      
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md bg-pink">
                    <h3 class="pt-4 pb-4 p-white">Entrada 08:00 AM</h3>
                </div>
                <div class="col-md bg-blue">
                    <h3 class="pt-4 pb-4 p-white">Salida 02:30 PM</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- End Sample Area -->

@endsection
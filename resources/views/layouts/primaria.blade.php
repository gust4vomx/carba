@extends('layouts.app')

@section('title', 'Nivel Primaria')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative primaria-banner" id="home">   
        <div class="overlay overlay-bg"></div>
        <div class="container">             
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        {{-- Nivel Primaria      --}}
                    </h1>   
                    <p class="text-white link-nav"><a href="{{ url('/') }}">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Primaria</a></p>
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
                    <h3 class="text-heading title-hero text-center">Educación de calidad</h3>      
                    <p>
                        Contamos con herramientas que facilitan el desarrollo cognitivo, matemático, tecnológico, artístico, emocional, físico y motor de los alumnos. Formamos futuros ciudadanos responsables y leales a su patria, que transforman conductas, viven los valores y los buenos hábitos; apoyándolos con tecnología de punta y segunda lengua (inglés), que les permitirá traspasar fronteras y desenvolverse en diferentes países de manera exitosa. 
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
                    <a href="img/gallery/g1.jpg" class="img-gal">
                        <div class="single-imgs relative">      
                            <div class="overlay overlay-bg"></div>
                            <div class="relative">              
                                <img class="img-fluid" src="img/gallery/g1.jpg" alt="">     
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-5">
                    <a href="img/gallery/g2.jpg" class="img-gal">
                        <div class="single-imgs relative">      
                            <div class="overlay overlay-bg"></div>
                            <div class="relative">              
                                <img class="img-fluid" src="img/gallery/g2.jpg" alt="">             
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="img/gallery/g3.jpg" class="img-gal">
                        <div class="single-imgs relative">      
                            <div class="overlay overlay-bg"></div>
                            <div class="relative">              
                                <img class="img-fluid" src="img/gallery/g3.jpg" alt="">             
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="img/gallery/g4.jpg" class="img-gal">
                        <div class="single-imgs relative">      
                            <div class="overlay overlay-bg"></div>
                            <div class="relative">                  
                                <img class="img-fluid" src="img/gallery/g4.jpg" alt="">             
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="img/gallery/g5.jpg"  class="img-gal">
                        <div class="single-imgs relative">      
                            <div class="overlay overlay-bg"></div>
                            <div class="relative">                  
                                <img class="img-fluid" src="img/gallery/g5.jpg" alt="">             
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-5">
                    <a href="img/gallery/g6.jpg" class="img-gal">
                        <div class="single-imgs relative">      
                            <div class="overlay overlay-bg"></div>
                            <div class="relative">              
                                <img class="img-fluid" src="img/gallery/g6.jpg" alt="">             
                            </div>
                        </div>
                     </a>
                </div>
                <div class="col-lg-7">
                    <a href="img/gallery/g7.jpg" class="img-gal">
                        <div class="single-imgs relative">      
                            <div class="overlay overlay-bg"></div>
                            <div  class="relative">                 
                                <img class="img-fluid" src="img/gallery/g7.jpg" alt="">             
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>  
    </section>
    <!-- End gallery Area -->

    <!-- Start Sample Area -->
    <section class="sample-text-area">
        <div class="container">
            <h3 class="text-heading title-hero text-center">Logros destacados</h3>
            <p class="sample-text">
                Somos un colegio de alto rendimiento con primeros lugares en la competencia <b>Cotorra de matemáticas</b> y las <b>Olimpiadas del conocimiento</b> a nivel <u>zona</u>, <u>región</u> y <u>estado</u>. Hemos obtenido premios durante ciclos 2017 y 2018 de importante relevancia en diferentes áreas, consulta los <a href="http://www.mejoratuescuela.org/escuelas/index/15PPR7030T?fbclid=IwAR2KU_gLHl_kCx0lQLjh4KHII8w-RvruzmlDua0CLwoNBRQGGREVy2CKNK8">resultados</a> que avalan nuestros éxitos.  
            </p>
        </div>
    </section>
    <!-- End Sample Area -->

    <!-- Start Sample Area -->
    <section class="sample-text-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h3 class="text-heading title-hero text-center">Horario escolar</h3>
                    <h2 class="text-heading text-center">Grados 1º - 2º - 3º</h2>      
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md bg-blue">
                    <h3 class="pt-4 pb-4 p-white">Entrada 07:20 AM</h3>
                </div>
                <div class="col-md bg-yellow">
                    <h3 class="pt-4 pb-4 p-white">Salida 02:30 PM</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- End Sample Area -->

    <!-- Start Sample Area -->
    <section class="sample-text-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h3 class="text-heading title-hero text-center">Horario escolar</h3>
                    <h2 class="text-heading text-center">Grados 4º - 5º - 6º</h2>      
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md bg-green">
                    <h3 class="pt-4 pb-4 p-white">Entrada 07:20 AM</h3>
                </div>
                <div class="col-md bg-orange">
                    <h3 class="pt-4 pb-4 p-white">Salida 03:00 PM</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- End Sample Area -->

@endsection
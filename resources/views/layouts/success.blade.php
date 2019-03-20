@extends('layouts.app')

@section('title', 'Te has suscrito a nuestro boletín')

@section('content')
  <!-- start banner Area -->
    <section class="banner-area relative newsletter-banner" id="home">   
        <div class="overlay overlay-bg"></div>
        <div class="container">             
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        ¡Gracias por suscribirte!                
                    </h1>   
                    <p class="text-white link-nav"><a href="{{ url('/') }}}">Inicio </a>{{--   <span class="lnr lnr-arrow-right"></span>  <a href="#"> Nosotros</a> --}}</p>
                </div>  
            </div>
        </div>
    </section>

    <!-- End banner Area -->
    <section class="info-area pb-120">
        <div class="container">
            <div class="row align-items-center">
                {{-- <div class="col-lg-6 no-padding info-area-left">
                    <img class="img-fluid" src="img/about-img.jpg" alt="">
                </div> --}}
                <div class="col col-md text-center">
                    <h1 class="mt-4">Pronto te enviaremos un mail</h1>
                    <p class="pt-4 pb-4">El Centro Educativo CARBA a través de este boletín te mantendrá informado de todas las noticias y novedades ¡No te lo puedes perder! Te queremos.</p>
                </div>
            </div>
        </div>  
    </section>
@endsection
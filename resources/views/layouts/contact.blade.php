@extends('layouts.app')

@section('title', 'Contáctanos')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative contacto-banner" id="home">   
        <div class="overlay overlay-bg"></div>
        <div class="container">             
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        {{-- Contáctanos --}}              
                    </h1>   
                    {{-- <p class="text-white link-nav"><a href="{{ url('/') }}">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ url('/contacto') }}"> Contacto</a></p> --}}
                </div>  
            </div>
        </div>
    </section>
    <!-- End banner Area -->                  

    <!-- Start contact-page Area -->
    <section class="contact-page-area section-gap">
        <div class="container">
            <div class="row">
                <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
                <div class="col-lg-4 d-flex flex-column address-wrap">
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-home"></span>
                        </div>
                        <div class="contact-details">
                            <h5>San Andrés Chiautla</h5>
                            <p>
                                Calle San José S/N, Barrio San Francisco Chiautla, Estado de México.
                            </p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-phone-handset"></span>
                        </div>
                        <div class="contact-details">
                            <h5>+52 (595) 95 3 44 45</h5>
                            <p>Lunes a Viernes 08:00 AM to 06:00 PM</p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-envelope"></span>
                        </div>
                        <div class="contact-details">
                            <h5>atencion@carba.edu.mx</h5>
                            <p>Envíanos tus dudas en cualquier momento, queremos escucharte.</p>
                        </div>
                    </div>                                                      
                </div>
                <div class="col-lg-8">
                    <form class="form-area contact-form text-right" id="contactForm" method="POST" action="{{ url('contacto')}}">
                        @csrf
                        <div class="row">   
                            <div class="col-lg-6 form-group">
                                <input name="name" placeholder="Ingresa tu nombre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingresa tu nombre'" class="common-input mb-20 form-control" value="{{ old('name') }}" required="" type="text">
                                {!! $errors->first('name', '<small>:message</small>') !!}

                                <input name="email" placeholder="Ingresa tu correo" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Necesitamos tu correo electrónico'" class="common-input mb-20 form-control" required="" value="{{ old('email') }}" type="email">
                                {!! $errors->first('email', '<small>:message</small>') !!}

                                <input name="subject" placeholder="Asunto del mensaje" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingresa el asunto de tu mensaje'" class="common-input mb-20 form-control" required="" value="{{ old('subject') }}" type="text">
                                {!! $errors->first('subject', '<small>:message</small>') !!}
                            </div>
                            <div class="col-lg-6 form-group">
                                <textarea name="content" class="common-textarea form-control" placeholder="¿Cuáles son tus dudas?" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Escribe tu mensaje'" required="" value="{{ old('content') }}"></textarea>
                                {!! $errors->first('name', '<small>:message</small>') !!}               
                            </div>
                            <div class="col-lg-12">
                                <div class="alert-msg" style="text-align: left;"></div>
                                <button class="genric-btn primary" style="float: right;">@lang('Send')</button>                                          
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>  
    </section>
    <!-- End contact-page Area -->
@endsection
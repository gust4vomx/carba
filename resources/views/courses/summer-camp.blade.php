@extends('layouts.app')

@section('title', 'Curso - Summer Camp England 2019')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">   
        <div class="overlay overlay-bg"></div>
        <div class="container">             
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Summer Camp England 2019     
                    </h1>   
                    <p class="text-white link-nav"><a href="{{ url('/') }}">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#">Summer Camp England 2019</a></p>
                </div>  
            </div>
        </div>
    </section>
    <!-- End banner Area -->    

    <!-- Start course-details Area -->
    <section class="course-details-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 left-contents">
                    <div class="main-image">
                        <img class="img-fluid" src="img/m-img.jpg" alt="">
                    </div>
                    <div class="jq-tab-wrapper" id="horizontalTab">
                        <div class="jq-tab-menu">
                            <div class="jq-tab-title active" data-tab="1">Objectivos</div>
                            <div class="jq-tab-title" data-tab="2">Eligibilidad</div>
                            {{-- <div class="jq-tab-title" data-tab="3">Course Outline</div>
                            <div class="jq-tab-title" data-tab="4">Comments</div>
                            <div class="jq-tab-title" data-tab="5">Reviews</div> --}}
                        </div>
                        <div class="jq-tab-content-wrapper">
                            <div class="jq-tab-content active" data-tab="1">
                                Brinda a tu hijo la posibilidad de vivir una experiencia educativa internacional, divertida y segura, durante las vacaciones de Semana Santa-Pascua y de Verano en Inglaterra o Canadá.
                                <br>
                                <br>
                                Ofrecemos un equilibrio perfecto entre clases de inglés, deportes, actividades de entretenimiento y excursiones.
                            </div>
                            <div class="jq-tab-content" data-tab="2">
                                Nuestros cursos están diseñados especialmente para niños de 10 a 17 años con cualquier nivel de inglés.
                                <br>
                                <br>
                                ¿Por qué enviar a tus hijos a un curso en el extranjero? Se divierten mientras aprenden, además de que favorecen a su formación y crecimiento personal. Estudian y practican inglés en el “mundo real” mientras hacen nuevos amigos de su edad de hasta 30 países diferentes.
                            </div>
                            <div class="jq-tab-content" data-tab="3">
                                <ul class="course-list">
                                    <li class="justify-content-between d-flex">
                                        <p>Introduction Lesson</p>
                                        <a class="primary-btn text-uppercase" href="#">View Details</a>
                                    </li>
                                    <li class="justify-content-between d-flex">
                                        <p>Basics of HTML</p>
                                        <a class="primary-btn text-uppercase" href="#">View Details</a>
                                    </li>
                                    <li class="justify-content-between d-flex">
                                        <p>Getting Know about HTML</p>
                                        <a class="primary-btn text-uppercase" href="#">View Details</a>
                                    </li>
                                    <li class="justify-content-between d-flex">
                                        <p>Tags and Attributes</p>
                                        <a class="primary-btn text-uppercase" href="#">View Details</a>
                                    </li>
                                    <li class="justify-content-between d-flex">
                                        <p>Basics of CSS</p>
                                        <a class="primary-btn text-uppercase" href="#">View Details</a>
                                    </li>
                                    <li class="justify-content-between d-flex">
                                        <p>Getting Familiar with CSS</p>
                                        <a class="primary-btn text-uppercase" href="#">View Details</a>
                                    </li>
                                    <li class="justify-content-between d-flex">
                                        <p>Introduction to Bootstrap</p>
                                        <a class="primary-btn text-uppercase" href="#">View Details</a>
                                    </li>                                                                       
                                    <li class="justify-content-between d-flex">
                                        <p>Responsive Design</p>
                                        <a class="primary-btn text-uppercase" href="#">View Details</a>
                                    </li>
                                    <li class="justify-content-between d-flex">
                                        <p>Canvas in HTML 5</p>
                                        <a class="primary-btn text-uppercase" href="#">View Details</a>
                                    </li>

                                </ul>
                            </div>
                            {{-- <div class="jq-tab-content comment-wrap" data-tab="4">
                                <div class="comments-area">
                                    <h4>05 Comments</h4>
                                    <div class="comment-list">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="img/blog/c1.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Emilly Blunt</a></h5>
                                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                                    <p class="comment">
                                                        Never say goodbye till the end comes!
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="reply-btn">
                                                   <a href="" class="btn-reply text-uppercase">reply</a> 
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="comment-list left-padding">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="img/blog/c2.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Elsie Cunningham</a></h5>
                                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                                    <p class="comment">
                                                        Never say goodbye till the end comes!
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="reply-btn">
                                                   <a href="" class="btn-reply text-uppercase">reply</a> 
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="comment-list">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="img/blog/c4.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Maria Luna</a></h5>
                                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                                    <p class="comment">
                                                        Never say goodbye till the end comes!
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="reply-btn">
                                                   <a href="" class="btn-reply text-uppercase">reply</a> 
                                            </div>
                                        </div>
                                    </div>                                                    
                                </div>
                                <div class="comment-form">
                                    <h4>Leave a Comment</h4>
                                    <form>
                                        <div class="form-group form-inline">
                                          <div class="form-group col-lg-6 col-md-12 name">
                                            <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                                          </div>
                                          <div class="form-group col-lg-6 col-md-12 email">
                                            <input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                                          </div>                                        
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                        </div>
                                        <a href="#" class="mt-40 text-uppercase genric-btn primary text-center">Post Comment</a> 
                                    </form>
                                </div>                                          
                            </div> --}}
                            {{-- <div class="jq-tab-content" data-tab="5">   
                                <div class="review-top row pt-40">
                                    <div class="col-lg-3">
                                        <div class="avg-review">
                                            Average <br>
                                            <span>5.0</span> <br>
                                            (3 Ratings)
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <h4 class="mb-20">Provide Your Rating</h4>
                                        <div class="d-flex flex-row reviews">
                                            <span>Quality</span>
                                            <div class="star">
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span>Outstanding</span>
                                        </div>
                                        <div class="d-flex flex-row reviews">
                                            <span>Puncuality</span>
                                            <div class="star">
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span>Outstanding</span>
                                        </div>
                                        <div class="d-flex flex-row reviews">
                                            <span>Quality</span>
                                            <div class="star">
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span>Outstanding</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="feedeback">
                                    <h4 class="pb-20">Your Feedback</h4>
                                    <textarea name="feedback" class="form-control" cols="10" rows="10"></textarea>
                                    <a href="#" class="mt-20 primary-btn text-right text-uppercase">Submit</a>
                                </div>
                                <div class="comments-area mb-30">
                                    <div class="comment-list">
                                        <div class="single-comment single-reviews justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="img/blog/c1.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Emilly Blunt</a>
                                                    <div class="star">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    </h5>
                                                    <p class="comment">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ut sed, dolorum asperiores perspiciatis provident, odit maxime doloremque aliquam.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="comment-list">
                                        <div class="single-comment single-reviews justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="img/blog/c2.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Elsie Cunningham</a>
                                                    <div class="star">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    </h5>
                                                    <p class="comment">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ut sed, dolorum asperiores perspiciatis provident, odit maxime doloremque aliquam.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="comment-list">
                                        <div class="single-comment single-reviews justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="img/blog/c3.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Maria Luna</a>
                                                    <div class="star">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    </h5>
                                                    <p class="comment">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ut sed, dolorum asperiores perspiciatis provident, odit maxime doloremque aliquam.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="comment-list">
                                        <div class="single-comment single-reviews justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="img/blog/c4.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Maria Luna</a>
                                                    <div class="star">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    </h5>
                                                    <p class="comment">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ut sed, dolorum asperiores perspiciatis provident, odit maxime doloremque aliquam.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                                                                                
                                </div>                                      
                            </div>                                 --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 right-contents">
                    <ul>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Sede</p> 
                                <span class="or">Londres, Inglaterra</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Costo </p>
                                <span>$4,000 USD</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Duración Semanas </p>
                                <span>2</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Salida al Campamento </p>
                                <span>08 de Agosto, 2019</span>
                            </a>
                        </li>
                    </ul>
                    <a href="/pdfs/anglo-summer-camp-2019.pdf" class="primary-btn text-uppercase bg-yellow">Descargar PDF</a>
                </div>
            </div>
        </div>  
    </section>
    <!-- End course-details Area -->

    <!-- Start Section Informes Freire -->
    {{-- <section class="mt-4 banner-freire" style="background-color: #43ccd8">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md pt-4 pb-4">
                    <h1 class="title-hero text-center">
                        Campamento de Inglés estilo Harry Potter
                    </h1>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Section Informes Freire   -->

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
                <a href="http://127.0.0.1:8000/de-verano-carba">
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
                <a href="http://127.0.0.1:8000/summer-camp-england-2019">
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
                <a href="http://127.0.0.1:8000/regularizacion-de-ingles">
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
                <a href="http://127.0.0.1:8000/nivelacion-de-alumnos">
                  <h4>
                    Nivelación de Alumnos
                  </h4>
                </a>
                <p>
                  Leer y escribir son las bases de la educación, este curso está pensado para los más pequeños. 
                </p>
              </div>
            </div>
                          
          </div>
        </div>
      </div>  
    </section>
    <!-- End popular-course Area -->
@endsection
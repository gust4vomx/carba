@extends('layouts.app')

@section('title', 'Nivel Primaria')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">   
        <div class="overlay overlay-bg"></div>
        <div class="container">             
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Nivel Primaria     
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
            <h3 class="text-heading">Logros destacados</h3>
            <p class="sample-text">
                Somos un colegio de alto rendimiento con primeros lugares en la competencia <b>Cotorra de matemáticas</b> y las <b>Olimpiadas del conocimiento</b> a nivel <u>zona</u>, <u>región</u> y <u>estado</u>. Hemos obtenido premios durante ciclos 2017 y 2018 de importante relevancia en diferentes áreas, consulta los <a href="http://www.mejoratuescuela.org/escuelas/index/15PPR7030T?fbclid=IwAR2KU_gLHl_kCx0lQLjh4KHII8w-RvruzmlDua0CLwoNBRQGGREVy2CKNK8">resultados</a> que avalan nuestros éxitos.  
            </p>
        </div>
    </section>
    <!-- End Sample Area -->

    <!-- Start Align Area -->
    <div class="whole-wrap">
        <div class="container">
            <div class="section-top-border">
                <h3 class="mb-30">Instalaciones Primaria</h3>
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/preescolar/trota-pista.jpg" alt="Trotapista CARBA" class="img-fluid">
                    </div>
                    <div class="col-md-9 mt-sm-20 left-align-p">
                        <p>
                            Contamos con herramientas que facilitan el desarrollo cognitivo, matemático, tecnológico, artístico, emocional, físico y motor de los alumnos. Formamos futuros ciudadanos responsables y leales a su patria, que transforman conductas, viven los valores y los buenos hábitos; apoyándolos con tecnología de punta y segunda lengua(inglés), que les permitirá traspasar fronteras y desenvolverse en diferentes países de manera exitosa.
                        </p>
                    </div>
                </div>
            </div>
            {{-- <div class="section-top-border text-right">
                <h3 class="mb-30">Right Aligned</h3>
                <div class="row">
                    <div class="col-md-9">
                        <p class="text-right">Over time, even the most sophisticated, memory packed computer can begin to run slow if we don’t do something to prevent it. The reason why has less to do with how computers are made and how they age and more to do with the way we use them. You see, all of the daily tasks that we do on our PC from running programs to downloading and deleting software can make our computer sluggish. To keep this from happening, you need to understand the reasons why your PC is getting slower and do something to keep your PC running at its best. You can do this through regular maintenance and PC performance optimization programs</p>
                        <p class="text-right">Before we discuss all of the things that could be affecting your PC’s performance, let’s talk a little about what symptoms</p>
                    </div>
                    <div class="col-md-3">
                        <img src="img/elements/d.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="section-top-border">
                <h3 class="mb-30">Definition</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-defination">
                            <h4 class="mb-20">Definition 01</h4>
                            <p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-defination">
                            <h4 class="mb-20">Definition 02</h4>
                            <p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-defination">
                            <h4 class="mb-20">Definition 03</h4>
                            <p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="section-top-border">
                <h3 class="mb-30">Block Quotes</h3>
                <div class="row">
                    <div class="col-lg-12">
                        <blockquote class="generic-blockquote">
                            “Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being chased by the Federal government. But, after a fortnight, the online casino industry came up with a solution and new online casinos started taking root. These began to operate under a different business umbrella, and by doing that, rendered the transfer of money to and from them legal. A major part of this was enlisting electronic banking systems that would accept this new clarification and start doing business with me. Listed in this article are the electronic banking” 
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="section-top-border">
                <h3 class="mb-30">Table</h3>
                <div class="progress-table-wrap">
                    <div class="progress-table">
                        <div class="table-head">
                            <div class="serial">#</div>
                            <div class="country">Countries</div>
                            <div class="visit">Visits</div>
                            <div class="percentage">Percentages</div>
                        </div>
                        <div class="table-row">
                            <div class="serial">01</div>
                            <div class="country"> <img src="img/elements/f1.jpg" alt="flag">Canada</div>
                            <div class="visit">645032</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-1" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="serial">02</div>
                            <div class="country"> <img src="img/elements/f2.jpg" alt="flag">Canada</div>
                            <div class="visit">645032</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-2" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="serial">03</div>
                            <div class="country"> <img src="img/elements/f3.jpg" alt="flag">Canada</div>
                            <div class="visit">645032</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-3" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="serial">04</div>
                            <div class="country"> <img src="img/elements/f4.jpg" alt="flag">Canada</div>
                            <div class="visit">645032</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-4" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="serial">05</div>
                            <div class="country"> <img src="img/elements/f5.jpg" alt="flag">Canada</div>
                            <div class="visit">645032</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-5" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="serial">06</div>
                            <div class="country"> <img src="img/elements/f6.jpg" alt="flag">Canada</div>
                            <div class="visit">645032</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-6" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="serial">07</div>
                            <div class="country"> <img src="img/elements/f7.jpg" alt="flag">Canada</div>
                            <div class="visit">645032</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-7" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="serial">08</div>
                            <div class="country"> <img src="img/elements/f8.jpg" alt="flag">Canada</div>
                            <div class="visit">645032</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="section-top-border">
                <h3>Conoce las Instalaciones</h3>
                <div class="row gallery-item">
                    <div class="col-md-4">
                        <a href="img/preescolar/p1.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/preescolar/p1.jpg);"></div></a>
                        <span class="badge badge-primary">Juegos</span>
                    </div>
                    <div class="col-md-4">
                        <a href="img/preescolar/p2.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/preescolar/p2.jpg);"></div></a>
                        <span class="badge badge-success">Cafetería</span>
                    </div>
                    <div class="col-md-4">
                        <a href="img/preescolar/p3.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/preescolar/p3.jpg);"></div></a>
                        <span class="badge badge-danger">Danza</span>
                    </div>
                    {{-- <div class="col-md-6">
                        <a href="img/preescolar/p4.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/preescolar/p4.jpg);"></div></a>
                    </div>
                    <div class="col-md-6">
                        <a href="img/preescolar/p5.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/preescolar/p5.jpg);"></div></a>
                    </div>
                    <div class="col-md-4">
                        <a href="img/preescolar/g6.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/preescolar/g6.jpg);"></div></a>
                    </div>
                    <div class="col-md-4">
                        <a href="img/preescolar/g7.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/preescolar/g7.jpg);"></div></a>
                    </div>
                    <div class="col-md-4">
                        <a href="img/preescolar/g8.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/preescolar/g8.jpg);"></div></a>
                    </div> --}}
                </div>
            </div>
            <div class="section-top-border">
                <div class="row">
                    {{-- <div class="col-md-4 typo-sec">
                        <h3 class="mb-20">Typography</h3>
                        <div class="typography">
                            <h1 class="typo-list">This is header 01</h1>
                            <h2 class="typo-list">This is header 02</h2>
                            <h3 class="typo-list">This is header 03</h3>
                            <h4 class="typo-list">This is header 04</h4>
                            <h5 class="typo-list">This is header 01</h5>
                            <h6 class="typo-list">This is header 01</h6>
                        </div>
                    </div> --}}
                    <div class="col-md-4 mt-sm-30 typo-sec">
                        <h3 class="mb-20">Horarios Primaria 1º 2º 3º</h3>
                        <div class="">
                            <ul class="unordered-list">
                                <li>Entrada 07:20 AM</li>
                                <li>Salida 02:30 PM</li>
                                {{-- <li>Facts Why Inkjet Printing Is Very Appealing
                                    <ul>
                                        <li>Addiction When Gambling Becomes
                                            <ul>
                                                <li>Protective Preventative Maintenance</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>Dealing With Technical Support 10 Useful Tips</li>
                                <li>Make Myspace Your Best Designed Space</li>
                                <li>Cleaning And Organizing Your Computer</li> --}}
                            </ul>
                        </div>
                        <h3 class="mb-20">Horarios Primaria 4º 5º 6º</h3>
                        <div class="">
                            <ul class="unordered-list">
                                <li>Entrada 07:20 AM</li>
                                <li>Salida 03:00 PM</li>
                                {{-- <li>Facts Why Inkjet Printing Is Very Appealing
                                    <ul>
                                        <li>Addiction When Gambling Becomes
                                            <ul>
                                                <li>Protective Preventative Maintenance</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>Dealing With Technical Support 10 Useful Tips</li>
                                <li>Make Myspace Your Best Designed Space</li>
                                <li>Cleaning And Organizing Your Computer</li> --}}
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="col-md-4 mt-sm-30 typo-sec">
                        <h3 class="mb-20">Ordered List</h3>
                        <div class="">
                            <ol class="ordered-list">
                                <li><span>Fta Keys</span></li>
                                <li><span>For Women Only Your Computer Usage</span></li>
                                <li><span>Facts Why Inkjet Printing Is Very Appealing</span>
                                    <ol class="ordered-list-alpha">
                                        <li><span>Addiction When Gambling Becomes</span>
                                            <ol class="ordered-list-roman">
                                                <li><span>Protective Preventative Maintenance</span></li>
                                            </ol>
                                        </li>
                                    </ol>
                                </li>
                                <li><span>Dealing With Technical Support 10 Useful Tips</span></li>
                                <li><span>Make Myspace Your Best Designed Space</span></li>
                                <li><span>Cleaning And Organizing Your Computer</span></li>
                            </ol>
                        </div>
                    </div> --}}
                </div>
            </div>
            {{-- <div class="section-top-border">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <h3 class="mb-30">Form Element</h3>
                        <form action="#">
                            <div class="mt-10">
                                <input type="text" name="first_name" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
                            </div>
                            <div class="input-group-icon mt-10">
                                <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                                <input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required class="single-input">
                            </div>
                            <div class="input-group-icon mt-10">
                                <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                <div class="form-select" id="default-select">
                                    <select>
                                        <option value="1">City</option>
                                        <option value="1">Dhaka</option>
                                        <option value="1">Dilli</option>
                                        <option value="1">Newyork</option>
                                        <option value="1">Islamabad</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-group-icon mt-10">
                                <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                <div class="form-select" id="default-select2">
                                    <select>
                                        <option value="1">Country</option>
                                        <option value="1">Bangladesh</option>
                                        <option value="1">India</option>
                                        <option value="1">England</option>
                                        <option value="1">Srilanka</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="mt-10">
                                <textarea class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required></textarea>
                            </div>
                            <div class="mt-10">
                                <input type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'" required class="single-input-primary">
                            </div>
                            <div class="mt-10">
                                <input type="text" name="first_name" placeholder="Accent color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Accent color'" required class="single-input-accent">
                            </div>
                            <div class="mt-10">
                                <input type="text" name="first_name" placeholder="Secondary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Secondary color'" required class="single-input-secondary">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-sm-30 element-wrap">
                        <div class="single-element-widget">
                            <h3 class="mb-30">Switches</h3>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>01. Sample Switch</p>
                                <div class="primary-switch">
                                    <input type="checkbox" id="default-switch">
                                    <label for="default-switch"></label>
                                </div>
                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>02. Primary Color Switch</p>
                                <div class="primary-switch">
                                    <input type="checkbox" id="primary-switch" checked>
                                    <label for="primary-switch"></label>
                                </div>
                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>03. Confirm Color Switch</p>
                                <div class="confirm-switch">
                                    <input type="checkbox" id="confirm-switch" checked>
                                    <label for="confirm-switch"></label>
                                </div>
                            </div>
                        </div>
                        <div class="single-element-widget">
                            <h3 class="mb-30">Selectboxes</h3>
                            <div class="default-select" id="default-select">
                                <select>
                                    <option value="1">English</option>
                                    <option value="1">Spanish</option>
                                    <option value="1">Arabic</option>
                                    <option value="1">Portuguise</option>
                                    <option value="1">Bengali</option>
                                </select>
                            </div>
                        </div>
                        <div class="single-element-widget">
                            <h3 class="mb-30">Checkboxes</h3>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>01. Sample Checkbox</p>
                                <div class="primary-checkbox">
                                    <input type="checkbox" id="default-checkbox">
                                    <label for="default-checkbox"></label>
                                </div>
                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>02. Primary Color Checkbox</p>
                                <div class="primary-checkbox">
                                    <input type="checkbox" id="primary-checkbox" checked>
                                    <label for="primary-checkbox"></label>
                                </div>
                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>03. Confirm Color Checkbox</p>
                                <div class="confirm-checkbox">
                                    <input type="checkbox" id="confirm-checkbox">
                                    <label for="confirm-checkbox"></label>
                                </div>
                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>04. Disabled Checkbox</p>
                                <div class="disabled-checkbox">
                                    <input type="checkbox" id="disabled-checkbox" disabled>
                                    <label for="disabled-checkbox"></label>
                                </div>
                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>05. Disabled Checkbox active</p>
                                <div class="disabled-checkbox">
                                    <input type="checkbox" id="disabled-checkbox-active" checked disabled>
                                    <label for="disabled-checkbox-active"></label>
                                </div>
                            </div>
                        </div>
                        <div class="single-element-widget">
                            <h3 class="mb-30">Radios</h3>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>01. Sample radio</p>
                                <div class="primary-radio">
                                    <input type="checkbox" id="default-radio">
                                    <label for="default-radio"></label>
                                </div>
                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>02. Primary Color radio</p>
                                <div class="primary-radio">
                                    <input type="checkbox" id="primary-radio" checked>
                                    <label for="primary-radio"></label>
                                </div>
                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>03. Confirm Color radio</p>
                                <div class="confirm-radio">
                                    <input type="checkbox" id="confirm-radio" checked>
                                    <label for="confirm-radio"></label>
                                </div>
                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>04. Disabled radio</p>
                                <div class="disabled-radio">
                                    <input type="checkbox" id="disabled-radio" disabled>
                                    <label for="disabled-radio"></label>
                                </div>
                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>05. Disabled radio active</p>
                                <div class="disabled-radio">
                                    <input type="checkbox" id="disabled-radio-active" checked disabled>
                                    <label for="disabled-radio-active"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- End Align Area -->
@endsection
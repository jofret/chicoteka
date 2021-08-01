<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Title -->
    <title>Chicoteca - Organizamos tu fiesta</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">

    <link rel="stylesheet" href="{{asset('assets/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/./img/core-img/favicon.png') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- Stylesheet -->

    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/cssok.css') }}">
    <!-- myStylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/jofretStyles.css') }}">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="conferNav">

                    <!-- Logo -->
                    <a class="nav-brand" href=""><img src="{{ asset('assets/img/core-img/chicoteka-en-lima.png') }}" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <!--li class="active"><a href="index.html">Inicio</a></li-->
                                <li><a class="js-scroll-trigger" href="#about">Bienvenido</a></li>
                                <li><a class="js-scroll-trigger" href="#contactenos">Contáctanos</a></li>
                                <li><a class="js-scroll-trigger" href="#servicios">Servicios</a></li>
                                <li><a class="js-scroll-trigger" href="#publicaciones">Publicaciones</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url({{ asset('assets/img/bg-img/01.jpg') }} );">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text text-right">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Chicoteka <br>Producciones</h2>
                                <h6 data-animation="fadeInUp" data-delay="500ms">DJ , Equipo de Sonido , Luces & Efectos ,  Burbujas / Humo...</h6>
                                <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
                                    <a href="https://api.whatsapp.com/send?phone=51986731751" class="btn confer-btn">Click <i class="lni-whatsapp"></i> WhatsApp</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay jarallax" 
            style="background-image: url({{ asset('assets/img/bg-img/chicoteca-luces.jpg') }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text-two text-center">
                                <h5 data-animation="fadeInUp" data-delay="100ms">Organizamos Tu Fiesta</h5>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Creamos tu evento</h2>
                                <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
                                    <a href="https://api.whatsapp.com/send?phone=51986731751" class="btn confer-btn m-2">Click <i class="lni-whatsapp"></i> WhatsApp </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Icon -->
        <div class="icon-scroll" id="scrollDown"></div>
    </section>
    <!-- Welcome Area End -->

    <!-- About Us And Countdown Area Start -->
    <section class="about-us-countdown-area section-padding-100-0" id="about">
        <div class="container">
            <div class="row align-items-center">
                <!-- About Content -->
                <div class="col-12 col-md-6">
                    <div class="about-content-text mb-80">
                        <h6 class="wow fadeInUp" data-wow-delay="300ms">Nosotros</h6>
                        <h3 class="wow fadeInUp" data-wow-delay="300ms">Bienvenidos a Chicoteka Producciones</h3>
                        <p class="wow fadeInUp" data-wow-delay="300ms">Somos una Empresa con mas de 06 Años de Experiencia . Experiencia Amplia en el Rubro de Niños / Adolescentes / Adultos . Contamos con un Equipo de Trabajo con Experiencia en todo los Eventos . Fiesta de Promoción / 15 Años / Bodas / Graduaciones / 18 Años / Empresas Corporativas .<br>
                        Gracias Lima-Perú . Gracias Clientes .<br>
                        Vamos por más . Rumbo al Éxito .  </p>
                        <a href="#contactenos" class="btn confer-btn mt-50 wow fadeInUp js-scroll-trigger" data-wow-delay="300ms">Continuar <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>

                <!-- About Thumb -->
                <div class="col-12 col-md-6">
                    <div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <img src="{{ asset('assets/img/bg-img/chicoteka-producciones.jpg') }}" alt="chicoteka producciones">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us And Countdown Area End -->



    <!-- Contact Area Start -->
    <section class="contact-our-area section-padding-100-0" id="contactenos">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Tienes alguna pregunta?</p>
                        <h4>Contáctanos</h4>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-12 col-sm-3">
                    <div class="contact-information mb-100">
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Dirección:</p>
                            <h6>La Victoria Lima - Perú</h6>
                             <p>(Previa cita)</p>   
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Teléfono:</p>
                            <h6>986 731 751</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Email:</p>
                            <h6>contactos@chicoteca.pe</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Website:</p>
                            <h6>www.chicoteka.pe</h6>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-8">
                    <!-- Contact Form -->
                    <div class="contact_from_area mb-100 clearfix wow fadeInUp" data-wow-delay="300ms">
                        <div class="contact_form">
                            <form action="{{ asset('submit/contact_process.php')}}" method="post" id="main_contact_form">
                                <div class="contact_input_area">
                                    <div id="success_fail_info"></div>
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="name" id="name" placeholder="Nombre" required data-error="Por favor ingresa tu nombre">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="lastname" id="lastname" placeholder="Apellido" required data-error="Por favor ingresa tu apellido">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control mb-30" name="email" id="email" placeholder="E-mail" required data-error="Por favor ingresa tu email">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="telephone" id="telephone" placeholder="Teléfono" required data-error="Por favor ingresa tu telefono">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control mb-30" id="message" cols="30" rows="6" placeholder="Tu mensaje *"></textarea>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12">
                                            <button type="submit" class="btn confer-btn">Enviar mensaje <i class="zmdi zmdi-long-arrow-right"></i></button>
                                            <div class="form-group">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->

     <!-- Video Area  -->
    <div class="site-wrap">
      <div class="site-blocks-cover overlay inner-page-cover" 
      style="background-image: url({{ asset('assets/img/bg-img/chicoteka.jpg') }}); background-attachment: fixed;">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-7" data-aos="fade-up" data-aos-delay="400">
              <a href="https://www.youtube.com/watch?v=xqfhhe2NqNs" class="play-single-big mb-4 d-inline-block popup-vimeo"><span><i class="lni-play"></i></span></a>
              <h2 class="text-white font-weight-light mb-5 h1">Video Institucional Chicotecas en Lima</h2>
              
            </div>
          </div>
        </div>
      </div>  
    </div>
    <!-- Video Area End -->

    <!-- Our Ticket Pricing Table Area Start -->
    <section class="our-ticket-pricing-table-area bg-img bg-gradient-overlay section-padding-100-0 jarallax" style="background-image: url({{ asset('assets/img/bg-img/14Fondo.jpg') }})"  id="servicios">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Vive la diversión</p>
                        <h4>Nuestros Paquetes</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-lg-4">
                    <div class="single-ticket-pricing-table text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Servicios variados</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="{{ asset('assets/img/core-img/chicotekaAdulto.png') }}" alt="">
                        </div>
                                          
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> DJ / Equipo de Sonido</p>
                            <p><i class="zmdi zmdi-check"></i> Luces & Efectos</p>
                            <p><i class="zmdi zmdi-check"></i> Burbujas / Humo</p>
                            <p><i class="zmdi zmdi-check"></i> Hora Loca</p>
                            <p><i class="zmdi zmdi-check"></i> Tragos Coloridos</p>
                                                      
                            <p><i class="zmdi zmdi-check"></i> Karaoke</p>
                            <p><i class="zmdi zmdi-check"></i> Sillones Led</p>
                            <!--<p><i class="zmdi zmdi-check"></i> Animación / Show de Magia</p>
                            <p><i class="zmdi zmdi-check"></i> Open Bar / Refrescos Virgenes</p>
                            <p><i class="zmdi zmdi-check"></i> Mozos</p>
                            <p><i class="zmdi zmdi-check"></i> Maestro de Ceremonia</p> -->
                                    
                        </div>
                        <a href="#" class="btn confer-btn w-100 mb-30">Más información<i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-ticket-pricing-table active text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Fiesta de Promoción</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="{{ asset('assets/img/core-img/chicoteka.png') }}" alt="chicoteka eventos">
                        </div>
                        <!--h2 class="ticket-price"><span>$</span>99</h2-->
                        
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> Luces & Sonido (DJ)</p>
                            <p><i class="zmdi zmdi-check"></i> Locales</p>
                            <p><i class="zmdi zmdi-check"></i> Decoración</p>
                            <p><i class="zmdi zmdi-check"></i> Maestro de Ceremonia</p>
                            <p><i class="zmdi zmdi-check"></i> Show Infantil & Hora Loca</p>
                            
                            <p><i class="zmdi zmdi-check"></i> Mesas</p>
                            <p><i class="zmdi zmdi-check"></i> Buffet</p>
                            <!--<p><i class="zmdi zmdi-check"></i> Tortas</p>
                            <p><i class="zmdi zmdi-check"></i> Fotografía & Video</p>
                            <p><i class="zmdi zmdi-check"></i> Anuario</p> 
                            <p><i class="zmdi zmdi-check"></i> Coreografia</p>
                            <p><i class="zmdi zmdi-check"></i> Servicio de Open Bar</p>-->   
                        </div>
                        <a href="#" class="btn confer-btn w-100 mb-30">Más información<i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-ticket-pricing-table text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Todo Tipo de eventos</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="{{ asset('assets/img/core-img/eventos.png') }}" alt="">
                        </div>
                                                
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> 15 Años</p>
                            <p><i class="zmdi zmdi-check"></i> Bodas</p>
                            <p><i class="zmdi zmdi-check"></i> 18 Años</p>
                            <p><i class="zmdi zmdi-check"></i> Graduaciones</p>
                            <p><i class="zmdi zmdi-check"></i> Fiesta de promoción <br>
                                                               Inicial - Primaria - Secundaria</p>
                            
                            <p><i class="zmdi zmdi-check"></i> Despedida de solteros</p>
                            <!--<p><i class="zmdi zmdi-check"></i> Chicotekas</p>
                            <p><i class="zmdi zmdi-check"></i> Cermonias</p>
                            <p><i class="zmdi zmdi-check"></i> Activaciones</p>
                            <p><i class="zmdi zmdi-check"></i> Inauguraciones</p>
                            <p><i class="zmdi zmdi-check"></i> Robot Led - Fiestas</p>
                            <p><i class="zmdi zmdi-check"></i> Eventos</p> --> 
                        </div>
                        <a href="#" class="btn confer-btn w-100 mb-30">Más información <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Ticket Pricing Table Area End -->

    <!--parte del blog para yield-->

    @yield('content')

    <!--end parte del blog para yield-->

    <!-- Footer Area Start -->
    @include('includes.footer')


   
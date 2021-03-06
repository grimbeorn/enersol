<!DOCTYPE html>
<html lang="es-MX">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sonnen | Instalaciones Fotovoltáicas</title>
    <!-- <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}"> -->
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>   
  </head>

  <body class="size-1280">
    <!-- HEADER -->
    <header role="banner" class="position-absolute">    
      <!-- Top Navigation -->
      <nav class="background-transparent background-primary-dott full-width sticky">          
        <div class="top-nav"> 
          <!-- mobile version logo -->              
          <div class="logo hide-l hide-xl hide-xxl">
            <a href="index.html" class="logo">
              <!-- Logo White Version -->
              <img class="logo-white" src="img/logoAbeja_002.svg" alt="">
              <!-- Logo Dark Version -->
              <img class="logo-dark" src="img/logoAbeja_001.svg" alt="">
            </a>
          </div>                  
          <p class="nav-text"></p>
          <!-- left menu items -->
          <div class="top-nav left-menu">
             <ul class="right top-ul chevron">
                <li><a href="{{ url('/') }}">Sonnen</a></li>
                <li> 
                  <a>Energías Renovables</a>
                  <ul>
                    <li><a href="{{ url('/residencial') }}">Fotovoltáico Residencial</a></li>
                    <li><a href="{{ url('/industrial') }}">Fotovoltáico Industrial</a></li>
                  </ul>
                </li>
             </ul>
          </div>
          <!-- logo -->
          <ul class="logo-menu">
            <a href="{{ url('/') }}" class="logo">
              <!-- Logo White Version -->
              <img class="logo-white" src="img/logoAbeja_002.svg" alt="">
              <!-- Logo Dark Version -->
              <img class="logo-dark" src="img/logoAbeja_001.svg" alt="">
            </a>
          </ul>
          <!-- right menu items -->
          <div class="top-nav right-menu">
             <ul class="top-ul chevron">
                <li><a href="{{ url('/ahorro') }}">Ahorro</a></li>
                <li><a href="{{ url('/contacto') }}">Contacto</a></li>
             </ul> 
          <!-- <div style="float: right"><p style="padding-right: 10px" color:"white">texto</p></div> -->
          </div>
        </div>
      </nav>
    </header>
    
    <!-- MAIN -->
    <main role="main">
      @yield('content')    
    </main>
    
    <!-- FOOTER -->
    <footer>
      <!-- Main Footer -->
      <section class="section background-dark">
        <div class="line"> 
          <div class="margin2x">
            <div class="s-12 m-6 l-3 xl-5">
               <h4 class="text-white text-strong">Nuestra Misión</h4>
               <p>
                 <b class="text-size-20">Generar bienestar</b> para nuestros clientes y colaboradores mediante la oferta de alternativas de consumo energético, <b class="text-size-20">altamente rentables</b>, para el sector residencial e industrial. 
               </p>
            </div>
            <div class="s-12 m-6 l-3 xl-2">
               <h4 class="text-white text-strong margin-m-top-30">Links</h4>      
               <a class="text-primary-hover" href="{{ url('/contacto') }}">Contact Us</a><br>
            </div>
            <div class="s-12 m-6 l-3 xl-2">
               <h4 class="text-white text-strong margin-m-top-30">Términos de Uso</h4>
               <a class="text-primary-hover" href="page.html">Términos y Condiciones</a><br>
            </div>
            <div class="s-12 m-6 l-3 xl-3">
               <h4 class="text-white text-strong margin-m-top-30">Contacto CDMX</h4>
                <p><i class="icon-sli-screen-smartphone text-primary"></i> 55 8421 4610</p>
                <a class="text-primary-hover" href="mailto:contacto@sonnen.mx"><i class="icon-sli-mouse text-primary"></i> contacto@sonenn.mx</a><br>
                <a class="text-primary-hover" href="mailto:proyectos@sonnen.mx"><i class="icon-sli-mouse text-primary"></i> proyectos@sonenn.mx</a>
            </div>
          </div>  
        </div>    
      </section>
      <div class="background-dark">
         <div class="line">
            <hr class="break margin-top-bottom-0" style="border-color: #777;">
         </div>
      </div>
      <!-- Bottom Footer -->
      <section class="padding-2x background-dark full-width">
        <div class="line">
          <div class="s-12 l-6">
            <p class="text-size-12">Copyright 2019, Orange Code Design - Madrid</p>
            <!-- <p class="text-size-12">All images have been purchased from Bigstock. Do not use the images in your website.</p> -->
          </div>
          <div class="s-12 l-6">
            <a class="right text-size-12 text-primary-hover" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding<br> by Orange Code</a>
          </div>
        </div>  
      </section>
    </footer>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>
  </body>
</html>
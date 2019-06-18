@extends('layouts.app')

@section('content')
<main role="main"> 
	<!-- MAIN -->
  <!-- <header class="section background-image text-center" style="background-image:url(img/original/residencial_001.jpeg)"> -->
  <header class="section background-image text-center" style="background-image:url(img/reducido/residencial02.jpg)">
    <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
      FOTOVOLTÁICO RESIDENCIAL
    </h1>
    <p class="animated-element text-white">Expertos en Instalaciones Residenciales</p>
    <!-- white full width arrow object -->
    <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
  </header>
      
  <!-- Section 1 -->
  <section class="section-top-padding background-white">
    <div class="line text-center">
      <i class="icon-sli-energy text-primary text-size-40"></i>
      <h2 class="text-dark text-size-50 text-m-size-40">Instalaciones <b>Residenciales</b></h2>
      <hr class="break background-primary break-small break-center margin-bottom-50">
    </div>
    <div class="line">
      <div class="margin2x">
        <div class="s-12 m-6 l-4 margin-bottom-60">
          <div class="float-left">
            <i class="icon-sli-info text-primary text-size-40 text-line-height-1"></i>
          </div>
          <div class="margin-left-60">
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">01. Información General</h3>
            <p>Te solicitamos información general de tu casa; dirección, consumo actual y un recibo de luz.</p>
            <!-- <a class="text-more-info text-primary" href="/">Read more</a>  -->               
          </div>
        </div>
        <div class="s-12 m-6 l-4 margin-bottom-60">
          <div class="float-left">
            <i class="icon-sli-target text-primary text-size-40 text-line-height-1"></i>
          </div>
          <div class="margin-left-60">
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">02. Visita y Anteproyecto</h3>
            <p>Una vez que hemo sidentificado tu casa, hacemos un cálculo preliminar. Es probable que en esta etapa, necesitemos ampliar la información, por lo que -si fuera nceseario- te haríamo suna visita.</p>
            <!-- <a class="text-more-info text-primary" href="/">Read more</a>  -->               
          </div>
        </div>
        <div class="s-12 m-6 l-4 margin-bottom-60">
          <div class="float-left">
            <i class="icon-sli-note text-primary text-size-40 text-line-height-1"></i>
          </div>
          <div class="margin-left-60">
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">03. Proyecto Ejecutivo</h3>
            <p>Cuando tenemos lista y verificada toda la información, realizamos el proyecto a detalle y te lo presentamos.</p>
            <!-- <a class="text-more-info text-primary" href="/">Read more</a> -->                 
          </div>
        </div>
      </div>
    </div>
    <div class="line">
      <div class="margin2x">
        <div class="s-12 m-6 l-4 margin-m-bottom-60">
          <div class="float-left">
            <i class="icon-sli-wrench text-primary text-size-40 text-line-height-1"></i>
          </div>
          <div class="margin-left-60">
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">04. Instalación</h3>
            <p>Con base en el proyecto ejecutivo se realiza la instalación del sistema fotovoltáico. El tiempo de ejecución varía del tipo de inmueble y la cantidad de paneles a instalar.</p>         
          </div>
        </div>
        <div class="s-12 m-6 l-4 margin-m-bottom-60">
          <div class="float-left">
            <i class="icon-sli-check text-primary text-size-40 text-line-height-1"></i>
          </div>
          <div class="margin-left-60">
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">05. Puesta a Punto</h3>
            <p>Nuestra área de calidad hace una revisión de la instalación, donde verificamos que esté completa, bien hecha y funcionando.</p>             
          </div>
        </div>
        <div class="s-12 m-6 l-4 margin-m-bottom-60">
          <div class="float-left">
            <i class="icon-sli-graph text-primary text-size-40 text-line-height-1"></i>
          </div>
          <div class="margin-left-60">
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">06. Rendimiento</h3>
            <p>Toda vez que la instalación está hecha y funcionando, comenzarás a ver crecer tu inversión.</p>          
          </div>
        </div>
      </div>
    </div>
  </section>
      
  <!-- Section 2 -->
  <br><br><br><br><br>
  <section class="background-primary full-width">        
    <div class="m-12 l-6 xl-5 xxl-4">
      <!-- <img class="full-img" src="img/original/residencial_002.jpeg"/> -->
      <img class="full-img" src="img/reducido/residencial_002-Copy.jpeg"/>
    </div>         
    <div class="m-12 l-6 xl-7 xxl-8">
      <div class="l-12 xl-11 xxl-8 padding-2x">
        <h2 class="text-l-size-40 text-size-50 text-white">Nuestro <b>Compromiso</b></h2>
        <p class="margin-bottom">Las instalaciones fotovoltáicas en régimen de autoconsumo residencial permiten reducir la  facturación mensual de forma drástica, llegando a consumos nulos.
          El sistema estructural sobre el que se desplanta el sistema fotovoltáico, permite la colocación de los paneles de forma rápida y sin dañar la estructura primaria de la vivienda.
          La instalación eléctrica, obras auxiliares y todo lo necesario corre por nuestra cuenta para que no tengas que precuparte por nada.</p>
        <img class="margin-left-20 margin-top-30 margin-bottom-60" src="img/start-your-business.svg" alt="">
      </div>  
    </div>
  </section>
</main>
	
@endsection

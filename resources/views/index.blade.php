@extends('layouts.app')

@section('content')
<main role="main"> 
	<!-- Header -->
	<header class="section background-image text-center" style="background-image:url(img/adobe/enersol_002.jpeg)">
	  <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
	    <!-- <b>ENERSOL</b> -->
	    ENERSOL
	  </h1>
	  <p class="animated-element text-white">expertos en instalaciones fotovoltáicas</p>
	  <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
	</header>
	<!-- Section 1 -->
	<section class="section background-white">
	  <div class="line text-center">
	    <i class="icon-sli-home text-primary text-size-40"></i>
	    <h2 class="text-dark text-size-50 text-m-size-40">¿ Quiénes <b>Somos ?</b></h2>
	    <hr class="break background-primary break-small break-center margin-bottom-50">
	  </div>
	  <div class="line">
	    <div class="margin2x">
	      <div class="m-12 l-6 margin-m-bottom-30">
	        <img src="img/adobe/instalacion_001.jpeg" alt="">
	      </div>          
	      <div class="m-12 l-6">
	        <h3 class="animated-element text-strong text-size-20 text-line-height-1 margin-bottom-20">En Enersol :</h3>
	        <p class="animated-element slow margin-bottom-30">
	        	<ul>
		        	<li>ofrecemos experiencia de más de 10 años en el sector.</li>
		        	<li>aunamos experiencia, versatilidad, capacidad y compromiso.</li>
		        	<li>consideramos siempre el costo de nuestras propuestas de forma que la solución, además de ser óptima, sea económicamente rentable y ejecutable.</li>
		        	<li>aportamos racionalidad al diseño, considerando los tiempos de traslado y montaje del sistema.</li>
		        	<li>queremos satisfacer los estándares de calidad de nuestros clientes, adaptándonos a las sigularidades de cada proyecto.</li>
	        	</ul>
	        </p>
	      </div>
	    </div>    
	  </div>  
	</section>
</main>

@endsection
@extends('layouts.app')

@section('content')
<!-- MAIN -->
<main role="main">
  <article>    
    <!-- Header -->
    <header class="section background-image text-center" style="background-image:url(img/adobe/contacto_003.jpeg)">
      <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
        contacto
      </h1>
      <p class="animated-element text-white">queremos saber de ti</p>
      <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
    </header>
    <!-- Section 1 -->
    <section class="section-small-padding background-white text-center">      
      <div class="line">
        <i class="icon-sli-phone text-primary text-size-40"></i>
        <h2 class="text-dark text-size-50 text-m-size-40">Dónde <b class="text-primary">Encontrarnos ?</b></h2>
      </div>                                                                                                    
    </section>
    <!-- Section 2 -->
    <section class="full-width background-grey">
      <div class="m-12 l-6 center">
        <div class="padding-3x">
          <div class="margin2x">
            
            <div class="l-12 xl-6 margin-bottom-60">
              <div class="float-left">
                <i class="icon-sli-earphones-alt text-primary text-size-40 text-line-height-1"></i>
              </div>
              <div class="margin-left-60">
                <h2 class="text-size-20 margin-bottom-10 text-strong">Teléfono</h2>                
                <p>55 8421 4610</p>             
              </div>
            </div>
            <div class="l-12 xl-6 margin-bottom-60">
              <div class="float-left">
                <i class="icon-sli-envelope text-primary text-size-40 text-line-height-1"></i>
              </div>
              <div class="margin-left-60">
                <h2 class="text-size-20 margin-bottom-10 text-strong">E-mail</h2>                
                <p><a class="text-primary-hover" href="mailto:contact@sampledomain.com">contacto@enersol.mx</a></p>
                <p><a class="text-primary-hover" href="mailto:office@sampledomain.com">proyectos@enersol.mx</a></p>               
              </div>
            </div>
            <div class="l-12 xl-6 margin-bottom-60">
              <div class="float-left">
                <i class="icon-sli-location-pin text-primary text-size-40 text-line-height-1"></i>
              </div>
              <div class="margin-left-60">
                <h2 class="text-size-20 margin-bottom-10 text-strong">Dirección</h2>                
                <p>Colina de Buenaventura 47</p>
                <p>Boulevares, Naucalpan de Juárez</p>
                <p>C.P. 53140, Estado de México, México</p>             
              </div>
            </div>
            <!-- <div class="l-12 xl-6">
              <div class="float-left">
                <i class="icon-sli-paper-plane text-primary text-size-40 text-line-height-1"></i>
              </div>
              <div class="margin-left-60">
                <h2 class="text-size-20 margin-bottom-10 text-strong">Billing information</h2>
                <p>Hendrerit in vulputate duis autem vel eum iriure dolor in velit esse molestie consequat, vel illum dolore nulla facilisis</p>                 
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </section>

    <!-- Section 3 -->

    <!-- <section class="section-small-padding background-grey">   --> 
    <a href="mensajeEnviar" id="mensajeEnviar">
      <div class="margin2x">
      @if (session('notification'))
        <div class="padding text-left" style="background-color:#F0FFF0">
          <!-- <div class="alert alert-success"> -->
          <ul>
            <li style="color:#008000">{{ session('notification') }}</li>
          </ul>
        </div>
      @endif

      @if ($errors->any())
        <div class="padding text-left" style="background-color:#FFE4E1">
        <!-- <div class="alert alert-danger"> -->
          <ul>
            @foreach ($errors->all() as $error)
              <li style="color:#8B0000">{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      </div>
    </a>
    <!-- </section> -->

    
    <!-- Section 4-->
    <section class="section background-dark">
      <div class="s-12 m-12 l-4 center">
        <h3 class="text-size-30 margin-bottom-40 text-center"><b>Formulario de Contacto</b></h3>
        <form class="customform text-white" method="post" enctype="multipart/form-data" action="{{ url('/contact') }}">
          {{ csrf_field() }}
          <div class="line">
            <div class="margin">
              <div class="s-12 m-12 l-6">
                <input name="correo" class="required email" placeholder="Correo electrónico" title="Your e-mail" type="text" value="{{ old('correo') }}"/>
              </div>
              <div class="s-12 m-12 l-6">
                <input name="telefono" class="required subject" placeholder="Teléfono" title="Subject" type="text" value="{{ old('telefono') }}"/>
              </div>
            </div>
          </div>                       
          <div class="line">       
            <div class="s-12">
              <input name="nombre" class="required name" placeholder="Nombre" title="Your name" type="text" value="{{ old('nombre') }}"/>
            </div>
            <div class="s-12">
              <textarea name="mensaje" class="required message" placeholder="Mensaje" rows="4">{{ old('mensaje') }}</textarea>
            </div>
            <div class="s-12"><button class="button border-radius text-white background-primary" type="submit">Enviar</button></div>
          </div>    
        </form>

      </div>           
    </section>
  </article>

</main>

@endsection

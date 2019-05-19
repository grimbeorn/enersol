@extends('layouts.app')

@section('content')
<!-- MAIN -->
<main role="main">
  <article>    
    <!-- Header -->
    <header class="section background-image text-center" style="background-image:url(img/adobe/contacto_002.jpg)">
      <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
        contacto
      </h1>
      <p class="animated-element text-white">Duis autem vel eum iriure dolor in hendrerit in</p>
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
                <i class="icon-sli-location-pin text-primary text-size-40 text-line-height-1"></i>
              </div>
              <div class="margin-left-60">
                <h2 class="text-size-20 margin-bottom-10 text-strong">Company Address</h2>                
                <p>Aviation Way 99</p>
                <p>Los Angeles, USA</p>             
              </div>
            </div>
            <div class="l-12 xl-6 margin-bottom-60">
              <div class="float-left">
                <i class="icon-sli-envelope text-primary text-size-40 text-line-height-1"></i>
              </div>
              <div class="margin-left-60">
                <h2 class="text-size-20 margin-bottom-10 text-strong">E-mail</h2>                
                <p><a class="text-primary-hover" href="mailto:contact@sampledomain.com">contact@sampledomain.com</a></p>
                <p><a class="text-primary-hover" href="mailto:office@sampledomain.com">office@sampledomain.com</a></p>               
              </div>
            </div>
            <div class="l-12 xl-6 margin-bottom-60">
              <div class="float-left">
                <i class="icon-sli-earphones-alt text-primary text-size-40 text-line-height-1"></i>
              </div>
              <div class="margin-left-60">
                <h2 class="text-size-20 margin-bottom-10 text-strong">Phone Numbers</h2>                
                <p>0800 4521 800 50</p>
                <p>0450 5896 625 16</p>
                <p>0798 6546 465 </p>               
              </div>
            </div>
            <div class="l-12 xl-6">
              <div class="float-left">
                <i class="icon-sli-paper-plane text-primary text-size-40 text-line-height-1"></i>
              </div>
              <div class="margin-left-60">
                <h2 class="text-size-20 margin-bottom-10 text-strong">Billing information</h2>
                <p>Hendrerit in vulputate duis autem vel eum iriure dolor in velit esse molestie consequat, vel illum dolore nulla facilisis</p>                 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section 3 -->
    <!-- <section class="section background-dark">
      <div class="s-12 m-12 l-4 center">
        <h3 class="text-size-30 margin-bottom-40 text-center">Formulario de Contacto</h3>
        <form class="customform text-white needs-validation" method="post" action="{{ url('/contact2') }}" novalidate>
          {{ csrf_field() }}
          <div class="line">
            <div class="margin">
              <div class="s-12 m-12 l-6">
                <input type="email" class="form-control" id="correo" name="correo"  placeholder="Correo Electrónico *" value="{{ old('correo') }}" required/>
              </div>
              <div class="s-12 m-12 l-6">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre *" value="{{ old('nombre') }}" required/>
              </div>
            </div>
          </div>                         
          <div class="line">   
            <div class="s-12">
              <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono *" value="{{ old('telefono') }}" required/>
            </div>
            <div class="s-12">
              <textarea type="text" class="form-control" id="mensaje" name="mensaje" placeholder="Mensaje *" rows="3">{{ old('mensaje') }}</textarea>
            </div>
          </div>  
          <button class="button border-radius text-white background-primary">Enviar</button>
        </form>
      </div>           
    </section> -->
    <section class="section background-dark">
      <div class="s-12 m-12 l-4 center">
        <h3 class="text-size-30 margin-bottom-40 text-center"><b>Formulario de Contacto</b></h3>
        <form class="customform text-white" method="post" enctype="multipart/form-data">
          <div class="line">
            <div class="margin">
              <div class="s-12 m-12 l-6">
                <input name="email" class="required email" placeholder="Correo electrónico" title="Your e-mail" type="text" />
              </div>
              <div class="s-12 m-12 l-6">
                <input name="subject" class="required subject" placeholder="Teléfono" title="Subject" type="text" />
              </div>
            </div>
          </div>                       
          <div class="line">       
            <div class="s-12">
              <input name="name" class="required name" placeholder="Nombre" title="Your name" type="text" />
            </div>
            <div class="s-12">
              <textarea name="message" class="required message" placeholder="Mensaje" rows="4"></textarea>
            </div>
            <div class="s-12"><button class="button border-radius text-white background-primary" type="submit">Enviar</button></div>
          </div>    
        </form>
      </div>           
    </section>
  </article>

</main>

@endsection

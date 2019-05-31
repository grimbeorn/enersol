@extends('layouts.app')

@section('content')
<!-- MAIN -->
<main role="main">

  <article>    
    <!-- Header -->
    <header class="section background-image text-center" style="background-image:url(img/adobe/cuantoCuesta_002.jpeg)">
      <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
        cuánto cuesta
      </h1>
      <p class="animated-element text-white">expertos en ahorros energéticos</p>
      <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
    </header>
    <!-- Section 1 -->
    <section class="section-small-padding background-white text-center">      
      <div class="line">
        <!-- https://www.myresponsee.com/responsive-framework-doc/font-icon-set/ -->
        <i class="icon-sli-info text-primary text-size-40"></i>
        <h2 class="text-dark text-size-50 text-m-size-40">Cuánto <b class="text-primary">Cuesta ?</b></h2>
      </div>                                                                                                    
    </section>

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

    <!-- Section 2 -->
    <section class="full-width background-grey">
      <div class="m-12 l-6">
        <div class="padding-3x">
          <div class="line">
        <div class="margin2x">
          <div class="m-12 l-6 margin-bottom-60">
            <div class="float-left">
              <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Deleniti pertinacia eu est</h3>
              <p>
                Lorem ipsum dolor sit amet, an eam legere quidam. Ius at melius efficiantur, vide dicam adolescens cum ea, his et quem graeci malorum. 
                No dico cetero definiebas has, consul reformidans ea sea, nec et lorem minimum. Eam aeque pertinacia id, cum ad summo minimum nominavi.
                <p class="text-padding-small background-primary text-white s-12 margin-top-bottom-20">Integre probatus accusata ne est</p>                    
                Detraxit deseruisse voluptatibus ea mei, deseruisse efficiendi omittantur ei mel. Te mutat mnesarchum moderatius quo.
                Ut labore laboramus has, eu eius malis assueverit eos. Integre probatus accusata ne est, id fuisset detracto sit, vix ad sensibus mandamus. 
                Eu vim quot habemus lucilius, ius eu placerat apeirian. Quo erat dolore ornatus ut, an commodo repudiare honestatis nec.
              </p>                                                      
            </div>
          </div>
          <div class="m-12 l-6 margin-bottom-60">
            <div class="float-left">
              <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Quo erat dolore ornatus ut</h3>
              <p>
                Lorem ipsum dolor sit amet, an eam legere quidam. Ius at melius efficiantur, vide dicam adolescens cum ea, his et quem graeci malorum. 
                No dico cetero definiebas has, consul reformidans ea sea, nec et lorem minimum. Eam aeque pertinacia id, cum ad summo minimum nominavi.
                <p class="text-padding-small background-primary text-white s-12 margin-top-bottom-20">Integre probatus accusata ne est</p>                    
                Detraxit deseruisse voluptatibus ea mei, deseruisse efficiendi omittantur ei mel. Te mutat mnesarchum moderatius quo.
                Ut labore laboramus has, eu eius malis assueverit eos. Integre probatus accusata ne est, id fuisset detracto sit, vix ad sensibus mandamus. 
                Eu vim quot habemus lucilius, ius eu placerat apeirian. Quo erat dolore ornatus ut, an commodo repudiare honestatis nec.
              </p>                                                      
            </div>
          </div>
        </div>
      </div>
        </div>
      </div>
      <div class="m-12 l-6">
        <br><br>
        <br>
        <h3 class="text-size-30 margin-bottom-40 text-center"><b>Envíanos tu Información</b></h3>
        <form class="customform text-black" method="post" enctype="multipart/form-data" action="{{ url('/data') }}">
          {{ csrf_field() }}
          <div class="line">
            <div class="margin">
              <div class="s-12 m-12 l-6">
                <input name="correo" class="required email" placeholder="Correo electrónico *" title="Your e-mail" type="text" value="{{ old('correo') }}"/>
              </div>
              <div class="s-12 m-12 l-6">
                <input name="telefono" class="required subject" placeholder="Teléfono *" title="Subject" type="text" value="{{ old('telefono') }}"/>
              </div>
            </div>
          </div>                       
          <div class="line">       
            <div class="s-12">
              <input name="nombre" class="required name" placeholder="Nombre *" title="Your name" type="text" value="{{ old('nombre') }}"/>
            </div>
            <div class="s-12">
              <textarea name="mensaje" class="required message" placeholder="Mensaje *" rows="4">{{ old('mensaje') }}</textarea>
            </div>

            <div class="s-12">
              <input name="adjuntar" class="required" type="file" id="adjuntar" style="color:#808080">
            </div>

            <div class="s-12"><button class="button border-radius text-white" type="submit" style="background-color:green">Enviar</button>
            </div>
          </div>    
        </form>
      </div>
    </section>
  </article>

</main>
	
@endsection

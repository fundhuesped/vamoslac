@extends('layouts.master')
@section('meta')

<title>donde.huesped.org.ar | Fundación Huésped - Paises con Servicios</title>
<meta name="google-site-verification" content="RQh3eES_sArPYfFybCM87HsV6mbwmttWlAIk-Upf1EQ" />
<meta name="description" content="Ubica centros centros de salud sexual y reproductiva y dónde hacerte la prueba de VIH en diferentes países">
<meta name="author" content="Fundación Huésped">
<link rel="canonical" href="https://www.huesped.org.ar/donde/"/>
<meta property='og:locale' content='es_LA'/>
<meta property='og:title' content='donde.huesped.org.ar | Fundación Huésped'/>
<meta property="og:description" content="Elige los países donde puedes acceder a servicios de salud sexual y reproductiva, buscar condones o preservativos gratis, ubicar centros de infectología y vacunatorios, y dónde hacerte la prueba de VIH.." />


@stop

@section('content')

{{-- <nav>
	<div class="nav-wrapper">
		<ul id="nav-mobile" class="left hide-on-med-and-down">
	        <li><a href="{{ url('/#/') }}"> <i class="mdi-navigation-chevron-left right"></i></a></li>
	        <li>INICIO</li>
	    </ul>
		<a href="{{ url('/#/') }}" class="brand-logo">
		<img class="logoTop" src="/images/HUESPED_logo_donde_RGB-07_cr.png"> </a>
	</div>
</nav>

 --}}

    <nav>
    <div class="nav-wrapper">
      <a href="{{ url('/#/') }}" class="brand-logo"><img class="logoTop" src="images/HUESPED_logo_donde_RGB-07_cr.png"> </a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      <ul class="right hide-on-med-and-down">
           <li><a class="modal-trigger" href="#modal1"><i class="mdi-action-info"></i></a></li>
           <li><a class="modal-trigger" href="/#/localizar/all/listado"><i class="mdi-maps-place left"></i></a></li>
           <li><a class="" href="/form"><i class="mdi-content-add-circle-outline"></i></a></li>
           <li><a class="" href="/listado-paises"><i class="mdi-action-language"></i></a></li>
      </ul>
      
      <ul ng-show="navigating"  class="left wow fadeIn nav-wrapper">
           <li style="width: 120px;"><a href="" onclick="window.history.back();"> <i class="mdi-navigation-chevron-left left"></i><span>Volver</span></a></li>
      </ul>

      <ul class="side-nav" id="mobile-demo">
          <li><a href="#/acerca">
            <i class="mdi-action-info left"></i>Información
            </a>
          </li>
          <li><a href="#/localizar/all/listado">
            <i class="mdi-maps-place left"></i>Cercanos</a></li>
          <li><a href="form">
            <i class="mdi-content-add-circle-outline left"></i>
            Sugerir</a>
          </li>

      </ul>
    </div>
  </nav>
<div class="boxLanding">
	<ul class="collection ">
		<!-- Header Tabble -->
		<li class="collection-item collection-seo">
			<div class="row valign">
				<div class="row left-align">
					<i class="mdi-hardware-keyboard-arrow-down i-seo"></i> <span class="distanceLanding"><b>Selecciona un País</b></span>
				</div>
			</div>
		</li>
		<div class="countryLanding">
			<div class="container">

				<table class="highlight left">
					<tbody>
						@foreach ($countries as $c)
						<tr>
							<td><a class="item-seo" href="pais/{{$c->nombre_pais}}/provincia">{{$c->nombre_pais}} </a></td>
						</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>
	</ul>
</div>




@include('acerca')


@stop

@section('js')
  <script
  src="https://www.google.com/recaptcha/api.js?hl=es-419&onload=vcRecaptchaApiLoaded&render=explicit"
  async defer
></script>
  {!!Html::script('bower_components/materialize/dist/js/materialize.min.js')!!}  
  {!!Html::script('bower_components/ngmap/build/scripts/ng-map.min.js')!!}  
@stop
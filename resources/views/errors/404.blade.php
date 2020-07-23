@extends('layouts.clear')
@section('meta')
    <title>VAMOS | vamoslac.org</title>
    <meta name="description" content="Conocé dónde hacerte el test de VIH o dónde conseguir preservativos gratuitos.">
    <meta name="author" content="VAMOS">
    <link rel="canonical" href="http://vamoslac.org"/>
    <meta property='og:locale' content='es_LA'/>
    <meta property='og:title' content='VAMOS | vamoslac.org'/>
    <meta property="og:description" content="Conoce dónde hacerte la prueba de VIH y buscar condones gratis. También encuentra los vacunatorios y centros de infectología más cercanos." />
    <meta property='og:url' content='http://vamoslac.org'/>
    <meta property='og:site_name' content='DÓNDE'/>
    <meta property='og:type' content='website'/>
    <meta property='og:image' content='http://vamoslac.org/img/icon/apple-touch-icon-152x152.png'/>
    <meta property='fb:app_id' content='459717130793708' />
    <meta name="twitter:card" content="summary">
    <meta name='twitter:title' content='VAMOS | vamoslac.org'/>
    <meta name="twitter:description" content="Conocé dónde hacerte el test de VIH o dónde conseguir preservativos gratuitos." />
    <meta name='twitter:url' content='http://vamoslac.org'/>
    <meta name='twitter:image' content='http://vamoslac.org/img/icon/apple-touch-icon-152x152.png'/>
    <meta name='twitter:site' content='@fundhuesped' />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
@stop

@section('content')
@include('navbar')
<div class="home no-page valign-demo valign-wrapper">
    <div class="row valign full-width">
        <div class="col s12">
            <br>
            <h3 translate="404_info"></h3>
            <br/>
            <br/>
            <a href='https://www.huesped.org.ar/' target="_blank" alt="logo">
                <img src="/images/logo_huesped.png" width="35%" alt="404 Error" />
            </a>
            <div class="row mt-3">
                <div class="col offset-s5 s2">
                    <a onclick="window.history.go(-1); return false;" class="waves-effect waves-light btn btn-small orange">
                        <i class="mdi-hardware-keyboard-backspace left"></i>
                        <span translate="back_label_button">Volver</span>
                    </a>
                </div>
            </div>
            @if (config('app.debug') == true)
            <div class="row valign full-width">
                <div class="row">
                    <div class="col s12 error-container">
                        <p> <b>Detalles tecnicos</b></p>
                        <p>{{ $exception->getCode() }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 error-container">
                        <h6>{{ $exception->getMessage() }}</h6>
                        <p> <small> {{$exception}}</small></p>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@stop

@section('js')
@stop
<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/


Cambiar el lading por una intro mas genial
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }} ">
    <meta name="author" content="Sergi Tur Badenas - acacha.org">

    <meta property="og:title" content="Adminlte-laravel" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }}" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />

    <title>{{ "Constructora Paola Lamas y Cia. Ltda" }}</title>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><b>Constructora Paola Lamas y Cia. Ltda</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#home" class="smoothScroll">{{"Inicio"}}</a></li>
                <li><a href="#contact" class="smoothScroll">{{ "Contacto" }}</a></li>
                <li><a href="#desarrollo" class="smoothScroll">{{ "Desarrollo" }}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">{{ "Inicio de Seccion" }}</a></li>
                    <li><a href="{{ url('/register') }}">{{ "Registro" }}</a></li>
                @else
                    <li><a href="/home">{{ Auth::user()->name }}</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<section id="home" name="home"></section>
<div>
<img class="img-responsive" src="{{ asset('/img/banner2.jpg') }}" alt="Banner Image">
</div>





<section id="contact" name="contact"></section>
<div id="footerwrap">
    <div class="container">
        <div class="col-lg-5">
            <h3>{{ "Direccion" }}</h3>
            <p>
                Avenida samuel bambach,<br/>
                Coelemu,<br/>
                254<br/>
                Concepcion
            </p>
        </div>
        <div class="col-lg-7">
            <h3>{{ "Contacto" }}</h3>
            <p>
                Fono:  (56-42) 2970367,<br/>
                Rut:  77.834.330-4,<br/>
                Guiro:  Obras de ingenierías<br/>
                Representante legal:  Paola Lamas<br/>
            </p>
        </div>


    </div>
</div>
<div id="desarrollo">
    <div class="container">
        <p>
            <a></a><b>Desarrolladores</b></a>. {{  "Dante Perez Aguilera, Omar Vega,... "}}.<br/>
        </p>

    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('/js/smoothscroll.js') }}"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>

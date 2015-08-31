<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cancheros">
    <meta name="author" content="Didier Martinez">

    <title>Cancheros</title>

    <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('css/home.css')}}" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#topnav">


<!-- NavBar -->
<div class="navbar navbar-inverse navbar-fixed-top" id="topnav">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
    </div>
</div>

@yield('encabezado')

<!-- Información Comenzar -->
<section class="gray" id="comenzar">
    <div class="container">
        <div class="row features">
            <div class="col-lg-4 text-center">
                <div class="single-fet">
                    <div>
                                        <span class="icon-stack icon-4x">
                          <i class="icon-circle icon-stack-base"></i>
                          <i class="icon-signin icon-light"></i>
                        </span>
                    </div>
                    <h2>Registro</h2>
                    <p>Crear usuario en Cancheros</p>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="single-fet">
                    <div>
                                        <span class="icon-stack icon-4x">
                          <i class="icon-circle icon-stack-base"></i>
                          <i class="icon-shield icon-light"></i>
                        </span>
                    </div>
                    <h2>Equipo</h2>
                    <p>Crea tu equipo de futbol</p>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="single-fet">
                    <div>
                                        <span class="icon-stack icon-4x">
                          <i class="icon-circle icon-stack-base"></i>
                          <i class="icon-group icon-light"></i>
                        </span>
                    </div>
                    <h2>Amigos</h2>
                    <p>Relaciona tus amigos en tu equipo</p>
                </div>
            </div>
        </div>
    </div>
</section>

@yield('registro')

<!-- Footer -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="footer-ribbon" style="right: 0">
                <h3 class="title" style="margin: 0;padding: 5px 10px"><span>Gracias...</span></h3>
            </div>

        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-5">
                    <p>&copy; Copyright 2015. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('js/registrousuario.js')}}" type="text/javascript"></script>


</body>
</html>

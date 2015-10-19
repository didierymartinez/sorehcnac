<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cancheros">
    <meta name="author" content="Didier Martinez">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                    <h2>1</h2>

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
                    <h2>2</h2>

                    <h2>Equipo</h2>

                    <p>Crea o busca tu equipo de futbol</p>
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
                    <h2>3</h2>

                    <h2>Amigos</h2>

                    <p>Relaciona tus amigos en tu equipo</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slider" id="registro">
    <div class="container">
        <div class="container">
            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>

                        <p>Registro</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>

                        <p>Equipo</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>

                        <p>Amigos</p>
                    </div>
                </div>
            </div>
            <hr>
            <form role="form" id="contact-form">

                @yield('registroPaso1')

                <div class="row setup-content" id="step-2">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <br>

                            <div class="row grid-divider">
                                <div class="col-sm-4">
                                    <div style="text-align:center;" class="col-sm-8 col-padding">
                                        <br>
                                        <h4>Ya tienes equipo</h4>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div style="text-align:center;" class="col-sm-8 col-padding">
                                        <br>
                                        <h4>Buscar equipo</h4>
                                    </div>
                                </div>


                                <div class="col-sm-4">
                                    <div class="col-padding">
                                        <div class="form-group">
                                            <h4>Crear</h4>
                                            <label class="control-label">Equipo</label>
                                            <input maxlength="200" type="text" required="required" class="form-control"
                                                   placeholder="Nombre del equipo"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Descripción</label>
                                            <input maxlength="200" type="text" required="required" class="form-control"
                                                   placeholder="Descripción"/>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <button class="btn btn-primary SiguienteBtn btn-lg pull-right" type="button">Siguiente
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-3">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <button class="btn btn-success btn-lg pull-right" type="submit">Terminar!</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</section>

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
<link rel="stylesheet"
      href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
<script type="text/javascript"
        src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>


</body>
</html>

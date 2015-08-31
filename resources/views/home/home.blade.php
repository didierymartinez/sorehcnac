@extends('layouts.layout_home')


@section('encabezado')

<!-- Encabezado -->
<div class="jumbotron" id="home">
    <div class="container">
        <div class="row inner-page">
            <div class="col-md-8 col-md-push-1 lazy-container loaded">
                <div class="media">
                    <div class="media-body">
                        <div class="col-md-12">
                            <h1 class="title">Cancheros</h1>

                            <p>Expertos del futbol Aficionado</p>

                            <p><a href="#comenzar" class="btn btn-success btn-lg">Comenzar
                                    <i class="icon icon-angle-right"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-md-pull-12">
                <h2>podemos <strong>Hacer</strong></h2>

                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="icon-signin"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="shorter">Registro</h4>

                                <p class="tall"></p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="icon-group"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="shorter">Amigos</h4>

                                <p class="tall"></p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="icon-shield"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="shorter">Equipos</h4>

                                <p class="tall"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="icon-comment"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="shorter">Comunicar</h4>

                                <p class="tall"></p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="icon-info small user"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="shorter">Informar</h4>

                                <p class="tall"></p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="icon-calendar"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="shorter">Partidos</h4>

                                <p class="tall"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('registro')

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
            <form role="form">
                <div class="row setup-content" id="step-1">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <br>


                                <div class="row grid-divider">
                                    <div class="col-sm-6">
                                      <div class="col-sm-8 col-padding">
                                        <br>
                                       <a  href="{{URL::to('auth')}}" class="btn-sm btn-block btn-social btn-facebook">
                                            <i class="icon-facebook"></i> Iniciar con Facebook
                                        </a>
                                        <br>
                                        <p>Te recomendamos registrarte a Cancheros con Facebook para que sea más fácil buscar tus amigos.</p>
                                      </div>
                                    </div>


                                    <div class="col-sm-6">
                                      <div class="col-padding">
                                        <div class="form-group">
                                            <label class="control-label">Nombre</label>
                                            <input maxlength="100" type="text" required="required" class="form-control"
                                                   placeholder="Nombre de usuario"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Correo</label>
                                            <input maxlength="100" type="text" required="required" class="form-control"
                                                   placeholder="Correo electronico"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Contraseña</label>
                                            <input maxlength="100" type="text" required="required" class="form-control"
                                                   placeholder="Contraseña"/>
                                        </div>
                                      </div>
                                    </div>
                                </div>





                            <button class="btn btn-primary SiguienteBtn btn-lg pull-right" type="button">Siguiente
                            </button>
                        </div>
                    </div>
                </div>
                

            </form>
        </div>

    </div>
</section>

@stop
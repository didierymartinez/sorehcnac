@extends('layouts.home')

@section('encabezado')
    <div class="jumbotron" id="home">
    <div class="container">
        <div class="row inner-page">
            <div class="col-md-8 col-md-push-1 lazy-container loaded">
                <div class="media">
                    <div class="media-body">
                        <div class="col-md-12">
                            <h1 class="title">
                                |--------------------------------------------------------------------------
                                IMPORTANTE HACER CAMBIO EN ARCHIVO


<!--
                                IMPORTANTE HACER CAMBIO EN ARCHIVO C:\xampp\htdocs\sorehcnac\vendor\adamwathan\eloquent-oauth\src\Authenticator.php
                                PARA QUE SI YA EXISTE UN USUARIO CREADO POR FORMULARIO CON EL MISMO CORREO DE FACEBOOK SE MODIFIQUE SOBRE EL MISMO USUARIO
                                if ($callback) {
                                $user = $callback($user, $userDetails);
                                }

                                DESPUES BORRAR ESTO!!!!!!!!!!!!!
                                */-->
                                Cancheros</h1>

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

@section('registroPaso1')
    <div class="row setup-content" id="step-1">
    <div class="col-xs-12">
        <div class="col-md-12">
            <br>

            <div class="row grid-divider">
                <div class="col-sm-6">
                    <div class="col-sm-8 col-padding">
                        <br>
                        <a href="{{URL::to('auth')}}" class="btn-sm btn-block btn-social btn-facebook">
                            <i class="icon-facebook"></i> Iniciar con Facebook
                        </a>
                        <br>

                        <p>Te recomendamos registrarte a Cancheros con Facebook para que sea más fácil buscar tus
                            amigos.</p>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="col-padding">
                        {!! Form::open(array('method' => 'POST', 'id' => 'contact-form', 'route' =>
                        array('users.store'))) !!}
                        <div class="form-group">
                            {!!Form::label('name', 'Nombre',array('class' => 'control-label')) !!}
                            {!!Form::text('name', '',array('class' => 'form-control', 'required' => 'required')) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('email', 'Correo',array('class' => 'control-label')) !!}
                            {!! Form::email('email', null, array('class' => 'form-control', 'required' => 'required'))
                            !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('password', 'Contraseña',array('class' => 'control-label')) !!}
                            {!! Form::password('password', array('class' => 'form-control', 'required' => 'required'))
                            !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <button class="btn btn-primary SiguienteBtn btn-lg pull-right" type="button">Siguiente
            </button>
        </div>
    </div>
</div>
@stop
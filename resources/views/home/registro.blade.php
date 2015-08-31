@extends('layouts.layout_home')



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
                                  <div style="text-align:center;" class="col-sm-8 col-padding">
                                    <br>
                                   
                                    <img src="http://graph.facebook.com/{{Auth::user()->provider_user_id}}/picture?type=large" class="img-circle"  />
                                    <div class="rank-label-container">
                                        <span class="label rank-label">{{Auth::user()->name}}</span>
                                    </div>
                                  </div>
                                </div>


                                <div class="col-sm-6">
                                  <div class="col-padding">
                                    <div class="form-group">
                                        <label class="control-label">Nombre</label>
                                        <input maxlength="100" type="text" required="required" class="form-control"
                                               placeholder="Nombre de usuario" value="{{Auth::user()->name}}"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Correo</label>
                                        <input maxlength="100" type="text" required="required" class="form-control"
                                               placeholder="Correo electronico" value="{{Auth::user()->email}}"/>
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

@stop
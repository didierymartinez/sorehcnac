@extends('layouts.home')


@section('registroPaso1')
<div class="row setup-content" id="step-1">
    <div class="col-xs-12">
        <div class="col-md-12">
            <br>

            <div class="row grid-divider">
                <div class="col-sm-6">
                    <div style="text-align:center;" class="col-sm-8 col-padding">
                        <br>

                        <img src="http://graph.facebook.com/{{Auth::user()->provider_user_id}}/picture?type=large"
                             class="img-circle"/>

                        <div class="rank-label-container">
                            <span class="label rank-label">{{Auth::user()->name}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="col-padding">
                        <div class="form-group">
                            <input type="hidden" id="userId" value="{{Auth::user()->id}}">
                            <label class="control-label">Nombre</label>
                            <input type="text" id="Name" maxlength="100" type="text" required="required"
                                   class="form-control"
                                   placeholder="Nombre de usuario" value="{{Auth::user()->name}}"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Correo</label>
                            <input type="text" id="email" maxlength="100" type="text" required="required"
                                   class="form-control"
                                   placeholder="Correo electronico" value="{{Auth::user()->email}}"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Contraseña</label>
                            <input type="password" id="password" maxlength="100" type="text" required="required"
                                   class="form-control"
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
@stop
@extends('layouts.login_layout')

@section('content')
<!-- BEGIN REGISTRATION FORM -->
<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
    {{ csrf_field() }}

    <h3 class="font-green">Regístrate</h3>

    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
        <label class="control-label visible-ie8 visible-ie9">Usuario</label>
        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Usuario" name="username" required />
        @if ($errors->has('username'))
            <span class="help-block">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label class="control-label visible-ie8 visible-ie9">Nombre</label>
        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Nombre" name="name" required />
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Correo electrónico</label>
        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Correo electrónico" name="email" required autofocus />
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label class="control-label visible-ie8 visible-ie9">Contraseña</label>
        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Contraseña" name="password" required />
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <label class="control-label visible-ie8 visible-ie9">Confirmar contraseña</label>
        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Confirmar contraseña" name="password_confirmation" required />
        @if ($errors->has('password_confirmation'))
            <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group margin-top-20 margin-bottom-20">
        <label class="mt-checkbox mt-checkbox-outline">
            <input type="checkbox" name="tnc" /> Acepto los
            <a href="javascript:;">Términos de Servicio </a> & la
            <a href="javascript:;">Política de Privacidad </a>
            <span></span>
        </label>
        <div id="register_tnc_error"> </div>
    </div>

    <div class="form-actions">
        <a href="{{ url('/login') }}" id="register-back-btn" class="uppercase btn green btn-outline">Regresar</a>
        <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">Enviar</button>
    </div>
</form>
<!-- END REGISTRATION FORM -->
@endsection

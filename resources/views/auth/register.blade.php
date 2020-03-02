<?php/*
|--------------------------------------------------------------------------
| Vista register
|--------------------------------------------------------------------------
| En esta vista ponemos relizar el registros de usuarios sin el permiso
| del administrador pero con la condición de usuario-invitado y token 0
*/?>
@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="panel-heading text-center">
        <h3 class="e-color">Acceso al Registro</h3>
    </div>

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
        <?php #//Token de seguridad?>
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <input placeholder="Nombre" id="name" type="text" class="e-color form-control text-center rounded-pill"
                name="name" value="{{ old('name') }}">
            @if($errors->has('name'))
            <span class="help-block e-color">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} ">
            <input placeholder="E-mail" id="email" type="email" class="e-color form-control text-center rounded-pill"
                name="email" value="{{ old('email') }}">
            @if($errors->has('email'))
            <span class="help-block e-color">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} ">
            <input placeholder="password" id="password" type="password"
                class="e-color form-control text-center rounded-pill" name="password">
            @if ($errors->has('password'))
            <span class="help-block e-color">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} ">
            <input placeholder="password" id="password-confirm" type="password"
                class="e-color form-control text-center rounded-pill" name="password_confirmation">
            @if ($errors->has('password_confirmation'))
            <span class="help-block e-color">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group">
            <div class="col-md-8 ml-sm-auto col-lg-8 mx-auto">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-user e-color"></i> Register
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
<?php/*
|--------------------------------------------------------------------------
| Vista login
|--------------------------------------------------------------------------
| En esta vista tanto el usuario puede tener ecceso al sistema con solo 
| poner su email y paassword, dependiendo el nivel que tenga son las opciones
| que se va a presentar
*/?>
@extends('layouts.app')
@section('content')
<form class="form-horizontal" role="form" method="POST" action="{{url('/login') }}">
    <?php #//Token de seguridad?>
    {{csrf_field()}}
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <input id="email" placeholder="Email" type="email" class="e-color form-control text-center rounded-pill"
            name="email" value="{{old('email') }}">
        @if ($errors->has('email'))
        <span class="help-block e-color">
            <strong>{{$errors->first('email')}}</strong>
        </span>
        @endif
    </div>
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <input id="password" placeholder="Password" type="password"
            class="e-color form-control text-center rounded-pill" name="password">
        @if ($errors->has('password'))
        <span class="help-block e-color">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4 col-md-12 text-center justify-content-center align-self-center btn-altx">
            <button type="submit" class="btn btn-primary btn-lg btn-block rounded-pill" id="botonEnviar">
                <i class="fa fa-btn fa-sign-in e-color"></i> Acceder
            </button>
        </div>
    </div>
</form>
@endsection
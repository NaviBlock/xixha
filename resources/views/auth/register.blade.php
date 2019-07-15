@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-offset-4 col-md-12 text-center justify-content-center align-self-center">
            <div class="panel panel-default">
                <!--div class="panel-heading">Acceso al Registro</div-->
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} e-titulo">
                            <label for="name" class="col-md-4 control-label e-color">Nombre</label>

                            <div class="col-md-12 col-md-offset-4 col-md-12 text-center justify-content-center align-self-center">
                                <input id="name" type="text" class="form-control e-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} e-titulo">
                            <label for="email" class="col-md-4 control-label e-color">E-Mail</label>

                            <div class="col-md-12 col-md-offset-4 col-md-12 text-center justify-content-center align-self-center">
                                <input id="email" type="email" class="form-control e-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} e-titulo">
                            <label for="password" class="col-md-4 control-label e-color">Password</label>

                            <div class="col-md-12 col-md-offset-4 col-md-12 text-center justify-content-center align-self-center">
                                <input id="password" type="password" class="form-control e-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} e-titulo">
                            <label for="password-confirm" class="col-md-4 control-label e-color">Confirmar Password</label>

                            <div class="col-md-12 col-md-offset-4 col-md-12 text-center justify-content-center align-self-center">
                                <input id="password-confirm" type="password" class="form-control e-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4 col-md-12 text-center justify-content-center align-self-center">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection

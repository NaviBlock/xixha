@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-md-12 text-center justify-content-center align-self-center e-titulo">
            <div class="panel panel-default"> 
                <div class="panel-heading e-color"><h3 >Acceso al Sistema</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label e-color">E-Mail:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label e-color">Password:</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!--div class="form-group">
                            <div class="col-md-6 col-md-offset-4 col-md-12 text-center justify-content-center align-self-center e-color">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Recordar
                                    </label>
                                </div>
                            </div>
                        </div-->

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4 col-md-12 text-center justify-content-center align-self-center">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in e-color"></i> Acceder
                                </button>
                                <!--a class="btn btn-link" href="{{ url('/password/reset') }}">¿Olvidaste tu Password?</a-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection

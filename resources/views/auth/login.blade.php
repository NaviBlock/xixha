@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row"> 
        <div class="main col-md-8 ml-sm-auto col-lg-8 mx-auto">
            <div class="panel panel-default"> 
                <div class="panel-heading text-center">
                    <h3 class="e-text-color">Acceso al Sistema</h3>
                </div>
            </div>
 
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label e-color ">E-Mail:</label>
                            <div class="col-md-8 ml-sm-auto col-lg-8 mx-auto">
                                <input id="email" type="email" class="form-control e-border text-center" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label e-color">Password:</label>

                                <div class="col-md-8 ml-sm-auto col-lg-8 mx-auto">
                                    <input id="password" type="password" class="form-control e-border text-center" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div><br>
                            <div class="form-group">
                                <!--div class="col-md-6 col-md-offset-4 col-md-12 text-center justify-content-center align-self-center"-->
                                <div class="col-md-8 ml-sm-auto col-lg-8 mx-auto">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        <i class="fa fa-btn fa-sign-in e-color"></i> Acceder
                                    </button>                             
                                </div>
                            </div><br><br>
                        </form>
                    </div>
            </div>
        </div>     
    </div>
</div>
@endsection
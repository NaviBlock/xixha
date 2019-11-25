@extends ('layouts.admin')
@section ('contenido') 
  <!--Modal-->  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!----------------------------------------------------------------->
<div class="container-fluid adx fix-autoE">     
    <div class="container adx">
        <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 border-warning mx-auto"> 
            <div class="card-body text-warning">
                <h5 class="card-title">Padrón de Apicultores.</h5>
                <a class="nav-link e-coloresx px-2">Administrador {{ auth()->user()->name }}</a>
                <div class="text-center">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        @include('root.search')
                    </div>
                </div>
            </div>   
        </div>
    </div>

    <div class="container">
        <div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">		
		    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
                <div class="table-responsive "> 
                    <table class="table table-hover table-condensed table-sm text-dark table-bordered t-fix">
                        <tbody> 
                            @foreach($personas as $per)                          
                            <tr>
                                <td>
                                    <div class="container-fluid">                                   
                                        <img src="{{asset('imagenes/perfil/'.$per->img_perfil)}}" alt="{{$per->img_perfil}}" height="150px" width="150px" class="img-fluid img-fix-l">
                                    </div>
                                </td>
                                <td> 
                                    <div class="container">
                                        <p>{{ $per->nombre." ".$per->apellidopa." ".$per->apellidoma }}</p>
                                        <p>{{ $per->folio }}</p>
                                        <p>{{ $per->municipio}}</p>
                                        <p>{{ $per->telefono }}</p>
                                        <p>{{ $per->email }}</p>
                                        <p>{{ $per->num_colmena }}</p>
                                        <p>{{ $per->prod_anual." Kg" }}</p>
                                        <p>{{ $per->temp_cosecha}}</p>
                                    </div>
                                </td>
                                <td class="fix-b">
                                    <div class="container-fluid">                                                                       
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto py-1">
                                            <div class="btn-group mr-4" role="group" aria-label="Boton Detalles">
                                                <a href="{{URL::action('RootController@show',$per->idpersona)}}">
                                                    <button type="button" class="btn btn-success btn-block">Detalles</button>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto py-1">
                                            <div class="btn-group mr-4" role="group" aria-label="Boton Editar">
                                                <a href="{{URL::action('RootController@edit',$per->idpersona)}}">
                                                    <button type="button" class="btn btn-primary btn-block">Editar</button>
                                                </a>
                                            </div>     
                                        </div>     

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto py-1">
                                            <div class="btn-group mr-4" role="group" aria-label="Boton de Eliminar">
                                                <a href="" data-target="#modal-delete-{{$per->idpersona}}" data-toggle="modal">
                                                    <button type="button" class="btn btn-danger btn-block">Eliminar</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div> 
                                </td>
                            </tr>
                            @include('root.modal')
                            @endforeach
                        </tbody>
                    </table>
                    {{$personas->render()}}
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
            <div class="card-footer mx-auto e-alineacion">
                <span class="foorter-color-e">XIXHÁ 2019</span>
            </div>                
        </div>
    </div>        
    
</div>
@endsection
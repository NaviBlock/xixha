@extends ('layouts.adminuser')
@section ('contenido')
<div class="container-fluid adx">

    <div class="container adx">
        <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 border-warning mx-auto"> 
            <div class="card-body text-warning">
                <h5 class="card-title">{{ auth()->user()->email }}</h5>
                <a class="nav-link e-coloresx px-2">Apicultor {{ auth()->user()->name }}</a>                
                <div class="text-center">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        @include('users.search')
                    </div>
                </div>
            </div> 
        </div>
    </div>

    <div class="container">
        <div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
	        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
                <div class="table-responsive "> 
                    <table class="table table-hover table-condensed table-sm text-dark table-bordered">
                        <thead class="table-color">
                            <th scope="col">Perfil</th>
                            <th scope="col">Folio</th>                           
                            <th scope="col">Nombre Completo</th>                        
                            <th scope="col">Email</th>                            
                            <th scope="col">N° Colmenas</th>
                            <th scope="col">Producción Anual</th>
                            <th scope="col">Municipio</th>
                        </thead>
                        <tbody>
                            @foreach($personas as $per)
                                <tr>                                     
                                    <td><img src="{{asset('imagenes/perfil/'.$per->img_perfil)}}" alt="{{$per->img_perfil}}" height="100px" width="100px" class="img-fluid"></td>
                                    <td scope="row">{{ $per->folio }}</td>
                                    <td>{{ $per->nombre." ".$per->apellidopa." ".$per->apellidoma }}</td>                                    
                                    <td>{{ $per->email }}</td>                                    
                                    <td>{{ $per->num_colmena }}</td>
                                    <td>{{ $per->prod_anual." Kg" }}</td>        
                                    <td>{{ $per->municipio }}</td>                            
                                </tr>                                          
                                @endforeach
                            </tbody>
                        </table>
                        {{$personas->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
                <div class="card-footer mx-auto e-alineacion">
                    <span class="foorter-color-e">&copy;XIXHÁ 2019</span>
                </div>                
            </div>
    </div>
</div>
@endsection
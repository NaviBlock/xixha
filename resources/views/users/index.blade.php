@extends ('layouts.adminuser')
@section ('contenido')
<div class="row">
    <div class="container-fluid">
        <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 border-warning mx-auto"> 
            <div class="card-body text-warning">
                <h5 class="card-title">Padrón de Apicultores</h5>
                <div class="text-center">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        @include('users.search')
                    </div>
                </div>
            </div>  
            <div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">
				<div class="input-group mx-auto">
					<div class="mx-auto">
					    <div class="input-group-prepend">
						    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
                                <div class="table-responsive "> 
                                    <table class="table table-hover table-condensed table-sm text-dark table-bordered">
                                        <thead class="table-color">
                                            <th scope="col">Folio</th>
                                            <th scope="col">Perfil</th>
                                            <th scope="col">Nombre Completo</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">N° Colmenas</th>
                                            <th scope="col">Producción Anual</th>
                                            <th scope="col">Certificación</th>                           
                                        </thead>
                                        <tbody>
                                            @foreach($personas as $per)
                                            <tr> 
                                                <td scope="row">{{ $per->folio }}</td>
                                                <td><img src="{{asset('imagenes/perfil/'.$per->img_perfil)}}" alt="{{$per->img_perfil}}" height="100px" width="100px" class="img-fluid"></td>
                                                <td>{{ $per->nombre." ".$per->apellidopa." ".$per->apellidoma }}</td>
                                                <td>{{ $per->email }}</td>
                                                <td>{{ $per->num_colmena }}</td>
                                                <td>{{ $per->prod_anual." Kg" }}</td>
                                                <td>{{ $per->certificacion }}</td>
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
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
                <div class="card-footer mx-auto e-alineacion">
                    <span class="text-muted">XIXHÁ 2019</span>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection
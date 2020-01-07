@extends ('layouts.admin')
@section ('contenido') 

    <div class="container-fluid adx fix-autoE">     
        <div class="container adx card col-lg-12 col-md-12 col-sm-12 col-xs-12 border-warning mx-auto card-body text-warning">                
            <h5 class="card-title">Padrón de Apicultores.</h5>
            <a class="nav-link e-coloresx px-2">Administrador {{auth()->user()->name }}</a>
            <div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">                    
                @include('root.search')
            </div>
        </div>
    </div>   

    <div class="container form-group amber-textarea active-amber-textarea-2 input-group e-border text-center col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">    		
        <table class="table table-hover table-condensed">
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

    <div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto card-footer mx-auto e-alineacion">
        <span class="foorter-color-e">XIXHÁ 2019</span>
    </div>        
@endsection
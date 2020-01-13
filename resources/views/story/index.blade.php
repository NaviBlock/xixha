@extends ('layouts.admin')
@section ('contenido')
    <!-- #Buscador-->
        <div class="container-fluid adx fix-autoE card col-lg-12 col-md-12 col-sm-12 col-xs-12 border-warning mx-auto card-body text-warning">
            <h5 class="card-title">Historial de pagos</h5>            
            <div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">                
                @include('story.search')
            </div> 
        </div>                
    <!-- #Tabla de Registro-->                    
        <div class="container-fluid table-responsive form-group amber-textarea active-amber-textarea-2 input-group e-border text-center col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
            <div class="form-group amber-textarea active-amber-textarea-2 input-group e-border text-center">                
                <table class="table table-hover table-condensed table-sm text-dark table-bordered">
                    <thead class="table-color">
                        <th scope="col">Folio</th>
                        <th scope="col">Ref</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Operación</th>
                    <tbody>
                        @foreach($stories as $per)
                            <tr>   
                                <td>{{$per->id_story}}</td>
                                <td>{{$per->id_ref}}</td>
                                <td>{{$per->nombre }} {{$per->apellidopa}} {{$per->apellidoma}}</td>
                                <td>{{$per->fechaRegistro }}</td>
                                <td>{{$per->cantidad}}</td>                                
                                <td><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto py-1 btn-group mr-4 btn-x" role="group" aria-label="Boton Generar">
                                        <a href="{{URL::action('StoryController@generar',$per->id_story)}}">
                                            <button type="button" class="btn btn-primary btn-block">Generar</button>
                                        </a>
                                </div></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$stories->render()}}
            </div>
        </div>

        <!-- #Footer-->                
            <div class="container foorter-color-e col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto card-footer mx-auto e-alineacion">
                <span class="foorter-color-e">XIXHÁ 2019</span>
            </div>
@endsection
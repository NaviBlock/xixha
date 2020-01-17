@extends ('layouts.admin')
@section ('contenido')
    <!-- #Buscador-->
        <div class="container-fluid adx fix-autoE card col-lg-12 col-md-12 col-sm-12 col-xs-12 border-warning mx-auto card-body text-warning">
            <h5 class="card-title">Historial de pagos</h5>            
            <div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">                
                @include('story.search')
            </div>
        </div>

    <!-- #Generar-->
        <div class="container-fluid adx fix-autoE card col-lg-12 col-md-12 col-sm-12 col-xs-12 ex-border mx-auto card-body">
            <select name="id_story" id="id_story">   
                @foreach($stories as $per)             
                <option value="{{$per->id_story}}">{{$per->id_story}}</option>
                @endforeach
            </select>
            {{$stories->render()}}
            <button type="button" class="btn btn-primary btn-md">Generar</button>
            <!--a href="{ {URL::action('StoryController@create',$per->id_story)}}">
            </a-->
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
                    <tbody>
                        @foreach($stories as $per)
                            <tr>   
                                <td>{{$per->id_story}}</td>
                                <td>{{$per->id_ref}}</td>
                                <td>{{$per->nombre }} {{$per->apellidopa}} {{$per->apellidoma}}</td>
                                <td>{{$per->fechaRegistro }}</td>
                                <td>{{$per->cantidad}}</td>
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
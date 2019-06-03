@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="text-center">Listado de Categoria</h3><br><br>
        </div>
        <div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <a href="categoria/create"><button class="btn btn-success btn-block btn-lg">Nuevo</button></a>
        </div>
        <br><br><br><br>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            @include('almacen.categoria.search')
        </div>
    </div> 
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive lineA">
			    <table class="table table-striped table-bordered table-condensed table-hover text-center">
				    <thead>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Opciones</th>
                    </thead>
                    @foreach($categorias as $cat)
                        <tr>
                            <td>{{ $cat->nombre}}</td>
                            <td>{{ $cat->descripcion}}</td>
                            <td>
                                <div class="btn-group mr-4" role="group" aria-label="Butones de Editar">
                                    <a href="{{URL::action('CategoriaController@edit',$cat->idcategoria)}}">
                                        <button class="btn btn-info btn-block">Ver Detalles</button></a>
                                </div>
                                <div class="btn-group mr-4" role="group" aria-label="Butones de Eliminar">
                                    <a href="" data-target="#modal-delete-{{$cat->idcategoria}}" data-toggle="modal">
                                        <button class="btn btn-danger btn-block">Eliminar</button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @include('almacen.categoria.modal')
                    @endforeach
                </table>
            </div>
            {{$categorias->render()}}
        </div>
    </div>
@endsection
@extends ('layouts.admin')
@section ('contenido')
    <div class="row"> 
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="text-center">Listado de Productos</h3><br><br>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center ">
            <a href="articulo/create"><button class="btn btn-success btn-block btn-lg">Nuevo</button></a>
        </div>
        <br><br><br><br>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            @include('almacen.articulo.search')
        </div> 
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive lineA">
			    <table class="table table-striped table-bordered table-condensed table-hover text-center">
				    <thead>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Stock</th>
                        <th>Imagen</th>
                        <th>Opciones</th>
                    </thead>
                    @foreach($articulos as $art)
                        <tr>
                            <td>{{ $art->codigo}}</td>
                            <td>{{ $art->nombre}}</td>
                            <td>{{ $art->categoria}}</td>
                            <td>{{ $art->stock}}</td>
                            <td>
                                <img src="{{asset('imagenes/articulos/'.$art->imagen)}}" alt="{{$art->imagen}}" height="100px" width="100px" class="img-fluid">
                            </td>
                            <td>
                                <div class="btn-group mr-4" role="group" aria-label="Boton Detalle">
                                    <a href="{{URL::action('ArticuloController@edit',$art->idarticulo)}}">
                                        <button class="btn btn-info btn-block">Ver Detalles</button>
                                    </a>
                                </div>
                                <div class="btn-group mr-4" role="group" aria-label="Boton Eliminar">
                                    <a href="" data-target="#modal-delete-{{$art->idarticulo}}" data-toggle="modal">
                                        <button class="btn btn-danger btn-block">Eliminar</button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @include('almacen.articulo.modal')
                    @endforeach
                </table>
            </div>
            {{$articulos->render()}}
        </div>
    </div>
@endsection  
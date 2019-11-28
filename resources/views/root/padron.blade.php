@extends ('layouts.admin')
@section ('contenido') 
  <!--Modal-->  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!----------------------------------------------------------------->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">  
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

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
                    <table id="tablav" class="table table-hover table-condensed">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Task</th>
                                <th>Category</th>
                                <th>State</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            oTable = $('#tablav').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('tablav') }}",
                "columns": [
                    {data: 'idpersona', name: 'id'},
                    {data: 'nombre', name: 'name'}                    
                ]
            });
        });
    </script>

    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
            <div class="card-footer mx-auto e-alineacion">
                <span class="foorter-color-e">XIXHÁ 2019</span>
            </div>                
        </div>
    </div>        
    
</div>
@endsection
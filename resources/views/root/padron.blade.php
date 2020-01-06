@extends ('layouts.admin')
@section ('contenido') 

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
                    <table id="example" class="table table-hover table-condensed">
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


    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
            <div class="card-footer mx-auto e-alineacion">
                <span class="foorter-color-e">XIXHÁ 2019</span>
            </div>                
        </div>
    </div>        
    
</div>
@endsection
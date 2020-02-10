{!! Form::open(array('url'=>'banx/banx','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group e-border text-center input-group input-group-prepend">
	<input type="text" class="e-color form-control text-center rounded-pill " name="searchText" placeholder="Buscar..."
		value="{{$searchText}}">
</div>
<div class="input-group text-center">
	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
		<button type="submit" class="btn btn-primary text-center">Buscar</button>
	</div>
</div>
{{Form::close()}}
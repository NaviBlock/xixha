{!! Form::open(array('url'=>'story/index','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group e-border text-center">
	
	<div class="input-group mx-auto">
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
			<div class="input-group-prepend">
				<input type="text" class="e-border md-textarea form-control lineA btn btn-warning" name="searchText" placeholder="Buscar..." value="{{$searchText}}">
			</div>
		</div>
	</div><br>

	<div class="input-group mx-auto">
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-auto">
			<span class="text-center">		
				<button type="submit" class="btn btn-primary">Buscar</button>
			</span>
		</div>
	</div>

</div>
{{Form::close()}}  
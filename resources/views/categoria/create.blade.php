@extends('layouts.plantilla')
@section('contenido')
<div class="row">
<div class="col-12"><h3>Nueva Categoria</h3></div>
</div>
<div class="row">
	<div class="col">
		<div class="form-group">
		<form method="POST" action="{{ route('categoria.store') }}">
			@csrf
		<label for="categoria">Categoria</label>
		<input type="text" name="categoria" class="form-control" required="">
		<input type="submit" value="Grabar" class="btn btn-success">
		</form>	
		</div>		
	</div>
</div>
<a href="{{ route('categoria.index')}}" class="btn btn-primary">Volver</a>
@stop

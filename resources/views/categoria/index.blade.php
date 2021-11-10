@extends('layouts.plantilla')
@section('contenido')
<div class="row">
  <div class="col-12">
    <h3>Lista de Categorías</h3>
    <a href="{{ route('categoria.create') }}" class="btn btn-info">Agregar</a>
    <table class="table table-bordred table-striped">
       <thead>
         <th>Id</th>
         <th>Nombre</th>
         <th>Acciones</th>
       </thead>
       <tbody>
        @if($categorias->count())  
          @foreach($categorias as $categoria)  
          <tr>
          <td>{{$categoria->id}}</td>
          <td>{{$categoria->categoria}}</td>          
          <td>
            <a class="btn btn-primary" href="{{action('CategoriaController@edit', $categoria->id)}}" >Editar</a>
            <form action="{{action('CategoriaController@destroy', $categoria->id)}}" method="post">
               @csrf
               <input name="_method" type="hidden" value="DELETE"> 
               <input type="submit" value="Eliminar" class="btn btn-danger">
             </form>             
           </td>
          </tr>
          @endforeach 
        @else
          <tr>
            <td colspan="3">No hay registro !!</td>
          </tr>
        @endif
      </tbody> 
    </table>
  </div>
</div>
@stop

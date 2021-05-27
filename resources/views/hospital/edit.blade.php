@extends('adminlte::page')

@section('title', 'Editar Hospital')

@section('content_header')
    <h1>Editar Hospital</h1>
@stop

@section('content')

<form action="/hospitales/{{$hospital->id}}" method="POST">
    @csrf
    @method("PUT")
     <div class="mb-3">
         <label for="" class="form-label">Nombre</label>
         <input id="nombre" name="nombre" type="text" class="form-control" value="{{$hospital->nombre}}">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Direccion</label>
         <input id="direccion" name="direccion" type="text" class="form-control" value="{{$hospital->direccion}}">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Telefono de contacto</label>
         <input id="telefono" name="telefono" type="number" class="form-control" value="{{$hospital->telefono}}">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Ciudad</label>
         <input id="ciudad" name="ciudad" type="text" class="form-control" value="{{$hospital->ciudad}}">
     </div>
     
     <a href="/hospitales" class="btn btn-secondary">Cancelar</a>
     <button type="submit" class="btn btn-primary">Editar</button>
   
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop
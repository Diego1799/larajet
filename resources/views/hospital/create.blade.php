@extends('adminlte::page')

@section('title', 'Crear Hospital')

@section('content_header')
    <h1>Crear Hospital</h1>
@stop

@section('content')

<form action="/hospitales" method="POST">
@csrf
     <div class="mb-3">
         <label for="" class="form-label">Nombre</label>
         <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Direccion</label>
         <input id="direccion" name="direccion" type="text" class="form-control" tabindex="2">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Telefono</label>
         <input id="telefono" name="telefono" type="number" class="form-control" tabindex="3">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Ciudad</label>
         <input id="ciudad" name="ciudad" type="text" class="form-control" tabindex="4">
     </div>
     
     
     <a href="/hospitales" class="btn btn-secondary" tabindex="8">Cancelar</a>
     <button type="submit" class="btn btn-primary" tabindex="9">Crear</button>
   
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop
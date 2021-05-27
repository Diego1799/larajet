@extends('adminlte::page')

@section('title', 'Crear Doctor')

@section('content_header')
    <h1>Crear Doctor</h1>
@stop

@section('content')

<form action="/doctores" method="POST">
@csrf
     <div class="mb-3">
         <label for="" class="form-label">Nombre</label>
         <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Apellido</label>
         <input id="apellido" name="apellido" type="text" class="form-control" tabindex="2">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Direccion</label>
         <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Telefono de contacto</label>
         <input id="telefono" name="telefono" type="number" class="form-control" tabindex="4">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Tipo de Sangre</label>
         <select name="sangre" name="sangre" class="form-control" tabindex="5">
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>O+</option>
                            <option>O-</option>
                        </select>
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Años de experiencia</label>
         <input id="exp" name="exp" type="number" class="form-control" tabindex="6">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Fecha de nacimiento</label>
         <input id="fechanac" name="fechanac" type="date" class="form-control" tabindex="7">
     </div>
     <a href="/doctores" class="btn btn-secondary" tabindex="8">Cancelar</a>
     <button type="submit" class="btn btn-primary" tabindex="9">Crear</button>
   
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
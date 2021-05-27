@extends('adminlte::page')

@section('title', 'Editar Doctor')

@section('content_header')
    <h1>Editar Doctor</h1>
@stop

@section('content')

<form action="/doctores/{{$doctor->id}}" method="POST">
    @csrf
    @method("PUT")
     <div class="mb-3">
         <label for="" class="form-label">Nombre</label>
         <input id="nombre" name="nombre" type="text" class="form-control" value="{{$doctor->nombre}}">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Apellido</label>
         <input id="apellido" name="apellido" type="text" class="form-control" value="{{$doctor->apellido}}">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Direccion</label>
         <input id="direccion" name="direccion" type="text" class="form-control" value="{{$doctor->direccion}}">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Telefono de contacto</label>
         <input id="telefono" name="telefono" type="number" class="form-control" value="{{$doctor->telefono}}">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Tipo de Sangre</label>
         <select name="sangre" name="sangre" class="form-control" value="{{ isset($doctores->sangre) ? $doctores->sangre : '' }}">
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
         <input id="exp" name="exp" type="number" class="form-control" value="{{$doctor->exp}}">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Fecha de nacimiento</label>
         <input id="fechanac" name="fechanac" type="date" class="form-control" value="{{$doctor->fechanac}}">
     </div>
     <a href="/doctores" class="btn btn-secondary" tabindex="8">Cancelar</a>
     <button type="submit" class="btn btn-primary" tabindex="9">Editar</button>
   
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop
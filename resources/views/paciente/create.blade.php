@extends('adminlte::page')

@section('title', 'Crear Paciente')

@section('content_header')
    <h1>Crear Paciente</h1>
@stop

@section('content')

<form action="/pacientes" method="POST">
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
         <label for="" class="form-label">EPS</label>
         <select name="eps" name="eps" class="form-control" >
                            <option>SURA</option>
                            <option>COOMEVA</option>
                            <option>SUSALUD</option>
                            <option>CAFESALUD</option>
                            <option>VIVA1A</option>
                        </select>
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Direccion</label>
         <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Nombre Acompañante</label>
         <input id="nombreacom" name="nombreacom" type="text" class="form-control" tabindex="3">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Telefono Acompañante</label>
         <input id="telefonoacom" name="telefonoacom" type="number" class="form-control" tabindex="4">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Antecedentes Medicos</label>
         <input id="antecedentes" name="antecedentes" type="text" class="form-control" tabindex="5">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Motivo de Consulta</label>
         <input id="motivo" name="motivo" type="text" class="form-control" tabindex="6">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Diagnostico del Doctor</label>
         <input id="diagnostico" name="diagnostico" type="text" class="form-control" tabindex="7">
     </div>

     <a href="/pacientes" class="btn btn-secondary mb-3" tabindex="8">Cancelar</a>
     <button type="submit" class="btn btn-primary mb-3" tabindex="9">Crear</button>
     
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{!! asset('css/estilo.css') !!}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
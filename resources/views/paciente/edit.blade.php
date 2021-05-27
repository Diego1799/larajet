@extends('adminlte::page')

@section('title', 'Editar Paciente')

@section('content_header')
    <h1>Editar Paciente</h1>
@stop

@section('content')

<form action="/pacientes/{{$paciente->id}}" method="POST">
    @csrf
    @method("PUT")
     <div class="mb-3">
         <label for="" class="form-label">Nombre</label>
         <input id="nombre" name="nombre" type="text" class="form-control" value="{{$paciente->nombre}}">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Apellido</label>
         <input id="apellido" name="apellido" type="text" class="form-control" value="{{$paciente->apellido}}">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">EPS</label>
         <select name="eps" name="eps" class="form-control" value="{{ isset($pacientes->eps) ? $pacientes->eps : '' }}">
                            <option>SURA</option>
                            <option>COOMEVA</option>
                            <option>SUSALUD</option>
                            <option>CAFESALUD</option>
                            <option>VIVA1A</option>
                        </select>
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Direccion</label>
         <input id="direccion" name="direccion" type="text" class="form-control" value="{{$paciente->direccion}}">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Nombre Acompañante</label>
         <input id="nombreacom" name="nombreacom" type="text" class="form-control" value="{{$paciente->nombreacom}}">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Telefono Acompañante</label>
         <input id="telefonoacom" name="telefonoacom" type="number" class="form-control" value="{{$paciente->telefonoacom}}">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">antecendentes Medicos</label>
         <input id="antecedentes" name="antecedentes" type="text" class="form-control" value="{{$paciente->antecedentes}}">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Motivo de Consulta</label>
         <input id="motivo" name="motivo" type="text" class="form-control" value="{{$paciente->motivo}}">
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Diagnostico del Doctor</label>
         <input id="diagnostico" name="diagnostico" type="text" class="form-control" value="{{$paciente->diagnostico}}">
     </div>

     
     
     <a href="/pacientes" class="btn btn-secondary mb-3" tabindex="8">Cancelar</a>
     <button type="submit" class="btn btn-primary mb-3" tabindex="9">Editar</button>

</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop
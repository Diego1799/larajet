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

         <div class="form-group">
             <h3> Seleccione si tiene algunos de estos sintomas de Covid-19: </h3>
             <label for="tos">Tos</label><br>
             <label> <input type="radio" name="tos" value="Si"> Si </label><br>
             <label> <input type="radio" name="tos" value="No"> No</label><br>
        </div>
        <div class="form-group">
             <label for="respirar">Dificultad Para Respirar</label><br>
             <label> <input type="radio" name="respirar" value="Si"> Si </label><br>
             <label> <input type="radio" name="respirar" value="No"> No</label><br>
        </div>
        <div class="form-group">
            <label for="dir_sintomas">Otros síntomas</label><br>
            <input type="checkbox" id="otros1" name="checkbox">
            <label for="otros1">Fiebre</label><br>
            <input type="checkbox" id="otros2" name="checkbox">
            <label for="otros2">Escalofríos</label><br>
            <input type="checkbox" id="otros3" name="checkbox">
            <label for="otros3">Temblores y escalofríos que no ceden</label><br>
            <input type="checkbox" id="otros4" name="checkbox">
            <label for="otros4">Dolor Múscular</label><br>
        </div>

    </form>

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
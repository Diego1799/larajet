@extends('adminlte::page')

@section('title', 'Test Pacientes')

@section('content_header')
    <h1>Test Covid-19 Pacientes</h1>
@stop

@section('content')
<form>
        <div class="form-group">
             <h4> Seleccione si tiene algunos de estos sintomas de Covid-19: </h4>
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

        <a href="/pacientes" class="btn btn-secondary mb-3" tabindex="8">Cancelar</a>
        <a href="/resultado" <button type="submit" class="btn btn-primary mb-3" tabindex="9">Enviar</button></a>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{!! asset('css/estilo.css') !!}">
@stop

@section('js')
    
@stop
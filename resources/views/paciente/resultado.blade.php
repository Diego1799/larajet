@extends('adminlte::page')

@section('title', 'Resultado Test')

@section('content_header')
    <h1>Resultado Test Covid-19</h1>
@stop

@section('content')

<h1>El paciente es candidato a tener Covid-19</h1>
<a href="/pacientes" class="btn btn-secondary mb-3">Volver</a>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{!! asset('css/estilo.css') !!}">
@stop

@section('js')
    
@stop
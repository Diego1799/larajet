@extends('adminlte::page')

@section('title', 'Crud Pacientes')

@section('content_header')
    <h1>Crud Pacientes</h1>
@stop

@section('content')

<a href="pacientes/create" class="btn btn-primary mb-3">Crear</a>

<table id="tabpaciente" class="table table-striped shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr class="centrar">
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">EPS</th>
            <th scope="col">Direccion</th>
            <th scope="col">Nombre Acompañante</th>
            <th scope="col">Telefono Acompañante</th>
            <th scope="col">Antecedentes Medicos</th>
            <th scope="col">Motivo de Consulta</th>
            <th scope="col">Diagnostico del Doctor</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pacientes as $paciente)
        <tr>
            <td>{{$paciente->id}}</td>
            <td>{{$paciente->nombre}}</td>
            <td>{{$paciente->apellido}}</td>
            <td>{{$paciente->eps}}</td>
            <td>{{$paciente->direccion}}</td>
            <td>{{$paciente->nombreacom}}</td>
            <td>{{$paciente->telefonoacom}}</td>
            <td>{{$paciente->antecedentes}}</td>
            <td>{{$paciente->motivo}}</td>
            <td>{{$paciente->diagnostico}}</td>
            <td>
                <div class="centrar">
                <form action="{{ route ('pacientes.destroy', $paciente->id ) }}" method="POST">
                <a href="pacientes/{{$paciente->id}}/edit" class="btn btn-secondary boton-editar">Editar</a>
                @csrf
                @method("DELETE")
                <button type= "submit" class="btn btn-danger boton-editar">Borrar</button>
                <a href="/test" class="btn btn-secondary mb-3">Test</a>
                </form>
                </div>
            </td>
        </tr>
        @endforeach    
    </tbody>
</table> 

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{!! asset('css/estilo.css') !!}">
@stop

@section('js')
    
@stop
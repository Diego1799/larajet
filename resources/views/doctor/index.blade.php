@extends('adminlte::page')

@section('title', 'Crud Doctores')

@section('content_header')
    <h1>Crud Doctores</h1>
@stop

@section('content')

<a href="doctores/create" class="btn btn-primary mb-3">Crear</a>

<table id="tabdoctores" class="table table-striped shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr class="centrar">
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Direccion</th>
            <th scope="col">Telefono</th>
            <th scope="col">Tipo de sangre</th>
            <th scope="col">Años de experiencia</th>
            <th scope="col">Fecha de nacimiento</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($doctores as $doctor)
        <tr class="centrar">
            <td>{{$doctor->id}}</td>
            <td>{{$doctor->nombre}}</td>
            <td>{{$doctor->apellido}}</td>
            <td>{{$doctor->direccion}}</td>
            <td>{{$doctor->telefono}}</td>
            <td>{{$doctor->sangre}}</td>
            <td>{{$doctor->exp}}</td>
            <td>{{$doctor->fechanac}}</td>
            <td>
                <form action="{{ route ('doctores.destroy', $doctor->id ) }}" method="POST">
                <a href="doctores/{{$doctor->id}}/edit" class="btn btn-secondary">Editar</a>
                @csrf
                @method("DELETE")
                <button type= "submit" class="btn btn-danger">Borrar</button>
                </form>
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


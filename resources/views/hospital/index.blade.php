@extends('adminlte::page')

@section('title', 'Crud Hospital')

@section('content_header')
    <h1>Crud Hospital</h1>
@stop

@section('content')

<a href="hospitales/create" class="btn btn-primary mb-3">Crear</a>

<table id="tabhospital" class="table table-striped shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr class="centrar">
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Direccion</th>
            <th scope="col">Telefono</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($hospitales as $hospital)
        <tr class="centrar">
            <td>{{$hospital->id}}</td>
            <td>{{$hospital->nombre}}</td>
            <td>{{$hospital->direccion}}</td>
            <td>{{$hospital->telefono}}</td>
            <td>{{$hospital->ciudad}}</td>
            <td>
            <div class="centrar">
                <form action="{{ route ('hospitales.destroy', $hospital->id ) }}" method="POST">
                <a href="hospitales/{{$hospital->id}}/edit" class="btn btn-secondary">Editar</a>
                @csrf
                @method("DELETE")
                <button type= "submit" class="btn btn-danger">Borrar</button>
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
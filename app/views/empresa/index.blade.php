@extends('comun.plantilla')

@section('titulo', 'Crear empresa')

@section('contenido')
<div class="col-md-9">
    <div class="list-group">
        @foreach ($empresas as $empresa)
            <a href="/empresa/{{ $empresa->id }}" class="list-group-item"> {{ $empresa->nombre }} </a>
        @endforeach
    </div>
</div>
<div class="col-md-3">
    <div class="well">
        <p>Selecciona una empresa para ver sus códigos promocionales</p>
    </div>
</div>
@stop





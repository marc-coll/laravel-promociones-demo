@extends('comun.plantilla')

@section('titulo', 'Crear empresa')

@section('contenido')
<div class="jumbotron">
    <h2>{{ $promocion->nombre }} | {{ $promocion->empresa->nombre }}</h2>
    <p>{{ $promocion->explicacion }}</p>
    <p><b>Código:</b> {{ $promocion->codigo }}</p>
    <p><a href=" {{ $promocion->empresa->web }}"> {{ $promocion->empresa->web }} </a></p>
</div>


@stop







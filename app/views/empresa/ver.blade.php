@extends('comun.plantilla')

@section('titulo', 'Crear empresa')

@section('contenido')
<div class="jumbotron">
    <h2>{{ $empresa->nombre }}</h2>
    <p>Desde aquí puedes ver todas las promociones de la empresa {{ $empresa->nombre }}</p>
    <p><a href=" {{ $empresa->web }}"> {{ $empresa->web }} </a></p>
</div>
    @foreach ($empresa->promociones as $promocion)
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading"> {{ $promocion->nombre }}</div>
                <div class="panel-body">
                    {{ $promocion->explicacion }} <br>
                    <hr>
                    {{ $promocion->codigo }}
                </div>
            </div>
        </div>
    @endforeach


@stop







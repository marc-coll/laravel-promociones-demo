@extends('comun.plantilla')


@section('contenido')
@if (Session::has('mensaje'))
<div class="alert alert-warning">{{ Session::get('mensaje') }}</div>
@endif

<div class="col-md-9">
    <table class="table">
        <tr>
            <th>Nombre</th>
            <th>Empresa</th>
            <th>Código</th>
            <th>Página web</th>
        </tr>
    @foreach($promociones as $promocion)
        <tr>
            <td><a href="/promocion/{{ $promocion->id }}" >{{ $promocion->nombre }} </a></td>
            <td> {{ $promocion->empresa->nombre }} </td>
            <td> {{ $promocion->codigo }} </td>
            <td> <a href=" {{ $promocion->empresa->web }} ">{{ $promocion->empresa->web }}</a></td>
        </tr>
    @endforeach
    </table>
</div>
<div class="col-md-3">
    <div class="well">
        <p>Aquí puedes ver un listado de todos los códigos promocionales de la página. <br>
            ¡Los más recientes son los que salen primeros!</p>
    </div>
</div>
@stop
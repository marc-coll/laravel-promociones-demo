@extends('comun.plantilla')


@section('contenido')
    @if (Session::has('mensaje'))
        <div class="alert alert-warning">{{ Session::get('mensaje') }}</div>
    @endif

    @foreach($empresas as $empresa)
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><a href="{{ $empresa->web }}"> {{ $empresa->nombre }}</a></h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <tr>
                        <th class="col-md-9">Nombre</th>
                        <th class="col-md-3 text-right">Código</th>
                    </tr>
                    @foreach ($empresa->promociones as $promocion)
                        <tr>
                            <td><a href="/promocion/{{ $promocion->id }}" >{{ $promocion->nombre }} </a></td>
                            <td class="success text-right"> {{ $promocion->codigo }}</td>
                        </tr>
                    @endforeach
                </table>
                <a href="{{ $empresa->web }}">Visitar página web</a>
            </div>
        </div>
    </div>
@endforeach
@stop
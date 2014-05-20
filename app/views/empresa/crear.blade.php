@extends('comun.plantilla')

@section('titulo', 'Crear empresa')

@section('contenido')
<div class="jumbotron">
    <h1>Crear nueva empresa</h1>
    <p>Crea una nueva empresa a la cuál podrás añadir cupones y promocions.</p>
    {{ Form::open(array('class' => 'form-horizontal', 'url' => 'empresa/store') ) }}
    <div class="form-group">
        {{ Form::label('nombre', 'Nombre empresa', array('class' => 'control-label col-sm-2') ) }}
        <div class="col-sm-10">
            {{ Form::text('nombre', null, array('class' => 'form-control', 'placeholder' => 'Promociones') ) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('web', 'Página web', array('class' => 'control-label col-sm-2') ) }}
        <div class="col-sm-10">
            {{ Form::text('web', null, array('class' => 'form-control', 'placeholder' => 'http://promociones.com') ) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Crear empresa', array('class' => 'btn btn-primary') )}}
            <a href="/" class="btn btn-default">Cancelar</a>
        </div>
    </div>
    {{ Form::close() }}
</div>


@stop
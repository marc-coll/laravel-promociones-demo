@extends('comun.plantilla')

@section('titulo', 'Crear empresa')

@section('contenido')
<div class="jumbotron">
    <h1>Crear nueva promoción</h1>
    <p>Crear una promoción para una empresa existente. <br>¿La empresa aún no existe?
        <a href="/empresa/nueva" class="btn btn-primary">Crear empresa</a></p>
    {{ Form::open(array('class' => 'form-horizontal', 'url' => 'promocion/store') ) }}

    <div class="form-group">
        {{ Form::label('empresa_id', 'Empresa', array('class' => 'control-label col-sm-3') ) }}
        <div class="col-sm-9">
            {{ Form::select('empresa_id', $empresas, null, array('class' => 'form-control') ) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('nombre', 'Nombre de la promocion', array('class' => 'control-label col-sm-3') ) }}
        <div class="col-sm-9">
            {{ Form::text('nombre', null, array('class' => 'form-control', 'placeholder' => '10% de descuento') ) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('codigo', 'Código', array('class' => 'control-label col-sm-3') ) }}
        <div class="col-sm-9">
            {{ Form::text('codigo', null, array('class' => 'form-control', 'placeholder' => '12323eE') ) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('explicacion', 'Explicación', array('class' => 'control-label col-sm-3') ) }}
        <div class="col-sm-9">
            {{ Form::textarea('explicacion', null, array('class' => 'form-control', 'placeholder' => '') ) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-10">
            {{ Form::submit('Crear promoción', array('class' => 'btn btn-primary') )}}
            <a href="/" class="btn btn-default">Cancelar</a>
        </div>
    </div>
    {{ Form::close() }}
</div>


@stop
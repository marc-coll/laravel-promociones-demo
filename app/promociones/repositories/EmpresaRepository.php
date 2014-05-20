<?php namespace promociones\repositories;

use promociones\Empresa;

class EmpresaRepository {

    public function obtener($id)
    {
        return Empresa::find($id);
    }

    public function obtenerTodos()
    {
        return Empresa::all();
    }

    public function guardar($input)
    {
        $empresa = new Empresa;
        $empresa->fill($input)->save();
    }

    public function actualizar($id, $input)
    {
        $empresa = Empresa::find($id);
        $empresa->fill($input)->save();
    }

    /*
    * Devuelve la empresa con identificador $id con todas sus promociones
    */
    public function obtenerConCodigos($id)
    {
        return Empresa::with('promociones')->get()->find($id);
    }

    /*
    * Devuelve todas las empresas con sus respectivas promociones.
    */
    public function obtenerEmpresasConPromociones()
    {
        return Empresa::with('promociones')->get();
    }
}
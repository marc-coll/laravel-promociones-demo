<?php namespace promociones\repositories;

use promociones\Promocion;

class PromocionRepository {

    public function obtener($id)
    {
        return Promocion::find($id);
    }

    public function obtenerTodos()
    {
        // devolvemos todos los códigos de promoción ordenados por fecha
        return Promocion::with('Empresa')->orderBy('updated_at', 'DESC')->get();
    }

    public function guardar($input)
    {
        $empresa = new Promocion;
        $empresa->fill($input)->save();
    }

    public function actualizar($id, $input)
    {
        $empresa = Promocion::find($id);
        $empresa->fill($input)->save();
    }
}
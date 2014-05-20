<?php namespace promociones;

class Promocion extends \Eloquent {

    protected $table = 'promociones';
    protected $fillable = ['empresa_id', 'nombre', 'codigo', 'explicacion'];

    public function empresa()
    {
        return $this->belongsTo('promociones\Empresa');
    }
}
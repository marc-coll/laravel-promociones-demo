<?php namespace promociones;

class Empresa extends \Eloquent {

    protected $table = 'empresas';
	protected $fillable = ['nombre', 'web'];

    public function promociones()
    {
        return $this->hasMany('promociones\Promocion');
    }

}
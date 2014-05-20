<?php namespace promociones;

class Empresa extends \Eloquent {

    protected $table = 'empresas';
    // la variable $fillable nos permite decir qué campos se pueden rellenar
    // con el método de Laravel de mass-assignment
    protected $fillable = ['nombre', 'web'];

    /*
    * Establece la relacion de empresa con promoción.
    * Cada Empresa tiene VARIAS (many) promociones
    */
    public function promociones()
    {
        return $this->hasMany('promociones\Promocion');
    }

}
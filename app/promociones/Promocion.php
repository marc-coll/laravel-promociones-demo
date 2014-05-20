<?php namespace promociones;

class Promocion extends \Eloquent {

    protected $table = 'promociones';
    // la variable $fillable nos permite decir qué campos se pueden rellenar
    // con el método de Laravel de mass-assignment
    protected $fillable = ['empresa_id', 'nombre', 'codigo', 'explicacion'];

    /*
     * Establece la relacion entre las promociones y la empresa.
     * Cada promoción pertenece (belongs) a UNA empresa.
     */
    public function empresa()
    {
        return $this->belongsTo('promociones\Empresa');
    }
}
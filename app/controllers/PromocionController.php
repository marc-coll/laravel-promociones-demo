<?php

use promociones\repositories\PromocionRepository;
use promociones\repositories\EmpresaRepository;

class PromocionController extends \BaseController {

    private $promocion;

    public function __construct(PromocionRepository $promocion, EmpresaRepository $empresa)
    {
        $this->promocion = $promocion;
        $this->empresa = $empresa;
    }

    /**
     * Muestra una lista de todas las promociones.
     *
     * @return Response
     */
    public function index()
    {
        $promociones = $this->promocion->obtenerTodos();
        return View::make('promocion.index')->with('promociones', $promociones);
    }

    /**
     * Muestra el formulario para crear una nueva promocion.
     *
     * @return Response
     */
    public function create()
    {
        $empresas = $this->empresa->obtenerTodos()->lists('nombre', 'id');
        return View::make('promocion.crear')->with('empresas', $empresas);
    }

    /**
     * Guarda la nueva promocion creada.
     *
     * @return Response
     */
    public function store()
    {
        $this->promocion->guardar(Input::all());
        return Redirect::to('/')->with('mensaje', 'Promoción creada correctamente');
    }

    /**
     * Muestra la promoción deseada.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $promocion = $this->promocion->obtener($id);
        return View::make('promocion.ver')->with('promocion', $promocion);
    }

    /**
     * Muestra el formulario para modificar la promocion deseada.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $promocion = $this->promocion->obtener($id);
        return View::make('promocion.edit')->with('promocion', $promocion);
    }

    /**
     * Actualiza la promoción deseada.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        $this->promocion->actualizar($id, Input::all());
        return Redirect::to('/')->with('mensaje', 'Promoción actualizada correctamente');
    }

    /**
     * Elimina una promoción del sistema.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
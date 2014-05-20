<?php

use promociones\repositories\EmpresaRepository;

class EmpresaController extends \BaseController {

    private $empresa;

    public function __construct(EmpresaRepository $empresa)
    {
        $this->empresa = $empresa;
    }

    /**
     * Muestra una lista de todas las empresas.
     *
     * @return Response
     */
    public function index()
    {
        $empresas = $this->empresa->obtenerTodos();
        return View::make('empresa.index')->with('empresas', $empresas);
    }

    /**
     * Muestra el formulario para crear una nueva empresa.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('empresa.crear');
    }

    /**
     * Guarda la nueva empresa creada.
     *
     * @return Response
     */
    public function store()
    {
        $this->empresa->guardar(Input::all());
        return Redirect::to('/')->with('message', 'Empresa creada correctamente');
    }

    /**
     * Muestra la empresa deseada.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $empresa = $this->empresa->obtenerConCodigos($id);
        return View::make('empresa.ver')->with('empresa', $empresa);
    }

    /**
     * Muestra el formulario para modificar la empresa deseada.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $empresa = $this->empresa->obtener($id);
        return View::make('empresa.modificar')->with('empresa', $empresa);
    }

    /**
     * Actualiza la empresa deseada.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        $this->empresa->actualizar($id, Input::all());
        return Redirect::to('/')->with('message', 'Empresa actualizada correctamente');
    }

    /**
     * Elimina una empresa del sistema.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
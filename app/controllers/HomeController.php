<?php

use promociones\repositories\EmpresaRepository;
class HomeController extends BaseController {

    private $empresa;
	public function __construct(EmpresaRepository $empresa)
    {
        $this->empresa = $empresa;
    }

	public function index()
	{
        $empresas = $this->empresa->obtenerEmpresasConPromociones();
		return View::make('index')->with('empresas', $empresas);
	}

}

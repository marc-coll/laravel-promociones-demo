<?php
// directorio donde se encuentra el repositorio de la Empresa
use promociones\repositories\EmpresaRepository;

/*
 *  Controlador que nos genera la página principal, la portada
 *  de la aplicación.
 */
class HomeController extends BaseController {

    private $empresa;

    // Inyectamos al controlador el repositorio de la Empresa.
	public function __construct(EmpresaRepository $empresa)
    {
        $this->empresa = $empresa;
    }

	public function index()
	{
        // obtenemos el listado de empresas del repositorio,
        // y no directamente desde la base de datos (Eloquent).
        $empresas = $this->empresa->obtenerEmpresasConPromociones();
		return View::make('index')->with('empresas', $empresas);
	}

}

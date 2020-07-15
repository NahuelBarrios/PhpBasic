<?php

class mvcController
{
	#LLAMADA A LA PLANTILLA
	#--------------------------------------------------------
	public function plantilla()
	{
		include "vista/template.php";
	}

	#INTERACCION DEL USUARIO
	#-------------------------------------------------------
	public function enlacePaginasController()
	{
		if(isset($_GET["action"]))
		{
			$enlacesController = $_GET["action"];
		}
		else
		{
			$enlacesController = "index";	
		}

		$respuesta = enlacesPaginas::enlacePaginasModelo($enlacesController);

		include $respuesta;
	}
}
?>
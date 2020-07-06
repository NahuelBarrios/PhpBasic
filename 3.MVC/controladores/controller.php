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
		$enlacesController = $_GET["action"];

		$respuesta = enlacesPaginas::enlacePaginasModelo($enlacesController);

		include $respuesta;
	}


}



?>
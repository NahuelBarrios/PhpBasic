<?php
class enlacesPaginas{

	public function enlacePaginasModelo($enlacesModel)
	{
		if($enlacesModel == "inicio" || $enlacesModel == "nosotros" || $enlacesModel == "servicios" || $enlacesModel == "contactenos")
		{
			$module = "vista/modulos/".$enlacesModel.".php"; #Asi se contactena con los .

		}



		return $module;
	}
}
?>
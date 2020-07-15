<?php
class enlacesPaginas{

	public function enlacePaginasModelo($enlacesModel)
	{
		if($enlacesModel == "nosotros" || $enlacesModel == "servicios" || $enlacesModel == "contactenos")
		{
			$module = "vista/modulos/".$enlacesModel.".php"; #Asi se contactena con los .

		}
		else if($enlacesModel == "index")
		{
			$module = "vista/modulos/inicio.php";
		}
		else
		{
			$module = "vista/modulos/inicio.php"; #Lista blanca. Es una restriccion para los q quieren "adulterar la url" y no salga error	
		}
		return $module;
	}
}
?>
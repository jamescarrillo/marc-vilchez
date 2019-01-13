<?php
class Page
{

	public function enlacesPageModel($enlace)
	{

		if ($enlace == "inicio" ||
			$enlace == "inicio" ||
			$enlace == "inicio") {
			
				$module = "view/module/" . $enlace . ".php";
		}else {

			$module = "view/module/inicio.php";

		}

		return $module;

	}
}
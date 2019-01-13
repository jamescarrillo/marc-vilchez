<?php
class Controller{
	public function Page(){
		include "view/plantilla.php";
	}
	
	public function enlacesPageController(){

		if(isset( $_GET['modulo'])){
			
			$enlaces = $_GET['modulo'];
			
		}

		else{

			$enlaces = "index";
		}

		$r = new Page();
		$respuesta = $r->enlacesPageModel($enlaces);

		include $respuesta;

	}
}
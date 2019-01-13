<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
#UTIL

#COMPONENTES
require_once "component/modal.php";
require_once "component/div.php";
require_once "component/iconcard.php";
require_once "component/input.php";
require_once "component/navitem.php";
require_once "component/option.php";
require_once "component/select.php";

#Conexion y enrutador
require_once "model/conexion.php";
require_once "model/page.php";

#CONTROL
require_once "control/controller.php";

#modelos 

#beans

$controller = new Controller;
$controller->Page();
?>
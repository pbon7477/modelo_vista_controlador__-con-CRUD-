<?php 

require_once("modelo/Personas_modelo.php");

$persona = new Personas_Modelo();
$matrizPersonas = $persona->get_Personas();



require_once("vista/Personas_view.php");

?>
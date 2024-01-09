<?php 
include("conectar.php");
$base = Conectar::conexion();
$id = $_GET["id"];
$base->query("DELETE FROM datos_usuarios WHERE id = '$id'");

header("Location:../index.php");

?> 
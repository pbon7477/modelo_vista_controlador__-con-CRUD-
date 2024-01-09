<?php 
include("conectar.php");
$base = Conectar::conexion();

if(isset($_POST["cr"])){
    $nombre = $_POST["nom"];
    $apellido = $_POST["ape"];
    $direccion = $_POST["dir"];

    $sql = "INSERT INTO datos_usuarios (nombre,apellido,direccion) VALUES(:nom, :ape, :dir)";

    $resultado = $base->prepare($sql);
    $resultado->execute(array(":nom"=> $nombre, ":ape"=>$apellido, ":dir"=> $direccion));

    header("Location:../index.php");
}


?>
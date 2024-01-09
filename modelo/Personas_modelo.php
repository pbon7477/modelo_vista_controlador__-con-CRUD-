<?php 

class Personas_Modelo{
    private $db;
    private $presonas;
    public function __construct(){
        require_once("conectar.php");
        $this->db = Conectar::conexion();
        $this->presonas = array();
    }

    public function get_Personas(){
        require("paginacion.php");
        $consulta = $this->db->query("SELECT * FROM datos_usuarios LIMIT $empezar_desde, $tamagno_pagina");
        while($filas = $consulta->fetch(PDO::FETCH_ASSOC)){
            $this->presonas[] = $filas;
        }

        return $this->presonas;
    }

    public function delete_Persona($param_id){
        $consulta = $this->db->query("DELETE FROM datos_usuarios WHERE id = ?");
        $consulta->execute([$param_id]);
    }

}

?>
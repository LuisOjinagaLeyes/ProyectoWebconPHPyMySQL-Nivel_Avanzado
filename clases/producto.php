<?php
include_once("clases/basededatos.php");

class Producto {
    public $base;
    
    function __construct($base_datos) {
        $this->base = $base_datos;
    }

    public function listar_productos() {
        $query = $this->base->ejecutarQuery("SELECT * FROM productos");
        return $query;
    }
    
}
$productos = new Producto($Basedatos);
?>
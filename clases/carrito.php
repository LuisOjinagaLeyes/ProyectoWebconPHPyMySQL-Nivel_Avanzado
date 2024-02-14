<?php
include_once("clases/basededatos.php");


class Carrito {
    public $base;

    public function __construct($base) {
        $this->base = $base;
    }

    public function introducir_compra($cod, $pro, $desc, $pre) {
        $query = $this->base->ejecutarQuery("INSERT INTO compras VALUES(DEFAULT, $cod, '$pro', '$desc', $pre)");
        return $query;
    }

    public function eliminar_compra($id_com) {
        $query = $this->base->ejecutarQuery("DELETE FROM compras WHERE id_compra=$id_com");
        return $query;
    }

    public function listar_compra() {
        $query = $this->base->ejecutarQuery("SELECT compras.id_compra, compras.codigo, productos.producto, productos.descripcion, productos.precio FROM compras INNER JOIN productos ON compras.codigo = productos.codigo");
        return $query;
    }
}
$carrito = new Carrito($Basedatos);
?>
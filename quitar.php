<?php
include_once("clases/basededatos.php");
include_once("clases/carrito.php");


if(isset($_GET['id_compra'])) {
    $id_compra = $_GET['id_compra'];
    $carrito->eliminar_compra($_GET['id_compra']);

    header("Location:unidad7.php?empty_cart");
} else {
    echo "Falta parámetro para 'id_compra' en la solicitud.";
}

?>
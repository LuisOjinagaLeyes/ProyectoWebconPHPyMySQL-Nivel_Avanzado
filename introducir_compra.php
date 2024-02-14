<?php
include_once("clases/basededatos.php");
include_once("clases/carrito.php");


if(isset($_GET['codigo']) && isset($_GET['producto']) && isset($_GET['descripcion']) && isset($_GET['precio'])) {
    $codigo = $_GET['codigo'];
    $producto = $_GET['producto'];
    $descripcion = $_GET['descripcion'];
    $precio = $_GET['precio'];

    $carrito->introducir_compra($_GET['codigo'],$_GET['producto'], $_GET['descripcion'],$_GET['precio']);

    header("Location:unidad7.php?ok");
} else {
    echo "Faltan parámetros en la solicitud.";
}

?>
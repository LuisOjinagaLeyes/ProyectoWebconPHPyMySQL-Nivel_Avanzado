<?php
include("conexión_bd.php");
$id_clase = $_GET['borrar'];
mysqli_query($conexión_bd, "DELETE FROM clases WHERE id_clase = '$id_clase'");
header("Location: unidad1.php");
?>
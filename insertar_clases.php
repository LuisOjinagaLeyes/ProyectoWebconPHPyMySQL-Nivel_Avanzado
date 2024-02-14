<?php
$id_clase = $_POST['id_clase'];
$unidad= $_POST['unidad'];
$fecha= $_POST['date'];

include("conexión_bd.php");

$verificación_id = mysqli_query($conexión_bd, "SELECT id_clase FROM clases WHERE id_clase='$id_clase'");

if (mysqli_num_rows($verificación_id)==0) {

    mysqli_query($conexión_bd, "INSERT INTO clases VALUES('$id_clase', '$unidad', '$fecha')");
    header("Location: unidad1.php?ok");
} else {
    header("Location: unidad1.php?error");
}
?>
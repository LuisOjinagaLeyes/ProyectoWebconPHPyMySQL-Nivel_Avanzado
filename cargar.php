<?php
session_start();
include("conexión_bd.php");

$nombre_quinto_form = $_POST['nombre'];
$apellido_quinto_form = $_POST['apellido'];
$email_quinto_form = $_POST['email'];
$consulta_quinto_form = $_POST['consulta'];


if ($_POST['cod_Captcha'] == $_SESSION['captcha']) {
    mysqli_query($conexión_bd, "INSERT INTO consultas VALUES ('$nombre_quinto_form', '$apellido_quinto_form', '$email_quinto_form', '$consulta_quinto_form')");
    header("Location: unidad5.php?ok");
} else {
    header("Location: unidad5.php?errorCapt");
}
?>
<?php
include ("clases/usuarios.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre_usuario = $_POST['nombre'];
    $apellido_usuario = $_POST['apellido'];
    $fecha_usuario = $_POST['fecha'];

    $usuarios = new Usuarios($nombre_usuario, $apellido_usuario, $fecha_usuario);
    echo "<h3>Usuario: </h3>";
    $usuarios->imprime_caracteristicas();
    

}
?>
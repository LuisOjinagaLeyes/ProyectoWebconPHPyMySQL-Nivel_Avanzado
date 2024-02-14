<?php
if($_POST){
    $nombre_apellido_usuario = $_POST['nombre_apellido'];
    $email_usuario = $_POST['email'];
    $comentario_usuario = $_POST['comentario'];

    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $fecha = date('j-m-Y', $hora);
    $hora = getdate(time());

    $datos = "<div class='comentario'><p><strong>Nombre y Apellido:</strong> ".$_POST['nombre_apellido']."</p><p><strong>Email:</strong> ".$_POST['email']."</p><p><strong>Comentario:</strong> ".$_POST['comentario']."</p><p><strong>Fecha y Hora:</strong>".$fecha."/".$hora['hours'] . ":" . $hora['minutes'] . ":" . $hora['seconds']."</p><hr/></div>";
    $archivo = fopen('comentarios.txt', 'c');
    $content_file = file_get_contents("comentarios.txt");
    $text_f = $datos.$content_file;
    fwrite($archivo, $text_f);
    fclose($archivo);

    header('Location: unidad3.php');
}
?>
<?php
if ($_GET) {
    $dia = $_GET['dia'];
    $mes = $_GET['mes'];
    $ano = $_GET['año'];

    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $fechaHoy = date('j-m-Y');

    $resta = strtotime($ano.'-'.$mes.'-'.$dia)-strtotime($fechaHoy);

    if($resta >= 0) {
        $resta1 = $resta / (86400);
        echo '<p>Faltan '.$resta1.' días para el evento seleccionado.</p>';
    }
    if ($resta <= 0){
        $resta2 = $resta / (-86400);
        echo '<p>Ya pasaron '.$resta2.' días desde ese evento seleccionado. Seleccione otra fecha para ver si hay disponible otro evento que desee.</p>';
    }

}
?>
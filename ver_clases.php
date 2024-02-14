<?php
include ("conexión_bd.php");

$mostrar_agenda = mysqli_query($conexión_bd, "SELECT * FROM clases");

while($alumnos_agendas=mysqli_fetch_assoc($mostrar_agenda)) { ?>
<div class="agenda_alumnos">
    <h4>id-Clase: <?php echo $alumnos_agendas['id_clase']; ?></h4>
    <p><b>Unidad: </b><?php echo $alumnos_agendas['unidad']; ?></p>
    <p><b>Fecha: </b><?php echo $alumnos_agendas['fecha']; ?></p>
    <p class="borrar"><a href="borrar.php?borrar=<?php echo $alumnos_agendas['id_clase']; ?>">Borrar</a></p>
</div>
<?php 
} ?> 

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="estilos.css">
</head>

<body>

<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); 
		include ("conexión_bd.php");
		?>
	</nav>
	</header>
	<section>
		<h2>Agenda de clases</h2>
		<form action="insertar_clases.php" method="POST">
			<input type="text" name="id_clase" placeholder="id Clase" required maxlength="5">
			<input type="text" name="unidad" placeholder="Unidad" required maxlength="30">
			<input type="date" name="date" id="fecha">
			<input type="submit" value="Registrar" required class="btn_registrar">
		</form>
		<?php include("ver_clases.php"); ?>
		<?php if(isset($_GET['error'])) { echo '<p>Ya existe un alumno registrado con ese id</p>'; } ?>
	</section>
	<aside>
    
</aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>

</div>
</body>
</html>
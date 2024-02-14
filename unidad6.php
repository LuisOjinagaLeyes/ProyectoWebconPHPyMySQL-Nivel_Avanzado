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
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Usuarios</h2>
		<form action="unidad6.php" method="POST">
			<input type="text" name="nombre" placeholder="Nombre" maxlength="30" required>
			<input type="text" name="apellido" placeholder="Apellido" maxlength="50" required>
			<input type="date" name="fecha" required>
			<input type="submit" value="Calcular Edad" class="btn_registrar" >
		</form>
		<?php include ("caract_usuarios.php") ?>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>
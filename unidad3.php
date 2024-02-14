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
		<h2>Comentarios</h2>
	<div>
		<form action="comentarios.php" method="POST" class="form_comentario">
			<input type="text" name="nombre_apellido" placeholder="Nombre y Apellido" required maxlength="100">
			<input type="email" name="email" placeholder="Correo Electrónico" required maxlength="100" >
			<textarea name="comentario" rows="5" cols="50" placeholder="Comentarios"></textarea>
			<button type="submit" name="enviar_inf" class="btn_registrar">Enviar</button>
		</form>
		<?php
		if(file_exists("comentarios.txt")) {
			$mostrar = fopen("comentarios.txt", "r") or die ("No se puede abrir el archivo");
			fpassthru($mostrar);
			fclose($mostrar);
		}
		?>
	</div>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>
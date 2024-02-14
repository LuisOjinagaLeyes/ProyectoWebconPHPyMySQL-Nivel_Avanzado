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
		<h2>Eventos</h2>
		<form action="unidad2.php" method="GET">
        <input type="number" id="day" name="dia" placeholder="Dia" min="1" max="31" required>
		<input type="number" id="month" name="mes" placeholder="Mes" min="1" max="12" required>
		<input type="number" id="year" name="año" placeholder="Año" min="1901" max="2100" required>
		<input type="submit" name="calcular" value="calcular" class="btn_registrar" >
		</form>
		<?php
		include ('calculo_fecha.php');
		?>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>
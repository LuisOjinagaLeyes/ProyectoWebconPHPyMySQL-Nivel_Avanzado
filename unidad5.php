<?php session_start(); ?>
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
		<?php
		include("conexión_bd.php");
		?>
		<h2>Consultas</h2>
		<?php
		function txt_random_Captcha() {
			$cadena_character = "0123456789abcdfghijklmnopqrstuvwxyzABCDFGHIJKLMNOPQRSTUVWXYZ!#$%&/?¿";
			$cadena_txt_Captcha = '';
			for($i=0; $i<7; $i++) {
				$cadena_txt_Captcha .= $cadena_character[rand(0,66)];
			}
			return $cadena_txt_Captcha;
		}

		$_SESSION['captcha'] = txt_random_Captcha();
		?>
		<form action="cargar.php" method="POST" class="form_comentario" >
			<input type="text" name="nombre" placeholder="Nombre" maxlength="30" required>
			<input type="text" name="apellido" placeholder="Apellido" maxlength="50" required>
			<input type="email" name="email" placeholder="Correo Electrónico" maxlength="100" required>
			<textarea name="consulta" id="" cols="20" rows="5" placeholder="Consulta..." required></textarea>
			<img src="img_captcha.php" alt="captcha" class="responsive_Captcha">
			<input type="text" name="cod_Captcha" placeholder="Captcha" required>
			<input type="submit" name="bt_enviar" class="btn_registrar">
		</form>
		<?php
		if(isset($_GET['errorCapt'])){
			echo "<p>Código de Captcha Incorrecto</p>";
		}
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
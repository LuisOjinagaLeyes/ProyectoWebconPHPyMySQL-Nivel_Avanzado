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
		<?php 
		include("botonera.php");
		include_once("clases/producto.php");
		include_once("clases/carrito.php");
		?>
	</nav>
	</header>
	<section>
		<h2>Compras</h2>
		<table>
		<tr>
			<th>Código</th>
			<th>Producto</th>
			<th>Descripción</th>
			<th>Precio</th>
			<th>Administrador</th>
		</tr>
		<?php
		$verProductos = $productos->listar_productos();
		for($i=0; $i<count($verProductos); $i++){
		?>
		<tr>
			<td>
				<?php echo $verProductos[$i]['codigo']; ?>
			</td>
			<td>
				<?php echo $verProductos[$i]['producto']; ?>
			</td>
			<td>
				<?php echo $verProductos[$i]['descripcion']; ?>
			</td>
			<td>
				<?php echo $verProductos[$i]['precio']; ?>
			</td>
			<td>
			<form method="GET" action="introducir_compra.php">
				<input type="hidden" name="codigo" value="<?php echo $verProductos[$i]['codigo']; ?>">
				<input type="hidden" name="producto" value="<?php echo $verProductos[$i]['producto']; ?>">
				<input type="hidden" name="descripcion" value="<?php echo $verProductos[$i]['descripcion']; ?>">
				<input type="hidden" name="precio" value="<?php echo $verProductos[$i]['precio']; ?>">
				<input type="submit" name="comprar" value="Comprar" class="btn_registrar">
			</form>
			</td>
		</tr>
		<?php } ?>
		<?php
		if(isset($_GET['ok'])){
			echo "<p>Compra cargada al Carrito!</p>";
		}
		?>
		</table>
	</section>
	<aside>
    <h4>Carrito</h4>
	<table>
		<?php if(isset($_GET['empty_cart'])) { 
			echo "<p>Carrito Vació</p>";?>
		<?php } else {
			echo 
			"<tr>
			<th>Código</th>
			<th>Producto</th>
			<th>Precio</th>
			<th>Admin</th>
			</tr>"; }?>
		<?php 
		$verCompras = $carrito->listar_compra();
		if (is_array($verCompras)) {
		for ($i=0; $i <count($verCompras); $i++) {
		?>
		<tr>
			<td>
			<?php echo $verCompras[$i]['codigo']; ?>
			</td>
			<td>
			<?php echo $verCompras[$i]['producto']; ?>
			</td>
			<td>
			<?php echo $verCompras[$i]['precio']; ?>
			</td>
			<td>
			<form method="GET" action="quitar.php">
				<input type="hidden" name="id_compra" value="<?php echo $verCompras[$i]['id_compra']; ?>">
				<input type="submit" name="Quitar" value="Quitar" class="btn_registrar">
			</form>
			</td>
		</tr>
		<?php } }?>
	</table>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>
<?php require "layout/header.php" ?>

<div class="container-titulo-nuevo">
	<form class="formulario-nuevo" action="" method="get" style="text-align:center"><br>

		<h1 class="titulo-nuevo">REGISTRO DE PRODUCTOS</h1>


		<label class="label-nuevo" for="nombre">NOMBRE</label> <br>
		<input class="input-nuevo" type="text" placeholder="Producto" name="nombre" required><br>

		<label class="label-nuevo" for="precio">PRECIO</label><br>

		<input class="input-nuevo" type="text" placeholder="$" name="precio" required><br>

		<input type="submit" class="boton-nuevo btn btn-success" name="btn" value="GUARDAR" style="margin-top:10px"><br>
		<input type="hidden" class="boton-nuevo" name="m" value="guardar">
	</form>
</div>

<?php require "layout/footer.php" ?>
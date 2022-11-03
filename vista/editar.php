<?php require "layout/header.php" ?>

<div class="container-titulo-editar">
	
	
	<form class="formulario-editar" action="" method="get">
	<h1 class="titulo-editar">Actualizar registro</h1><br>
	<hr>
		<?php
		foreach ($dato as $key => $value) :
			foreach ($value as $v) :
		?>
				<label class="label-editar" for="">NOMBRE</label> <br>
				<input class="input-editar" type="text" name="nombre" value="<?php echo $v['nombre'] ?>"><br>
				<label class="label-editar" for="">PRECIO</label><br>
				<input class="input-editar" type="text" name="precio" value="<?php echo $v['precio'] ?>"><br>
				<input class="input-editar" type="hidden" name="id" value="<?php echo $v['id'] ?>">
				<input  type="submit" class="boton-editar btn-success" style="margin-top:10px" name="btn" value="ACTUALIZAR">
				<input type="hidden" class="boton-editar" name="m" value="actualizar">
		<?php
			endforeach;
		endforeach;
		?>

	</form>

</div>
<?php require "layout/footer.php" ?>
<?php
require "layout/header.php";

?>

<div class="container-caja-index">
	<a href="index.php?m=nuevo" class="boton-vista-nuevo btn btn-primary">NUEVO REGISTRO</a>
	<table class="mostrar-datos-index">
		<br>
		<thead class="thead-visto-nuevo">
			<tr>
				<td class="titulo-datos">Id</td>
				<td class="titulo-datos">Nombre</td>
				<td class="titulo-datos">Precio</td>
				<td class="titulo-datos" style="padding:2px 3px; ">Acción</td>
			</tr>
		</thead>
		<tbody class="tbody-visto-nuevo">
			<?php
			if (!empty($dato)) :
				foreach ($dato as $key => $value)
					foreach ($value as $va) : ?>
					<tr>
						<td class="datos"><?php echo $va['id'] ?></td>
						<td class="datos"><?php echo $va['nombre'] ?></td>
						<td class="datos"><?php echo $va['precio'] ?></td>
						<td class="botones-nuevo">
							<a class="btn btn-success" style="padding:2% 13% 3% 13%;" href="index.php?m=editar&id=<?php echo $va['id'] ?>">EDITAR</a>
							<a class="btn btn-danger" style="padding:2% 10% 3% 10%;" href="index.php?m=eliminar&id=<?php echo $va['id'] ?>" onclick="return confirm('Estás seguro de eliminar el registro?'); false">ELIMINAR</a>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php else : ?>
				<tr>
					<td colspan="4">No hay registros</td>
				</tr>
			<?php endif ?>
		</tbody>


	</table>






</div>
<?php require "layout/footer.php" ?>
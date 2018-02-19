<?php 
	require_once('encabezado.php');
	require_once('configuracion.php');
	$conexion=mysqli_connect(
		$configuracion['servidor'],
		$configuracion['usuario'],
		$configuracion['contrasena'],
		$configuracion['base_datos']);
	if (!$conexion) {
		die("Error de conexion a la BD: ".mysql_connect_error());	
	}

	$consulta = mysqli_query($conexion, "SELECT * FROM usuarios");
	$usuarios = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

 ?>

 <div class="container">
 	<h2 class="text-center">Lista de Usuarios</h2>
 	<a href="crear_usuario.php" class="btn btn-info"><i class="fa fa-plus-square" aria-hidden="true"></i> Agregar Usuario </a>
 	<table class="table table-inverse">
 		<tr>
 			<th class="text-center">ID</th>
 			<th class="text-center">Nombre</th>
 			<th class="text-center">Apellido</th>
 			<th class="text-center">Email</th>
 			<th class="text-center">Tipo Usuario</th>
 			<th class="text-center">Fecha Creacion</th>
 			<th class="text-center">Opciones</th>
 		</tr>
 		<?php foreach ($usuarios as $usuario):  ?>
 			<tr>
 				<td class="text-center"> <?php echo $usuario ['id']; ?></td>
 				<td class="text-center"> <?php echo $usuario ['nombre']; ?></td>
 				<td class="text-center"> <?php echo $usuario ['apellido']; ?></td>
 				<td class="text-center"> <?php echo $usuario ['email']; ?></td>
 				<td class="text-center"> <?php echo $usuario ['tipo_usuario']; ?></td>
 				<td class="text-center"> <?php echo $usuario ['fecha_creacion']; ?></td>
 				<td class="text-center">
 					<a href="" class="btn btn-success"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
					<a href="" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
 				</td>
 			</tr>
 		<?php  endforeach;?>
 	</table>
 </div>

 <?php
 	require_once('pie_pagina.php'); 
  ?>


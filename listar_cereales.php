 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Inicio de Sesi&oacute;n</title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">  
 	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">  
 	<link rel="stylesheet" type="text/css" href="css/estilos.css"> 

 </head>
 <body>


<?php 
	require_once('configuracion.php');
	$conexion=mysqli_connect(
		$configuracion['servidor'],
		$configuracion['usuario'],
		$configuracion['contrasena'],
		$configuracion['base_datos']);
	if (!$conexion) {
		die("Error de conexion a la Base de Datos: ".mysql_connect_error());	
	}

	$consulta = mysqli_query($conexion, "SELECT * FROM cereales");
	$cereales = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

 ?>

 <div class="container">
 	<h2 class="text-center">Lista de Precios de Cereales</h2>
 	<table class="table table-inverse">
 		<tr>
 			<th class="text-center">Referencia</th>
 			<th class="text-center">Producto</th>
 			<th class="text-center">Unidad</th>
 			<th class="text-center">Valor</th>
 			
 		</tr>
 		<?php foreach ($cereales as $cereal):  ?>
 			<tr>
 				
 				<td class="text-center"> <?php echo $cereal ['referencia']; ?></td>
 				<td class="text-center"> <?php echo $cereal ['producto']; ?></td>
 				<td class="text-center"> <?php echo $cereal ['unidad']; ?></td>
 				<td class="text-center"> <?php echo $cereal ['valor']; ?></td>
 				<td class="text-center">
 					
 				</td>
 			</tr>
 		<?php  endforeach;?>
 	</table>
 </div>



            <script type="text/javascript" src="js/jquery.min.js"></script>
 			<script type="text/javascript" src="js/bootstrap.min.js"></script>
 			<script type="text/javascript" src="js/superV.js"></script>
 		
</body>
</html>



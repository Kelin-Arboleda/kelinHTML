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


	//Valida si las variables estan inicializadas
if (isset($_POST['nombre']) 
	&& isset($_POST['apellido'])
	&& isset($_POST['cedula'])
	&& isset($_POST['sexo'])
	&& isset($_POST['email'])
	&& isset($_POST['direccion'])
	&& isset($_POST['telefono'])
	&& isset($_POST['contrasena'])
	&& isset($_POST['contrasena2'])
	)
{
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$cedula = $_POST['cedula'];
	$sexo = $_POST['sexo'];
	$email = $_POST['email'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
	$contrasena = $_POST['contrasena'];
	$contrasena2 = $_POST['contrasena2'];

	if ($contrasena == $contrasena2)
	{
			$contrasena_enc = sha1($contrasena);//11 Encriptar contraseña
			require_once('configuracion.php');
			$conexion=mysqli_connect(
				$configuracion['servidor'],
				$configuracion['usuario'],
				$configuracion['contrasena'],
				$configuracion['base_datos']);
			if (!$conexion) 
			{
				die("Error de conexion a la Base de Datos: ".mysql_connect_error());	
			}

			$insertar = mysqli_query($conexion, "INSERT INTO usuarios(nombre,apellido,cedula,sexo,email,direccion,telefono,contrasena) 
				VALUES('$nombre','$apellido','$cedula','$sexo','$email','$direccion','$telefono','$contrasena_enc')");
			$consulta = mysqli_affected_rows($conexion);
			if ($consulta == 1) 
				//15 Si es verdad, entonces letrero de tipo success
			{
				?>
				<div class="alert alert-success"> <!--16 crear una alerta></!-->
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>alerta!</strong> Registro exitoso.
				</div>
				<?php 
			}
				//16En caso contrario generar una alerta de falla
			else
			{
				?>
				<div class="alert alert-danger"> <!--17 crear una alerta></!-->
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>alerta!</strong> El registro no fue exitoso, intente nuevamente.
				</div>
				<?php
			}
		}
		else
		{
			?>
			<div class="alert alert-danger"> <!--10 crear una alerta></!-->
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong> Las contraseñas no coinciden</strong>
			</div>
			<?php
		}
	}
	?>

	<div class="container">
		<h1 class="text-center">Formulario de Registro</h1>
		<p class="text-center">
			Por favor Ingese los campos obligatorios(*)</p>
		</p>
		<div class="row"><!--Paso 5 meter formulario dentro de una fila></!-->
			<div class="col-md-2"></div><!--Paso 7 para que quede centrado></!-->
			<!--Creacion de formulario para crear nuevo usuario></!-->
			<form action="crear_usuario.php" class="col-md-8" method="POST"><!--Paso 6 tamaño de los campos></!-->
				<div class="form-group">

					<input type="text" name="nombre" class="form-control j" placeholder="Nombre*" required=""> 			
				</div>
				<div class="form-group">

					<input type="text" name="apellido" class="form-control j" placeholder="Apellido*" required=""> 			
				</div>
				<div class="form-group">

					<input type="text" name="cedula" class="form-control j" placeholder="C&eacute;dula*"> 			
				</div>
				<div class="form-group">
					<label >Sexo</label>
					<select  name="sexo" id="sexo" class="form-group j"> 
						<option value="">Seleccione</option>
						<option value="1">F</option>
						<option value="2">M</option>		
					</div>
					<div class="form-group">

						<input type="email" name="email" class="form-control j" placeholder="Correo Electr&oacute;nico"> 			
					</div>
					<div class="form-group">

						<input type="text" name="direccion" class="form-control j" placeholder="Direcci&oacute;n*" requiered=""> 			
					</div>
					<div class="form-group">

						<input type="text" name="telefono" class="form-control j" placeholder="Tel&eacute;fono"> 			
					</div>

					<div class="form-group"> <!--Paso 1></!-->

						<input type="password" name="contrasena" class="form-control j" placeholder="Contraseña*" required=""> 			
					</div>
					<div class="form-group">
						<label > La contrase&ntilde;a no debe contener mas de 10 caracteres</label>
						
					</div>

					<div class="form-group"> <!--Paso 2></!-->

						<input type="password" name="contrasena2" class="form-control j" placeholder="Ingrese Contraseña Nuevamente*" required=""> 			
					</div>
					<div class="text-center"><!--Paso 3></!-->
						<button type="submit" class="btn btn-success"><i class="fa fa-plus-circle fa-2x" aria-hidden="true">
							Crear</i></button>
						</div>

					</form>
				</div>
			</div>



            <script type="text/javascript" src="js/jquery.min.js"></script>
 			<script type="text/javascript" src="js/bootstrap.min.js"></script>
 			<script type="text/javascript" src="js/superV.js"></script>
 		
</body>
</html>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>SuperLandia</title>
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
    if (isset($_POST['referencia']) 
        && isset($_POST['producto'])
        && isset($_POST['unidad'])
        && isset($_POST['valor'])
        
        )
    {
        $referencia = $_POST['referencia'];
        $producto = $_POST['producto'];
        $unidad = $_POST['unidad'];
        $valor = $_POST['valor'];
        


        $insertar = mysqli_query($conexion, "INSERT INTO frutasV(referencia,producto,unidad,valor) 
            VALUES('$referencia','$producto','$unidad','$valor')");
        $consulta = mysqli_affected_rows($conexion);
        if ($consulta == 1) 
                //15 Si es verdad, entonces letrero de tipo success
        {
 ?>
            <div class="alert alert-success"> <!--16 crear una alerta></!-->
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>¡Alerta!</strong> El producto fue registrado exitosamente
            </div>
            <?php 
        }
                //16En caso contrario generar una alerta de falla
        else
        {
            ?>
            <div class="alert alert-danger"> <!--17 crear una alerta></!-->
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>¡Alerta!</strong> El producto no fue creado, intente nuevamente.
            </div>
            <?php
        }
    }

 ?>
    <div class="container">
    <h2 class="text-center">Registro nuevo producto</h2>
    <div class="row"><!--Paso 5 meter formulario dentro de una fila></!-->
        <div class="col-md-2"></div><!--Paso 7 para que quede centrado></!-->
        <!--Creacion de formulario para crear nuevo usuario></!-->
        <form action="crear_productos.php" class="col-md-8" method="POST"><!--Paso 6 tamaño de los campos></!-->
            <div class="form-group">
                <input type="text" name="referencia" class="form-control" placeholder="Referencia" required="">             
            </div>
            <div class="form-group">

                <input type="text" name="producto" class="form-control" placeholder="Producto" required="">             
            </div>
            <div class="form-group">

                <input type="text" name="unidad" class="form-control" placeholder="unidad" required="">          
            </div>
            
            <div class="form-group"> <!--Paso 1></!-->
                
                <input type="text" name="valor" class="form-control" placeholder="Valor" required="">             
            </div>
            
            <div class="text-center"><!--Paso 3></!-->
               <button type="submit" class="btn btn-success"><i class="fa fa-plus-circle fa-2x" aria-hidden="true">
Crear Producto</i></button>
               

        </form>
    </div>
 </div>

            <script type="text/javascript" src="js/jquery.min.js"></script>
 			<script type="text/javascript" src="js/bootstrap.min.js"></script>
 			<script type="text/javascript" src="js/superV.js"></script>
 		
</body>
</html> 


 

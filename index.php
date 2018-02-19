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


 			<marquee behavior="" direction=""><h1>MERCALANDIA</h1></marquee>
 			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 				
 				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
 					<span class="navbar-toggler-icon"></span>
 				</button>

 				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
 					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
 						<li class="nav-item active">
 							<a class="nav-link" href="index.php"><i class="fa fa-home fa-2x" aria-hidden="true"></i><span class="sr-only">(current)</span></a>
 						</li>
 						<li class="nav-item">
 							<a class="nav-link" href="listar_frutas.php">Frutas y Verduras</a>
 						</li>
 						<li class="nav-item">
 							<a class="nav-link" href="listar_cereales.php">Cereales</a>
 						</li>
 						<li class="nav-item">
 							<a class="nav-link" href="gestionar_libro.php">Carnes y Pescados</a>
 						</li>
 						<li class="nav-item">
 							<a class="nav-link" href="gestionar_socio.php">L&aacute;cteos</a>
 						</li>
 						<li class="nav-item">
 							<a class="nav-link" href="index.php">Granos</a>
 						</li>
 					</ul>
 					<form class="form-inline my-2 my-lg-0">
 						<div class="input-group margin-bottom-sm">
 							<span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
 							<input class="form-control" type="text" placeholder="Buscar">
 						</div> <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
 					</form>
 				</div>
 			</nav>



 			<div class="col-lg-12">
 				<div class="row">
 					<div class="col-lg-8">
 						<div class="container cont">
 							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
 								<div class="carousel-inner " role="listbox">
 									<div class="carousel-item active">
 										<img class="d-block img-fluid " src="img/frutas.jpg"  height="1000" width="900">
 										<div class="carousel-caption d-md d-md-block">
 											<a href=""></a>

 										</div>
 									</div>
 									<div class="carousel-item">
 										<img class="d-block img-fluid" src="img/super1.jpg" height="1000" width="900">
 										<div class="carousel-caption d-md d-md-block">
 											<a href=""></a>

 										</div>
 									</div>
 									<div class="carousel-item">
 										<img class="d-block img-fluid" src="img/super2.jpg" height="1000" width="900">
 										<div class="carousel-caption d-md d-md-block">
 											<a href=""></a>
 										</div>
 									</div>


 								</div>
 								<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
 									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
 									<span class="sr-only">Previous</span>
 								</a>
 								<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
 									<span class="carousel-control-next-icon" aria-hidden="true"></span>
 									<span class="sr-only">Next</span>
 								</a>
 							</div>
 						</div>

 					</div>
 					

 					<div class="col-lg-4 form-inline">


 						<form  method="post" action="">
 							<div class="container contenedor">			
 								<div class="jumbotron jumbo">

 									<div class="imagen">
 										<img src="img/USUARIO.png" height="130" width="130">

 									</div>
 									<br/>
 									<div  class="input-group margin-bottom-sm">
 										<select name="seleccion" id="seleccion" class="form-control">
 											<option value="">Tipo de Usuario</option>
 											<option value="1">Administrador</option>
 											<option value="2">Cliente</option>
 										</select>

 									</div>
 									<br/>
 									<div  class="input-group margin-bottom-sm">
 										<input class="form-control" type="text" name="usuario" id="usuario" placeholder="Usuario" required="">

 									</div>
 									<br/>
 									<div class="input-group margin-bottom-sm">
 										<input class="form-control"  type="password" name="contrasena" id="contrasena" placeholder="Contraseña" required="">
 									</div>
 									<br/>
 									<div>
 										<button   type="button" class="btn btn-success">Ingresar</button>
 									</div>

 									<br/>
 									
 									<div>
 										<button type="button" class="btn btn-success">Olvide mi contraseña</button>
 										<button type="button" class="btn btn-success">Resgistro</button>
 									</div>
 								</div>
 							</div>
 						</form>
 					</div>
 				</div>
 			</div>


 			<!--<script type="text/javascript" src="js/jquery.min.js"></script>
 			<script type="text/javascript" src="js/bootstrap.min.js"></script>
 			<script type="text/javascript" src="js/superV.js"></script>-->
 			<script src="js/jquery.min.js"></script>
 			 <script src="js/bootstrap.min.js"></script>
 		</body>
 		</html>



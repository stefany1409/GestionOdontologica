<!Doctype html>
<html lang="es">
<head>
	<title>NeivaSalud</title>

<link rel="shortcut icon" href="Vista/imagenes/logo.png">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<style>
	
	body {
margin-left: 2%;
margin-right: 2%;

}
	

	</style>	
	
	
	</head>
<body>
<div class="jumbotron jumbotron-fluid bg-light">
  <div class="container">
	 <div>
		 <img src="Vista/imagenes/logo.png" style="width: 10%; position: absolute ">
	  </div>
	  <center>
    <h1 class="display-4 text-danger">NeivaSalud</h1>
    <p class="lead">Centro de Salud Privado - NeivaSalud</p>
		  </center>
  </div>
</div>
	<br>
	<br>
	
<div class="nav flex-column nav-pills" style="position: absolute" id="v-pills-tab" role="tablist" aria-orientation="vertical">
 <ul class="nav flex-column">
	
	 <li class="<?php echo $pagina == 'inicio' ? 'active' : '';?>"><a class="btn btn-danger" style="width: 150%"    href="?p=inicio">Inicio</a></li><br>
	 <li class="<?php echo $pagina == 'asignar' ? 'active' : '';?>"><a class="btn btn-danger"  style="width: 150%" href="?p=asignar">Asignar</a></li><br>
	 <li class="<?php echo $pagina == 'consultar' ? 'active' : '';?>"><a class="btn btn-danger"  style="width: 150%" href="?p=consultar">Consultar</a></li><br>
	 <li class="<?php echo $pagina == 'cancelar' ? 'active' : '';?>"><a class="btn btn-danger"  style="width: 150%" href="?p=cancelar">Cancelar</a></li><br>
	 <li class="<?php echo $pagina == 'registro' ? 'active' : '';?>"><a class="btn btn-danger"  style="width: 150%" href="?p=registro">Registro</a></li>
	</ul>
</div>
	<center>
	<div id="contenido">
		
	</div>
		</center>
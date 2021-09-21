<!Doctype html>
<html lang="es">
<head>
	<title>Suscribete</title>
	
<link rel="shortcut icon" href="Vista/imagenes/logo.png">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
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
<br><br>
	<?php
include('conexion.php');

if(isset($_POST['ingresar'])){
	$usuario = mysqli_real_escape_string($conectar, $_POST['usuario']);
	$contrasena1 = mysqli_real_escape_string($conectar, $_POST['password']);
	
	if($usuario != "" && $contrasena1 != ""){
		
		$sql_query = "select count(*) as cntUser from usuarios where Usuario ='".$usuario."' and Contraseña='".$contrasena1."'";
	$resul = mysqli_query($conectar, $sql_query);
	$row = mysqli_fetch_array($resul);
	
	$count = $row['cntUser'];
		
	if($count > 0){
		$_SESSION['usuario'] = $usuario;
		header('location: index.php');
	}else{
		echo "<script> alert('Usuario o Contraseña Incorrectos');
	location.href = '../GestionOdontologica/inicio.php';</script>";
	}
	
	}
}

?>
<!Doctype html>
<html>
	<head>

		<meta charset="utf-8">
		<title>Ingreso Sistema</title>
		</title>
		
		<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
		

	</head>
	<body>
		<center>
		<h1>Sistema de Ingreso</h1>
		<br>
 <div class="card-header" style="width: 20rem;">
	!! Señor Usuario para ingresar la sistema debe logearse
	
	<form action="" method="post" class="form"> 
		<br>
		<label><b>Usuario</b></label>
	
		<input required type="text" class="form-control" placeholder="Usuario" name="usuario"  style="width: 85%">
		
		<br>
	
		<label><b>Contraseña</b></label>
		<input required type="password" class="form-control" placeholder="Contraseña" name="password" style="width: 85%">
	
		<br>
	
		<div class="col-4">
		<button type="submit" class="btn btn-dark btn-block" name="ingresar">Ingresar</button> 	
		</div>
		</form>
			</center>
			 </div>
<br>
		<br>
		<!-- Footer -->
<footer class="text-center text-lg-start  text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center text-white p-4 bg-danger" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">www.neivasalud.com.co</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
	</body>
</html>
	
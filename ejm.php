<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
	<center>
	<form action="" method="post">
	<label>Documento</label>
<input type="number" name="documento" class="form-control" style="width: 25%"><br>
		<input type="submit" value="Consultar" class="btn btn-dark" name="btn_consulta"><br><br>
		
<input type="text" name="registro" readonly="readonly" class="form-control" style="width: 25%"><br>

		 <?php
	
	
	
	 if(isset($_POST['btn_consulta']))
	 {
	include("conexion.php");
		 
		  $resultado = mysqli_query($conectar, "SELECT * FROM citas");
		 
	       while($consulta = mysqli_fetch_array($resultado))
		   {
			   
			 echo $consulta['PacNombres'];
		   }
	 }
	
	?>
	
	</center>
	</form>
	
	
</body>
</html>
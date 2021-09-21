<?php
include_once 'conexiones/conexion1.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta1 = "SELECT MedIdentificacion, MedNombres, MedApellidos  FROM medicos";
$resultadom = $conexion->prepare($consulta1);
$resultadom->execute();
$medicos=$resultadom->fetchAll(PDO::FETCH_ASSOC);

$consulta2 = "SELECT ConNumero, ConNombre  FROM consultorios";
$resultadoc = $conexion->prepare($consulta2);
$resultadoc->execute();
$consultorios=$resultadoc->fetchAll(PDO::FETCH_ASSOC);
?>


<center>
<div id="contenido">
<p>Contenido de la página</p>

<form  action="index.php?p=asignar" method="post">
<table>
<tr>
<td>Documento del paciente</td>
<td><input type="text" name="documento" class="form-control"></
td>
<td colspan="2"><input type="submit" value="Consultar" class="btn btn-dark"
name="btn_consulta">
	
	 <?php
	
	include("conexiones/conexion2.php");
	
	 if(isset($_POST['btn_consulta']))
	 {
		 $documento = $_POST['documento'];
		 $existe=0;
		 
	if($documento=="")
	{
	 	 echo "<script> alert('El campo de documento es obligatorio para realizar alguna consulta');
	location.href = '../GestionOdontologica/index.php?p=asignar';</script>";
	}
	 
	 else{
		 $resultado = mysqli_query($conectar, "SELECT * FROM citas WHERE PacIdentificacion = '$documento'");
		 
		 while($consulta = mysqli_fetch_array($resultado))
		 
		 {
			 echo "
			 
			 $nom = $consulta[PacNombres];
             $apell = $consulta[PacApellidos];";
			 
			 $existe++;
		 }
		 if($existe==0){
			 
			  echo "<script> alert('El numero de documento digitado no existe en la base datos');
	location.href = '../GestionOdontologica/index.php?p=asignar';</script>";
	}
			 
		 }
			 
	 }
	
	
	?>
	
	
	</td>
	</tr>
	<tr>
<td>Datos de Usuario</td>
	<td><br><input type="text" name="datosuser" class="form-control" readonly="readonly" value="Stefany
"paciente"></div></td>
</tr>
<tr>
<td>Médico</td>
<td><br>
<select id="medico" name="medico" class="form-control" >
<option value="-1" selected="selected">---Selecione el
Médico---</option>
<?php
    foreach($medicos as $medico){
                    ?>
	<option><?php echo $medico['MedNombres'], "  ", $medico['MedApellidos']?></option>	
	 <?php
                        }
                    ?>

</select>
	<br>
</td>
</tr>
<tr>
<td>Fecha</td>
<td>
<input type="date" id="fecha" name="fecha" class="form-control" >
	<br>
</td>
</tr>
<tr>
<td>Hora</td>
<td>
<input type="time" id="hora" name="hora" class="form-control">

	<br>
</td>
</tr>
<tr>
<td>Consultorio</td>
<td>
<select id="consultorio" name="consultorio" class="form-control">
<option value="-1" selected="selected">---Seleccione el
Consultorio---</option>

<?php
    foreach($consultorios as $consultorio){
                    ?>
	<option><?php echo $consultorio['ConNumero'], "  ", $consultorio['ConNombre']?></option>	
	 <?php
                        }
                    ?>
</select>
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" class="btn btn-dark" name="asignarEnviar" value="Enviar" id="asignarEnviar">
</td>
</tr>
</table>
	<?php
	include("conexiones/conexion2.php");
	 
	 if(isset($_POST['asignarEnviar']))
	 {
	
	 $documento = $_POST['documento'];
	 $usuario = $_POST['datouser'];
	 $medico = $_POST['medico'];
	 $fecha = $_POST['fecha'];
	 $hora = $_POST['hora'];
	 $consultorio = $_POST['consultorio'];
	
		 
		 if($documento=="" || $usuario=="" || $medico=="" || $fecha=="" || $hora=="" || $consultorio=="")
		 
		 
	{ echo "<script> alert('Todos los campos son obligatorios');
	location.href = '../GestionOdontologica/index.php?p=asignar';</script>";
	}
		 
		 else {
			$query = mysqli_query($conectar, "INSERT INTO citas (Pcidentificacion, Usuario, Medico, Fecha_cita, Hora_cita, Consultorio)
			 value	('$documento', '$usuario', '$medico', '$fecha', '$hora', '$consultorio')");	 
			 
		 }
		  if($query){
			  
			 echo "<script> alert('Usuario Registrado en la base de datos');
	location.href = '../GestionOdontologica/index.php?p=asignar';</script>";
	}  
			  else{
				  
				 
			  }
		  }
		 
	?>
	</form>
	</div>
	</center>
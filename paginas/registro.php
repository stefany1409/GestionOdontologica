

<center>
<div id="contenido">
<p>Registrese</p>
<form  action="index.php?p=registro" style="width: 20%"  method="post">

    <label class="form-label">Identificacion</label>
    <input type="number" class="form-control" name="identificacion">

    <label class="form-label">Nombres</label>
    <input type="text" class="form-control" name="nombre">

    <label class="form-label">Apellidos</label>
    <input type="text" class="form-control" name="apellido">

    <label class="form-label">Fecha Nacimiento</label>
    <input type="date" class="form-control" name="fecha">

    <label class="form-label">Sexo</label>
    <select name="sexo" class="form-control">
        <option>-----seleccione------</option>
           <option>MASCULINO<option>
           <option>FEMENINO<option>
            

</select>
<br>

  <button type="submit" class="btn btn-primary" name="guardar">Submit</button>
  <?php
include("conexiones/conexion2.php");
	 
if(isset($_POST['guardar']))
{

$identificacion = $_POST['identificacion'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha = $_POST['fecha'];
$sexo = $_POST['sexo'];


    
    if($identificacion=="" || $nombre=="" || $apellido=="" || $fecha=="" || $sexo=="")
    
    
{ echo "<script> alert('Todos los campos son obligatorios');
location.href = '../GestionOdontologica/index.php?p=registro;</script>";
}
    
    else {
       $query = mysqli_query($conectar, "INSERT INTO pacientes (PacIdentificacion, PacNombres, PacApellidos, PacFechaNacimiento, PacSexo) 
        value ('$identificacion', '$nombre', '$apellido', '$fecha', '$sexo')");	 
        
    }
     if($query){
         
        echo "<script> alert('Usuario Registrado en la base de datos');
location.href = '../GestionOdontologica/index.php?p=registro';</script>";
}  
         else{
             
            echo "<script> alert('Usuario no Registrado en la base de datos');
            location.href = '../GestionOdontologica/index.php?p=registro';</script>";
         }
     }
    
?>






</form>


    </div>



</center>
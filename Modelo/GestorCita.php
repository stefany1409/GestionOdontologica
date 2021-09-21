<?php
class GestorCita {
public function agregarCita(Cita $cita){
$conexion = new Conexion();
$conexion->abrir();
$fecha = $cita->obtenerFecha();
$hora = $cita->obtenerHora();
$paciente = $cita->obtenerPaciente();
$medico = $cita->obtenerMedico();
$consultorio = $cita->obtenerConsultorio();
$estado = $cita->obtenerEstado();
$observaciones = $cita->obtenerObservaciones();
$sql = "INSERT INTO Citas VALUES ( null,'$fecha','$hora',
'$paciente','$medico','$consultorio','$estado','$observaciones')";
$conexion->consulta($sql);
$citaId = $conexion->obtenerCitaId();
$conexion->cerrar();
return $citaId ;
}
}
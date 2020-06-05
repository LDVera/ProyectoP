<?php 
include '../Area_admins_CRUDUnidad.php';
$conexion = new mysqli('localhost', 'root', '', 'proyecto_dev') or die (mysqli_error($conexion));


if(isset($_POST['UnidadbtnGuardar'])){

    
    $asignatura_id = $_GET['option'];
    $Unidad=$_POST['unidad_Nombre'];
    
	
	

	$sentencia_sql="insert into unidad (asignatura_id, unidad_Nombre) 
	values ('$asignatura_id','$unidad')";

	$conexion -> query($sentencia_sql) or die ($conexion->error);

	header("Location: ../Area_admins_CRUDunidad.php");
}


?>
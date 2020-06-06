<?php 

$conexion = new mysqli('localhost', 'root', '', 'proyecto_dev') or die (mysqli_error($conexion));


if(isset($_POST['UnidadbtnGuardar'])){

    
	
	$asignatura_id2= $_POST['option'];
    $Unidad=$_POST['unidad'];
    

	$sentencia_sql="INSERT into unidad (asignatura_id, unidad_Nombre) values ('$asignatura_id2','$Unidad')";
	$conexion -> query($sentencia_sql) or die ($conexion->error);
	

	header("Location: ../Area_admins_CRUDunidad.php");
}


?>
<?php 

$conexion = new mysqli('localhost', 'root', '', 'proyecto_dev') or die (mysqli_error($conexion));


if(isset($_POST['AsignaturabtnGuardar'])){



	$Asignatura=$_POST['Asignatura'];
	$CodigoAsignatura=$_POST['AsignaturaCodigo'];
	

	$sentencia_sql="insert into asignatura (asignatura_Nombre, asignatura_Codigo) 
	values ('$Asignatura','$CodigoAsignatura')" ;

	$conexion -> query($sentencia_sql) or die ($conexion->error);

	header("Location: ../Administradores.php");
}


?>
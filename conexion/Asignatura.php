<?php 

$conexion = new mysqli('localhost', 'root', '', 'proyecto_dev') or die (mysqli_error($conexion));


if(isset($_POST['AsignaturabtnGuardar'])){



	$Asignatura=$_POST['Asignatura'];
	$CodigoAsignatura=$_POST['AsignaturaCodigo'];
	

	$sentencia_sql="insert into asignatura (asignatura_Nombre, asignatura_Codigo) 
	values ('$Asignatura','$CodigoAsignatura')" ;

	$conexion -> query($sentencia_sql) or die ($conexion->error);
}

if(isset($_POST['AsginaturabtnConsultar'])){

    $AsignaturaConsulta=$_POST['Asignatura'];
	$CodigoAsignaturaConsulta=$_POST['AsignaturaCodigo'];

    $query = mysqli_query($conn,"SELECT * FROM asignatura WHERE asignatura_Codigo = '".$CodigoAsignaturaConsulta."');
    $nr = mysqli_num_rows($query);

    $n = mysqli_fetch_array($query);
	$ID_T = $n['asignatura_id'];
    
    
}

if(isset($_POST['AsginaturabtnConsultar'])){


?>
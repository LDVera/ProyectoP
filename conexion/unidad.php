<?php
	require ('conex.php');
	
	$asignatura_id = $_POST['asignatura_id'];
	
	$queryM = "SELECT unidad_Id, unidad_Nombre FROM unidad WHERE asignatura_Id = '$asignatura_id'";
    $resultadoM = $mysqli->query($queryM);
    $resultado2= mysqli_query($conexion, $queryM);
	
	$html= "<option value='0'>Seleccionar Municipio</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['unidad_Id']."'>".$rowM['unidad_Nombre']."</option>";
	}
	
	echo $html;
?>
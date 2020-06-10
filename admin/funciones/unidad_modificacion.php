<?php 

$conexion = new mysqli('localhost', 'root', '', 'proyecto_dev') or die (mysqli_error($conexion));


if(isset($_POST['btnActualizar_Unidad'])){


    $unidad_Id = $_POST['unidad_Id'];
	$unidad_Nombre=$_POST['unidad_Nombre'];
	

    $sentencia_sql1 = "UPDATE unidad SET unidad_Nombre = '$unidad_Nombre' WHERE unidad_Id = $unidad_Id";
    $result1 = mysqli_query($conexion, $sentencia_sql1);
    
    if($result1){
        echo '<script type="text/javascript"> alert("Actualizado") </script>';
    }else{
        echo '<script type="text/javascript"> alert("No actualizado") </script>';
    }
    
    header("Location: ../Area_admins_CRUDUnidad.php");    
}

?>
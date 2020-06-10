<?php 

$conexion = new mysqli('localhost', 'root', '', 'proyecto_dev') or die (mysqli_error($conexion));


if(isset($_POST['BTN112'])){


    $asignatura_Id = $_POST['id_asignatura'];
	$asignatura_Nombre =$_POST['Asignatura'];
	$asignatura_Codigo=$_POST['AsignaturaCodigo'];
	



    $sentencia_sql1 = "UPDATE asignatura SET asignatura_Nombre = '$asignatura_Nombre', asignatura_Codigo = '$asignatura_Codigo' WHERE asignatura_Id = $asignatura_Id";
    $result1 = mysqli_query($conexion, $sentencia_sql1);
    
    if($result1){
        echo '<script type="text/javascript"> alert("Actualizado") </script>';
    }else{
        echo '<script type="text/javascript"> alert("No actualizado") </script>';
    }
    
    header("Location: ../Area_admins_CRUDAsignatura.php");    
}

?>
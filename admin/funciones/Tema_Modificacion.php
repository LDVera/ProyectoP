<?php 

$conexion = new mysqli('localhost', 'root', '', 'proyecto_dev') or die (mysqli_error($conexion));


if(isset($_POST['btnActualizar_Tema'])){


    $tema_Id = $_POST['tema_Id'];
	$tema_Nombre =$_POST['tema_Nombre'];
	
    $sentencia_sql1 = "UPDATE tema SET tema_Nombre = '$tema_Nombre' WHERE tema_Id = $tema_Id";
    $result1 = mysqli_query($conexion, $sentencia_sql1);
    
    if($result1){
        echo '<script type="text/javascript"> alert("Actualizado") </script>';
    }else{
        echo '<script type="text/javascript"> alert("No actualizado") </script>';
    }
    
    
}
header("Location: ../Area_admins_CRUDTema.php");    

?>
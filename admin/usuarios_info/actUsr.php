<?php 

$conexion = new mysqli('localhost', 'root', '', 'proyecto_dev') or die (mysqli_error($conexion));


if(isset($_POST['BTN11'])){


    $id_user = $_POST['id_usuario'];
	$USUARIO=$_POST['Usuario'];
	$APELLIDO_PATERNO=$_POST['UsuarioApePaterno'];
	$APELLIDO_MATERNO=$_POST['UsuarioApeMaterno'];
	$CORREO=$_POST['correo'];
	$CONTRASE=$_POST['contraseña'];
    $UTIPO = $_POST['tipouser'];
    



    $sentencia_sql1 = "UPDATE usuario SET usuario_Nombre = '$USUARIO', usuario_ApellidoPaterno = '$APELLIDO_PATERNO', usuario_ApellidoMaterno = '$APELLIDO_MATERNO', usuario_Tipo = '$UTIPO', usuario_Correo = '$CORREO', usuario_Contraseña = '$CONTRASE' WHERE usuario_Id = $id_user";
    $result1 = mysqli_query($conexion, $sentencia_sql1);
    
    if($result1){
        echo '<script type="text/javascript"> alert("Actualizado") </script>';
    }else{
        echo '<script type="text/javascript"> alert("No actualizado") </script>';
    }
    
    header("Location: Area_admins_Usuarios.php");    
}

?>
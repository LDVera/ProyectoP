<?php 

$conexion = new mysqli('localhost', 'root', '', 'proyecto_dev') or die (mysqli_error($conexion));


	if(isset($_POST['btnGuardar'])){



		$USUARIO=$_POST['Usuario'];
		$APELLIDO_PATERNO=$_POST['UsuarioApePaterno'];
		$APELLIDO_MATERNO=$_POST['UsuarioApeMaterno'];
		$CORREO=$_POST['correo'];
		$CONTRASE=$_POST['contraseña'];
		$UTIPO = 1;



		$sentencia_sql="insert into usuario (usuario_Nombre, usuario_ApellidoPaterno, usuario_ApellidoMaterno, usuario_Tipo, usuario_Correo, usuario_Contraseña) 
		values ('$USUARIO','$APELLIDO_PATERNO','$APELLIDO_MATERNO','$UTIPO','$CORREO','$CONTRASE')" ;
		$conexion -> query($sentencia_sql) or die ($conexion->error);
	}

 ?>
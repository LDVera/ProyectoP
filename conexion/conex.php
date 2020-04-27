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


if(isset($_POST['btnLogin'])){

	$correo = $_POST['correoLogin'];
	$pass =  $_POST['contraseñaLogin'];

	$sql2 = "SELECT * FROM usuario WHERE usuarioCorreo = '$correo' and usuarioContraseña = '$pass'";
	
	$result = mysqli_num_rows($sql2);

	if($result == 1)
	{
		//header("Location: pagina.html")
		echo "Bienvenido:" .$correo;
	}
	else if ($result == 0) 
	{
		header("Location: login.html");
		//echo "No ingreso"; 
	}

}
 ?>
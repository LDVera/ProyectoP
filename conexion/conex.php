<?php 

$conexion = new mysqli('localhost', 'root', '', 'proyecto_dev') or die (mysqli_error($conexion));


	if(isset($_POST['btnGuardar'])){

		$correo=$_POST['correo'];
		$contra=$_POST['Contraseña'];



		$sentencia_sql="insert into Datos_logeo (usuario_Nombre, usuario_Apellido_Paterno, usuario_Apellido_Materno, usuario_Tipo, usuario_Correo, usuario_Contraseña) values ('$nombre',"Prueba","Prueba","Prueba","Prueba",'$contra')" ;
		$conexion -> query($sentencia_sql) or die ($conexion->error);
	}

 ?>
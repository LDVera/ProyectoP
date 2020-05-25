<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "proyecto_dev";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["correoLogin"];
$pass = $_POST["contraseñaLogin"];

$query = mysqli_query($conn,"SELECT * FROM usuario WHERE usuario_Nombre = '".$nombre."' and usuario_Contraseña = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	$n = mysqli_fetch_array($query);
	$ID_T = $n['usuario_Tipo'];
	if($ID_T == 0){
		header("Location: ../Administradores.php");
	}else if($ID_T == 1){
		echo "biendenido Usuario!!, disfruta tu experiencia!";
	}
}
else if ($nr == 0) 
{
	header("Location: ../Administradores.php");
	//echo "No ingreso"; 
}
	


?>
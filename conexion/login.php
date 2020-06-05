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
$administrador = 0;
$invitado = 1;

$query = mysqli_query($conn,"SELECT * FROM usuario WHERE usuario_Nombre = '".$nombre."' and usuario_Contraseña = '".$pass."'");
//$nr = mysqli_num_rows($query);
$n = mysqli_fetch_array($query);
$ID_T = $n['usuario_Tipo']; // 0  o  1

if($ID_T == 0) //si entra al login
{	
	echo "<h1> USUARIO NO REGISTRADO </h1>";
}
else if ($ID_T == 1) 
{
	header("Location: ../Usuarios.php");
}
else if($ID_T == 2){
	header("Location: ../admin/Area_admins.php");
}
	


?>
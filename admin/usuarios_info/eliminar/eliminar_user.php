<?php 

    include("../../../conexion/conex.php");
    if (isset($_GET["id"])){
        $id =  $_GET["id"];
        $query = "DELETE FROM usuario WHERE usuario_Id = $id";
        $result = mysqli_query($conexion, $query);
        if (!$result){
            die("falla");
        }

        header("Location: ../Area_admins_Usuarios.php");
    }

?>
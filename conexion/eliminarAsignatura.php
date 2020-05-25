<?php 

    include("conex.php");
    if (isset($_GET["id"])){
        $id =  $_GET["id"];
        $query = "DELETE FROM asignatura WHERE asignatura_Id = $id";
        $result = mysqli_query($conexion, $query);
        if (!$result){
            die("falla");
        }

        header("Location: ../Administradores.php");
    }

?>
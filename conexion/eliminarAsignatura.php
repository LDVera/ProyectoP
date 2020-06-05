<?php 

    include("conex.php");
    if (isset($_GET["id"])){
        $id =  $_GET["id"];
        echo $id;
        $query = "DELETE FROM asignatura WHERE asignatura_Id = '$id'";
        $result = mysqli_query($conexion, $query);
    

        header("Location: ../admin/Area_admins_CRUDAsignatura.php?$id");
    }else{
        die("falla");
    }

?>
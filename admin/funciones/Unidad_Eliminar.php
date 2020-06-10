<?php 

$conexion = new mysqli('localhost', 'root', '', 'proyecto_dev') or die (mysqli_error($conexion));    


    if (isset($_GET["id1"])){
        $id =  $_GET["id1"];
        echo $id;
        $query = "DELETE FROM unidad WHERE unidad_Id = '$id'";
        $result = mysqli_query($conexion, $query);
    

        header("Location: ../Area_admins_CRUDUnidad.php?$id");
    }else{
        die("falla");
    }

?>
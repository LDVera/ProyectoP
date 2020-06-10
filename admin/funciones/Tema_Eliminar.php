<?php 

$conexion = new mysqli('localhost', 'root', '', 'proyecto_dev') or die (mysqli_error($conexion));    


    if (isset($_GET["id2"])){
        $id =  $_GET["id2"];
        echo $id;
        $query = "DELETE FROM tema WHERE tema_Id = '$id'";
        $result = mysqli_query($conexion, $query);
    

        header("Location: ../Area_admins_CRUDTema.php?");
    }else{
        die("falla");
    }

?>
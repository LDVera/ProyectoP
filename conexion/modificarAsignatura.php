<?php 
    include("conex.php");


    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query =  "SELECT * FROM asignatura WHERE asignatura_Id = $id";
        $result = mysqli_query($conexion, $query);
        if(mysqli_num_rows($result) == 1){


            
        }

    }


?>
<?php 

include '../../conexion/conex.php';

          if(isset($_POST['enviarmodificacion'])){
            
            $variablecam = $_POST['elidtema'];
            $query = "SELECT * FROM tema WHERE tema_Id = $variablecam";
            $re = mysqli_query($conexion, $query);
            if($re){
              $row11 = mysqli_fetch_array($re);
              
              $tema_Id = $row11['tema_Id'];
              $tema_Nombre = $row11['tema_Nombre'];
            }
          }



          header("Location: Area_admins_CRUDTema_Modificacion.php"); 

?>
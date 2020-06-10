<?php


class Database1 extends PDO{
    public function __construct() {
        try{        //parent::__construct('mysql:host=localhost;dbname=dareyesm_db','dareyesm_root','root2015');
            parent::__construct('mysql:host=localhost;dbname=proyecto_dev','root','');
            parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            echo $ex . '&lt;br>';
            die('Error al conectar a la base de datos.');
        }       
    }   
}

class Database2 extends PDO{
    public function __construct() {
        try{        //parent::__construct('mysql:host=localhost;dbname=dareyesm_db','dareyesm_root','root2015');
            parent::__construct('mysql:host=localhost;dbname=proyecto_dev','root','');
            parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            echo $ex . '&lt;br>';
            die('Error al conectar a la base de datos.');
        }       
    }   
}
    //$conexion = new mysqli('localhost', 'root', '', 'proyecto_dev') or die (mysqli_error($conexion));

?>
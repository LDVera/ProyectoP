<?php  include("conexion/conex.php"); 



    $query2 = "SELECT asignatura_Id, asignatura_Nombre FROM asignatura ORDER BY asignatura_Nombre";
	$resultado2= mysqli_query($conexion, $query2);

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script language="javascript" src="js/jquery.js"></script>
    <script language="javascript">
        $(document).ready(function(){
				$("#cbx_asignatura").change(function () {
 		
					$("#cbx_asignatura option:selected").text(function () {
						asignatura_Id = $(this).val();
						$.post("conexion/unidad.php", { asignatura_id: asignatura_Id }, function(data){
							$("#cbx_unidad").html(data);
						});            
					});
				})
            });
            
            
    </script>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.css">
</head>

<body>


    <div class="administradoresC col-12 ml-0 mr-0 mt-0 mb-0 pl-0">
        <div class="row">
            <div class="lat col-3 mr-0 mt-0 mb-0">
                <div class="col-9 mx-auto ADlat ml-0 mr-0 pt-5">
                    <div class="row mx-auto text-center pt-5"><a href="unidadCrud.php">Agregar</a></div>
                    <div class="row mx-auto text-center pt-5"><a href="#">Modificar</a></div>
                    <div class="row mx-auto text-center pt-5"><a href="#">Eliminar</a></div>
                    <div class="row mx-auto text-center pt-5"><a href="#">Permisos</a></div>
                    <div class="row"></div>
                </div>
            </div>
            <div class=" mx-auto text-center col-8 mt-4">    
                <div class="ADbienvenida">
                BIENVENIDO ADMINISTRADOR!! BUENOS DIAS
           
                <p></p>
                <p></p>
                    <h2>AQUI PUEDES DAR DE ALTA LAS ASGINATURAS</h2>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="card card-body">
                            <form action="conexion/Asignatura.php" method="POST">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="Asignatura" placeholder="Nombre de la asignatura">
                                </div>
                                <div class="input-group mb-3 mt-3">
                                    <input type="text" class="form-control" name="AsignaturaCodigo" placeholder="Codigo de la asignatura">
                                </div>    

                                <button type="submit" id="mainlogin" name="AsignaturabtnGuardar" class="btn btn-primary">Registrar</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-8 mx-auto pt-0 bgl">
                        <table class="table-striped table-success table-bordered mr-0 pr-0" >
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>nombre</th>
                                    <th>codigo</th>
                                    <th>Acciones</th>
                                </tr>
                                <tbody>
                                    <?php 
                                    $query = "SELECT * FROM asignatura";
                                    $resulta_task = mysqli_query($conexion, $query);
                                    while($row = mysqli_fetch_array($resulta_task)){ ?>
                                        <tr>
                                            <td><?php echo $row['asignatura_Id'] ?></td>
                                            <td><?php echo $row['asignatura_Nombre'] ?></td>
                                            <td><?php echo $row['asignatura_Codigo'] ?></td>
                                            <td><a href="conexion/eliminarAsignatura.php?id=<?php echo $row['asignatura_Id']?>">eliminar</a></td>
                                        </tr>
                                        
                                    
                                    <?php } ?>
                                </tbody>                
                            </thead>
                        </table>
                    </div>

                </div>

                <div class="contenedor_asignatura_alta row mt-5">
                <form id="combo" name="combo" action="guarda.php" method="POST">
			        <div>Selecciona asignatura : <select name="cbx_asignatura" id="cbx_asignatura">
				        
				        <?php while($row = $resultado2->fetch_assoc()) { ?>
				    	    <option value="<?php echo $row['asignatura_Id']; ?>"><?php echo $row['asignatura_Nombre']; ?></option>
				        <?php } ?>
                        </select>
                    </div>
			
			        <br />
			
		    	    <div>Selecciona unidad : <select name="cbx_unidad" id="cbx_unidad">
                        
                    </select></div>
			
			        <br />
                        
		    	    <div>Selecciona Localidad : <select name="cbx_localidad" id="cbx_localidad"></select></div>
			
			            <br />
                    <input type="submit" id="enviar" name="enviar" value="Guardar" />
                
		        </form>

                </div>
            </div>
            
        </div>


    </div>

</body>

</html>
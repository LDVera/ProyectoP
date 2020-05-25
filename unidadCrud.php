<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>

    <script>
        $(function() {
            $("#header").load("header.html");
            $("#footer").load("footer.html");
        });
    </script>
    <title>Registro</title>
</head>

<body>
    <div id="particles-js"></div>
    <div id="header"></div>
    <div class="contenedorp mt-3">
        <div class="row p mx-auto pt-4 ml-4 mr-4 mb-4">
            <div class="col-4 pp">
                <div class="row">
                    <div class="col-12 titulor text-center">
                        informacion basica
                    </div>
                </div>
                <div class="row">
                    <div class="col-11 mx-auto mt-3 text-center">
                        <p class="text-justify">Dentro de esta pestaña te es posible dar de alta asignaturas es por ello que es de vital importancia que sea de tu conocimiento que sin haber dado de alta una asignatura no podras dar de alta toda la demas informacion que requieras</p>
                    </div>
                </div>
            </div>
            <div class="col-8 ppp">
                <div class="row">
                    <div class="col-12 titulor text-center">REGISTRO</div>
                    <p class="text-center col-12">Aqui puedes registrar tu asignatura</p>
                </div>
                <div class="row">
                    <div class="col-10 mx-auto mt-3">
                        <form action="conexion/Asignatura.php" method="POST">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="idAsignatura" placeholder="id de asignatura">
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" name="AsignaturaNombre" placeholder="Nombre de la asignatura">
                            </div>
                            <div class="input-group mb-3 mt-3">
                                <input type="text" class="form-control" name="AsignaturaCodigo" placeholder="Codigo de la asignatura">
                            </div>
                            <div class="input-group mb-3 mt-3">
                                <input type="text" class="form-control" name="asigcon" placerholder="Asignatura">                
                            </div>


                            <div class="boton-s mx-auto col-9 pl-5 ml-4 mt-5 mb-5">
                                <button type="submit" id="mainlogin" name="AsignaturabtnGuardar" class="btn btn-primary">Registrar</button>
                                <button ttp  id="mainlogin" name="AsginaturabtnConsultar" class="btn btn-primary">Consultar</button>
                                <button type="submit" id="mainlogin" name="AsginaturabtnEliminar" class="btn btn-primary">Eliminar</button>
                                <button type="submit" id="mainlogin" name="AsignaturabtnModificar" class="btn btn-primary">Modificar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="footer"></div>
    <script src="js/particles.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
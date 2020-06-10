<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $(function() {
            $("#header").load("header.html");
            $("#footer").load("footer.html");
        });
    </script>
</head>

<body>
    <div id="particles-js"></div>
    <div id="header"></div>
    <div class="main-inicio-sesion">

        <div class="formulario-inicio-sesion mx-auto">

            <div class="row mx-auto pt-2">
                <div class="col-11 bienvenida_s text-center">
                    BIENVENIDO AL SISTEMA

                </div>
            </div>
            <div class="row mx-auto pt-4">
                <img class="foto_s mx-auto " src="/img/foto.jpg" alt="">
            </div>
            <div class="row mx-auto mb-5">
                <form class="mx-auto" action="conexion/login.php" method="POST">

                    <div class="input-group mb-3 mt-3">
                        <!--
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                    -->
                        <input type="text" class="form-control" name="correoLogin" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">

                        <input type="password" name="contraseñaLogin" class="form-control" plasceholder="Contraseña" id="exampleInputPassword1">
                    </div>

                    <a href="registro.html">Requistrate aqasasaasui</a>

                    <div class="boton-s mx-auto col-6">
                        <button type="submit" id="mainlogin" name="btnLogin" class="btn btn-primary">Login</button>
                    </div>
                    


                </form>
                <a href="#">Registrate</a>
            </div>

        </div>
        <div id="footer"></div>
        <script src=" js/particles.min.js "></script>
        <script src="js/app.js "></script>
</body>

</html>
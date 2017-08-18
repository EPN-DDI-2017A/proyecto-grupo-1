<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="css/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container-fluid m-0 p-0">
    <div class="row">
        <div class="col p-0 align-items-center">
            <nav class="navbar navbar-expand-lg navbar-light px-5 align-self-center menu">
                <a class="navbar-brand w-25" href="index.php">
                    <img class="animated zoomIn img-fluid w-50" src="img/final.png" >
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" data-html="true" data-container="body" data-toggle="popover" data-placement="bottom">Iniciar Sesion</a>
                    </div>
                </div>
            </nav>
            <div class="row busquedaRegistro justify-content-center w-100">
                <div class="jumbotron jumbotron-fluid justify-content-center p-sm-0 p-md-0 pt-lg-5 pt-xl-5" style="background: transparent">
                    <div class="container">
                        <h2 class="display-4 mt-5 text-white text-center">Registrate</h2>
                        <div class="container form-registro w-100 mt-5 justify-content-center">
                            <form id="registro" class="justify-content-center">
                                <div class="form-group">
                                    <label class="form-control-label" for="usuarioRegis">Ingrese su Nombre de Usuario:</label>
                                    <input id="usuarioRegis" name="usuarioRegis" type="text" class="form-control" placeholder="Escribe tu usuario">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="passwordRegis">Ingrese su Contraseña:</label>
                                    <input id="passwordRegis" name="passwordRegis" type="password" class="form-control" placeholder="Escribe tu contraseña">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="passwordrepetirRegis">Repita su Contraseña:</label>
                                    <input id="passwordrepetirRegis" name="passwordrepetirRegis" type="password" class="form-control" placeholder="Repite tu contraseña">
                                </div>
                                <div class="text-center">
                                    <button id="botonRegistrar" disabled="disabled" type="submit" class="btn">Registrate</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <video autoplay loop class="w-100" style="top: 0px;">
                <source src="play/Walking-Heads/MP4/Walking-Heads.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
                <source src="play/Walking-Heads/WEBM/Walking-Heads.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
            </video>
        </div>
    </div>
    <div class="row justify-content-between px-5 footericonsRegistro py-3 text-white">
        <div class="col-4 align-self-center">
            <div class="row footertexto align-items-center">
                <div class="col-7 d-flex">
                    <h6 class="final">Huequitos.com</h6>
                    <i class="fa fa-copyright" aria-hidden="true"></i>
                    <h6 class="final pl-2" id="fecha"></h6>
                </div>
            </div>
        </div>
        <div class="col-5 text-right">
            <div class="row justify-content-end">
                <div class="col-5 align-self-center">
                    <h1 class="h6 final">Siguenos en:</h1>
                </div>
                <div class="col-5 align-self-center">
                    <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                    <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
                    <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                    <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="js/jquery-validation/dist/localization/messages_es.js"></script>
<script src="css/bootstrap-4.0.0-alpha.6-dist/js/popper.min.js"></script>
<script src="css/bootstrap-4.0.0-alpha.6-dist/js/tether.min.js"></script>
<script src="css/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
<script src="js/registro.js"></script>
</body>
</html>
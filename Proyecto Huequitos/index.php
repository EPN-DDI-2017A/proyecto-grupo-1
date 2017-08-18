<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Huequitos</title>
    <link rel="stylesheet" href="css/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body data-spy="scroll" data-target="#navbar-example" data-offset="10">
<div class="container-fluid m-0 p-0">
    <div id="#" class="row videoMenu">
        <div class="col p-0">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light fixed-top px-5" style="    background-color: rgba(255, 0, 0, 0.17);">
                    <a class="navbar-brand w-25" href="index.php">
                        <img class="animated zoomIn img-fluid w-50" src="img/final.png" >
                    </a>
                    <button class="navbar-toggler navbar-toggler-right p-3" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link" href="#ranking">Ranking</a>
                            <a class="nav-item nav-link" href="#servicios">Servicios</a>
                            <a class="nav-item nav-link" href="#footer">Contactos</a>
                            <a class="nav-item nav-link" tabindex="0" data-html="true" data-trigger="click" data-container="body" data-toggle="popover" data-placement="bottom" animation="true" href="#">Iniciar Sesion</a>
                        </div>
                    </div>
                </nav>
                <div id="buscadoroculto" class="col-12 w-100 fixed-top buscadorbarra">
                    <div class="row d-flex w-100 m-0 justify-content-center">
                        <div id="contornobusqueda" class="col-1 text-right">
                            <i id="huequiar" class="fa fa-search fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 p-0">
                            <form class="form-inline my-lg-0">
                                <input id="nuevaBusquedatext" class="form-control mr-sm-2 mr-5 w-100" type="text" placeholder="Busca tu Hueca">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row busqueda justify-content-center w-100 mt-5 pt-sm-5 pt-md-5 pt-xl-5 pt-lg-5">
                <div class="col-12">
                    <div class="jumbotron jumbotron-fluid text-center justify-content-center p-sm-0 p-md-0 pt-lg-5 pt-xl-5" style="background: transparent">
                        <div class="container">
                            <h2 class="display-4">Busca tu</h2>
                            <h1 class="display-2 text-center palabracolor">HUECA</h1>
                            <a href="#"><i class="fa fa-search fa-5x animated slideInDown mouseencima my-2"></i></a>
                            <p class="mt-5 mb-0 display-5 frase">No tienes cuenta registraste Ya!!!...</p>
                            <p class="p-0 display-5 frase">Entra a tu perfil y califica tu hueca favorita</p>
                            <p class="lead">
                                <a class="btn" href="RegistroUsuario.php" role="button" style="background: orange; border: none; color: white">Registrate</a>
                            </p>
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
    <div id="ranking" class="row justify-content-center px-5 pt-5">
        <div class="col pb-5 px-5">
            <div class="row pb-md-5 px-md-5 pb-lg-5 px-lg-5 pb-xl-5 px-xl-5">
                <div class="col pl-5 titulos text-sm-center text-md-left text-lg-left text-xl-left">
                    <h1 class="tittle">HueQuitos Ranking</h1>
                    <hr/>
                </div>
            </div>
            <div class="row text-center px-5">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 text-center p-4">
                    <div class="card card-outline-warning p-3">
                        <h4 class="card-title" id="t1">Poliburguer</h4>
                        <div class="mx-4 row align-items-center h-50">
                            <img class="card-img-top img-fluid" src="img/poliburguer.JPG" alt="Card image cap">
                        </div>
                        <div class="card-block">
                            <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div id="s1" class="text-left">
                                <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                                <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                                <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                                <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o fa-lg" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="text-right botonGO">
                        <a href="perfilHueca.php" class="btn btn-primary rounded-circle animated infinite pulse p-4 text-center" id="bt1">go</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 text-center p-4">
                    <div class="card card-outline-warning p-3">
                        <h4 class="card-title" id="t2">Dulsini</h4>
                        <div class="mx-4 h-50 row align-items-center py-5 py-sm-5 py-md-4 py-lg-4 py-xl-5">
                            <img class="card-img-top img-fluid" src="img/dulssini.png" alt="Card image cap">
                        </div>
                        <div class="card-block">
                            <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div id="s2" class="text-left">
                                <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                                <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                                <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                                <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                                <i class="fa fa-star-o fa-lg" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="text-right botonGO">
                        <a href="perfilHueca.php" class="btn btn-primary rounded-circle animated infinite pulse p-4 text-center" id="bt1">go</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 text-center p-4">
                    <div class="card card-outline-warning p-3">
                        <h4 class="card-title" id="t3">Los Tios</h4>
                        <div class="mx-4 row align-items-center h-50">
                            <img class="card-img-top img-fluid " src="img/lostios.jpg" alt="Card image cap">
                        </div>
                        <div class="card-block">
                            <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div id="s3" class="text-left">
                                <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                                <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                                <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o fa-lg" aria-hidden="true"></i>
                                <i class="fa fa-star-o fa-lg" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="text-right botonGO">
                        <a href="perfilHueca.php" class="btn btn-primary rounded-circle animated infinite pulse  p-4 text-center" id="bt1">go</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="servicios" class="row justify-content-center pt-4 pb-5">
        <div class="col columnaNegro pb-5 px-5">
            <div class="row py-3 pb-md-5 px-md-5 pb-lg-5 px-lg-5 pb-xl-5 px-xl-5" >
                <div class="col pl-5 titulos text-sm-center text-md-left text-lg-left text-xl-left">
                    <h1 class="tittle text-white">Servicios</h1>
                    <hr/>
                </div>
            </div>
            <div class="row justify-content-center px-5" >
                <div class="col-5 col-sm-5 col-md-3 col-lg-3 col-xl-3">
                    <div class="card">
                        <div class="text-center">
                            <img class="h-100 img-fluid" src="img/devices.png" >
                        </div>
                        <div class="card-block text-white">
                            <div class="text-center">
                                <span class="badge badge-default h4">COMODO</span>
                            </div>
                            <p class="card-text text-justify lead">Some quick example text to build on the card title and make up
                                the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-5 col-sm-5 col-md-3 col-lg-3 col-xl-3">
                    <div class="card">
                        <div class="text-center">
                            <img class="w-50 h-50 img-fluid p-3 imgCircular" src="img/place.png" >
                        </div>
                        <div class="card-block text-white">
                            <div class="text-center">
                                <span class="badge badge-default h4 ">RAPIDO</span>
                            </div>
                            <p class="card-text text-justify lead">Some quick example text to build on the card title and make up
                                the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-5 col-sm-5 col-md-3 col-lg-3 col-xl-3 align-self-center">
                    <div class="card">
                        <div class="text-center">
                            <img class="w-50 h-50 img-fluid p-3 imgCircular" src="img/users.png" >
                        </div>
                        <div class="card-block text-white">
                            <div class="text-center">
                                <span class="badge badge-default h4 ">SOCIAL</span>
                            </div>
                            <p class="card-text text-justify lead">Some quick example text to build on the card title and make up
                                the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--div class="row text-center my-3">
                <div class="col align-self-center">
                    <button href="RegistroUsuario.php" type="button" class="btn btn-secondary over">REGISTRATE</button>
                </div>
            </div-->
        </div>
    </div>
    <div id="footer" class="row justify-content-center pt-5 py-5">
        <div class="col-12 pb-4">
            <div class="row px-5 pb-sm-0 pb-md-5 pb-lg-5 pb-xl-5">
                <div class="col pb-5 px-5 titulos text-sm-center text-md-left text-lg-left text-xl-left">
                    <h1 class="tittle">Contactos / Sugerencias</h1>
                    <hr/>
                </div>
            </div>
            <div class="contactos row px-5">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 pt-4 text-justify">
                    <h1 class="h5">HueQuitos.com</h1>
                    <hr/>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu orci et eros aliquet elementum.
                        Praesent dictum dui vitae est tempus varius. Integer mattis velit et felis blandit bibendum.
                    </p>
                </div>
                <div class="offset-md-1 offset-lg-1 offset-xl-1 col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 pt-4">
                    <h1 class="h5 ">Dejanos tus sugerencias:</h1>
                    <hr/>
                    <form id="formComentarios">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Escribe tu correo" style="background: rgba(255, 127, 80, 0.28)">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="sugerencia" id="sugerencia" rows="4" placeholder="Escribe tu sugerencia" style="background: rgba(255, 127, 80, 0.28)"></textarea>
                        </div>
                        <button id="enviar" type="submit" class="btn btn-primary" style="background: orange; border: none">Enviar</button>
                    </form>
                </div>
                <div class="offset-md-1 offset-lg-1 offset-xl-1 col-12 col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 pt-4">
                    <h1 class="h5">Contacto</h1>
                    <hr/>
                    <div class="row">
                        <div class="col-3">
                            <i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="col-4 align-self-center">
                            <p class="lead">
                                <small>huequitos@email.com</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-between px-5 footericons py-3 text-white">
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
<!--<script src="css/bootstrap-4.0.0-alpha.6-dist/js/jquery-3.2.1.slim.min.js"></script>-->
<script src="js/jquery-validation/dist/jquery.validate.js"></script>
<script src="js/jquery-validation/dist/localization/messages_es.min.js"></script>
<script src="js/js.cookie.js"></script>
<script src="css/bootstrap-4.0.0-alpha.6-dist/js/popper.min.js"></script>
<script src="css/bootstrap-4.0.0-alpha.6-dist/js/tether.min.js"></script>
<script src="css/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mi Perfil</title>
    <link rel="stylesheet" href="css/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row menu">
            <div class="col py-4">
                <nav class="navbar navbar-expand-lg navbar-light px-5">
                    <a class="navbar-brand w-25" href="index.php">
                        <img class="animated zoomIn img-fluid w-50" src="img/final.png" >
                    </a>
                    <div class="row d-flex w-100 d-lg-flex d-sm-none justify-content-center">
                        <div class="col-2">
                            <i id="huequiar" class="fa fa-search fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="col-8 p-0">
                            <form class="form-inline my-lg-0">
                                <input id="nuevaBusquedatext" class="form-control mr-sm-2 mr-5 w-100" type="text" placeholder="Busca tu Hueca">
                            </form>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="row d-flex w-100 d-lg-none justify-content-center">
                        <div class="col-2">
                            <i id="huequiaroculto" class="fa fa-search fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="col-8 p-0">
                            <form class="form-inline my-lg-0">
                                <input id="nuevaBusquedatextoculto"  class="form-control mr-sm-2 mr-5 w-100" type="text" placeholder="Busca tu Hueca">
                            </form>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
                        <div id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-item nav-link active" href="#">Perfil <span class="sr-only">(current)</span></a>
                                <a class="nav-item nav-link" href="nuevaHueca.php">Crear Hueca</a>
                                <a id="cerrarSesion" class="nav-item nav-link" href="#">Cerrar Sesión</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-3 bg-perfil py-5" id="col1">
                <div class="card-perfil">
                    <div class="media px-3">
                        <div class="media-body align-self-center">
                            <h4 id="nombreUser" class="mt-0 tittle" style="text-transform: uppercase;"></h4>
                        </div>
                        <img class="d-flex mr-3 img3 w-25" src="img/user4.png" alt="Generic placeholder image">
                    </div>
                    <div class="card-block mt-5 pl-2 pb-1">
                        <div class="row ">
                            <div class="col titulos text-center">
                                <h1 class="tittle">Tus Huecas</h1>
                                <hr/>
                            </div>
                        </div>
                        <div id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Papitas de Valde
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="card-block">
                                        Comentarios ..
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            PoliBurguer
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-block">
                                        Comentarios ..
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Dulsini
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="card-block">
                                        Comentarios ..
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingFour">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#contentFour" aria-expanded="false" aria-controls="collapseFour">
                                            Los Tios
                                        </a>
                                    </h5>
                                </div>
                                <div id="contentFour" class="collapse" role="tabpanel" aria-labelledby="contentFour">
                                    <div class="card-block">
                                        Comentarios ..
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9 px-5 py-5">
                <div class="row justify-content-center pt-3">
                    <div class="col">
                        <div class="row">
                            <div class="col titulos">
                                <h1 class="tittle">Favoritas</h1>
                                <hr/>
                            </div>
                        </div>
                        <div class="row text-center px-3 pre-scrollable">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 text-center p-4">
                                <div class="text-right estrellaHueca">
                                    <i class="fa fa-star fa-lg fa-3x animated infinite pulse" aria-hidden="true"></i>
                                </div>
                                <div class="card card-outline-warning p-3">
                                    <h4 class="card-title" id="t1">Poliburguer</h4>
                                    <div class="mx-4 row align-items-center h-50">
                                        <img class="card-img-top img-fluid" src="img/poliburguer.JPG" alt="Card image cap">
                                    </div>
                                    <div class="card-block">
                                        <p class="card-text text-justify textos">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
                                    <a href="PerfilHueca.php" class="btn rounded-circle animated infinite pulse p-4 text-center" id="bt1">go</a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 text-center p-4">
                                <div class="text-right estrellaHueca">
                                    <i class="fa fa-star fa-lg fa-3x animated infinite pulse" aria-hidden="true"></i>
                                </div>
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
                                    <a href="PerfilHueca.php" class="btn btn-primary rounded-circle animated infinite pulse p-4 text-center" id="bt1">go</a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 text-center p-4">
                                <div class="text-right estrellaHueca">
                                    <i class="fa fa-star fa-lg fa-3x animated infinite pulse" aria-hidden="true"></i>
                                </div>
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
                                    <a href="PerfilHueca.php" class="btn btn-primary rounded-circle animated infinite pulse  p-4 text-center" id="bt1">go</a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 text-center p-4">
                                <div class="text-right estrellaHueca">
                                    <i class="fa fa-star fa-lg fa-3x animated infinite pulse" aria-hidden="true"></i>
                                </div>
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
                                    <a href="PerfilHueca.php" class="btn btn-primary rounded-circle animated infinite pulse p-4 text-center" id="bt1">go</a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 text-center p-4">
                                <div class="text-right estrellaHueca">
                                    <i class="fa fa-star fa-lg fa-3x animated infinite pulse" aria-hidden="true"></i>
                                </div>
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
                                    <a href="#" class="btn btn-primary rounded-circle animated infinite pulse p-4 text-center" id="bt1">go</a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 text-center p-4">
                                <div class="text-right estrellaHueca">
                                    <i class="fa fa-star fa-lg fa-3x animated infinite pulse" aria-hidden="true"></i>
                                </div>
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
                                    <a href="PerfilHueca.php" class="btn btn-primary rounded-circle animated infinite pulse  p-4 text-center" id="bt1">go</a>
                                </div>
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
<script src="css/bootstrap-4.0.0-alpha.6-dist/js/jquery-3.2.1.slim.min.js"></script>
<script src="js/js.cookie.js"></script>
<script src="css/bootstrap-4.0.0-alpha.6-dist/js/popper.min.js"></script>
<script src="css/bootstrap-4.0.0-alpha.6-dist/js/tether.min.js"></script>
<script src="css/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
<script src="js/perfil.js"></script>
</body>
</html>
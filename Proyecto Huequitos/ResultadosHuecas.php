<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Resultados Huequitos</title>
    <link rel="stylesheet" href="css/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="container-fluid">
    <div class="row menu">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light px-5">
                <a class="navbar-brand w-25" href="#">
                    <img class="animated zoomIn img-fluid w-50" src="img/final.png" >
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a id="home" class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                        <a id="iniciarsesionboton" class="nav-item nav-link" data-html="true" data-container="body" data-toggle="popover" data-placement="bottom">Iniciar Sesion</a>
                        <a id="perfil" class="nav-item nav-link active" href="PerfilUsuario.php">Perfil <span class="sr-only">(current)</span></a>
                        <a id="nuevahuevaboton" class="nav-item nav-link" href="nuevaHueca.php">Crear Hueca</a>
                        <a id="cerrarSesionboton" class="nav-item nav-link">Cerrar Sesión</a>
                    </div>
                </div>
            </nav>
            <div class="row justify-content-center">
                <div class="col-8 py-5">
                    <form>
                        <div class="form-group row">
                            <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg" style="color: white">Huequiando:</label>
                            <div class="col-sm-10">
                                <input id="nuevabusqueda" type="email" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Busca tus huecas favoritas..">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col px-5 py-5">
            <div class="row px-5">
                <div class="col titulos px-5">
                    <h1 class="tittle">Resultados</h1>
                    <hr/>
                </div>
            </div>
            <div class="row px-5 text-center">
                <div class="col-4 p-4">
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
                <div class="col-4 p-4">
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
                        <a href="PerfilHueca.php" class="btn btn-primary rounded-circle animated infinite pulse p-4 text-center" id="bt2">go</a>
                    </div>
                </div>
                <div class="col-4 p-4">
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
            <div class="row px-5 text-center">
                <div class="col-4 p-4">
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
                <div class="col-4 p-4">
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
                        <a href="PerfilHueca.php" class="btn btn-primary rounded-circle animated infinite pulse p-4 text-center" id="bt2">go</a>
                    </div>
                </div>
                <div class="col-4 p-4">
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
            <div class="row px-5 text-center">
                <div class="col-4 p-4">
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
                <div class="col-4 p-4">
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
                        <a href="PerfilHueca.php" class="btn btn-primary rounded-circle animated infinite pulse p-4 text-center" id="bt2">go</a>
                    </div>
                </div>
                <div class="col-4 p-4">
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
            <div class="row paginations">
                <div class="col">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item px-2">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item px-1"><a class="page-link" href="#">1</a></li>
                            <li class="page-item px-1"><a class="page-link" href="#">2</a></li>
                            <li class="page-item px-1"><a class="page-link" href="#">3</a></li>
                            <li class="page-item pr-1 pl-5"><a class="page-link" href="#">9</a></li>
                            <li class="page-item px-1"><a class="page-link" href="#">10</a></li>

                            <li class="page-item px-2">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center otrosLugares px-5">
        <div class="col px-4 py-5">
            <div class="row px-5">
                <div class="col titulos px-5">
                    <h1 class="tittle text-center">Te recomendamos otros huequitos..</h1>
                    <hr/>
                </div>
            </div>
            <div class="row px-5 py-4">
                <div class="col">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#ronda" role="tab">La Ronda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#mitadMundo" role="tab">Mitad del Mundo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#foch" role="tab">Foch</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#nnuu" role="tab">NNUU</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row px-5 py-5 otrosResultados">
                <div class="col px-5 ">
                    <div class="tab-content">
                        <div class="tab-pane active" id="ronda" role="tabpanel">
                            <div class="row d-flex">
                                <div class="col-6">
                                    <div style='height:400px;width:520px;'>
                                        <div id='gmap_canvas' style='height:400px;width:520px;'>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 px-5 py-5 text-justify">
                                    <h5 class="mt-0 mb-1">La Ronda</h5>
                                    <p>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </p>
                                    <div class="row text-right">
                                        <div class="col align-self-end mt-5">
                                            <a href="RegistroUsuario.php" class="btn btn-primary rounded-circle animated infinite pulse p-4 text-center" id="bt1">go</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="mitadMundo" role="tabpanel">
                            <div class="row d-flex">
                                <div class="col-6">
                                    <div style='height:400px;width:520px;'>
                                        <div id='gmap_canvas_mitad' style='height:400px;width:520px;'>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 px-5 py-5 text-justify">
                                    <h5 class="mt-0 mb-1">Mitad del mundo</h5>
                                    <p>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </p>
                                    <div class="row text-right">
                                        <div class="col align-self-end mt-5">
                                            <a href="RegistroUsuario.php" class="btn btn-primary rounded-circle animated infinite pulse p-4 text-center" id="bt1">go</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="foch" role="tabpanel">
                            <div class="row d-flex">
                                <div class="col-6">
                                    <div style='height:400px;width:520px;'>
                                        <div id='gmap_canvas_foch' style='height:400px;width:520px;'>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 px-5 py-5 text-justify">
                                    <h5 class="mt-0 mb-1">Foch</h5>
                                    <p>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </p>
                                    <div class="row text-right">
                                        <div class="col align-self-end mt-5">
                                            <a href="RegistroUsuario.php" class="btn btn-primary rounded-circle animated infinite pulse p-4 text-center" id="bt1">go</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="nnuu" role="tabpanel">
                            <div class="row d-flex">
                                <div class="col-6">
                                    <div style='height:400px;width:520px;'>
                                        <div id='gmap_canvas_nnuu' style='height:400px;width:520px;'>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 px-5 py-5 text-justify">
                                    <h5 class="mt-0 mb-1">Av. NNUU</h5>
                                    <p>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </p>
                                    <div class="row text-right">
                                        <div class="col align-self-end mt-5">
                                            <a href="RegistroUsuario.php" class="btn btn-primary rounded-circle animated infinite pulse p-4 text-center" id="bt1">go</a>
                                        </div>
                                    </div>
                                </div>
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

<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBBjmpouj6dqlBWYsueo00tSkHKu2zJFUY'></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery-validation/dist/jquery.validate.js"></script>
<script src="js/jquery-validation/dist/localization/messages_es.min.js"></script>
<script src="js/js.cookie.js"></script>
<script src="css/bootstrap-4.0.0-alpha.6-dist/js/popper.min.js"></script>
<script src="css/bootstrap-4.0.0-alpha.6-dist/js/tether.min.js"></script>
<script src="css/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
<script>
    function init_map(){
        var myOptions = {
            zoom:19,
            center:new google.maps.LatLng(-0.224166, -78.514220),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
            disableDoubleClickZoom: true,
            draggable: false
        };
        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
        marker = new google.maps.Marker(
            {
                map: map,
                position: new google.maps.LatLng(-0.224166, -78.514220)
            }
        );
        infowindow = new google.maps.InfoWindow(
            {
                content:'<strong>La Ronda</strong><br>La Ronda<br> Quito<br>'
            }
        );
        google.maps.event.addListener(marker, 'click', function(){
            infowindow.open(map,marker);
        });
        infowindow.open(map,marker);
        console.log("mapa iniciado")
    }
    google.maps.event.addDomListener(window, 'load', init_map);

    function init_map_mitad(){
        var myOptions = {
            zoom:19,
            center:new google.maps.LatLng(-0.0025749,-78.4551742),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
            disableDoubleClickZoom: true,
            draggable: false
        };
        map = new google.maps.Map(document.getElementById('gmap_canvas_mitad'), myOptions);
        marker = new google.maps.Marker(
            {
                map: map,
                position: new google.maps.LatLng(-0.0025749,-78.4551742)
            }
        );
        infowindow = new google.maps.InfoWindow(
            {
                content:'<strong>Mitad del Mundo</strong><br>Mitad del Mundo<br> Quito<br>'
            }
        );
        google.maps.event.addListener(marker, 'click', function(){
            infowindow.open(map,marker);
        });
        infowindow.open(map,marker);
        console.log("mapa iniciado")
    }
    google.maps.event.addDomListener(window, 'load', init_map_mitad);

    function init_map_foch(){
        var myOptions = {
            zoom:19,
            center:new google.maps.LatLng(-0.224166, -78.514220),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
            disableDoubleClickZoom: true,
            draggable: false
        };
        map = new google.maps.Map(document.getElementById('gmap_canvas_foch'), myOptions);
        marker = new google.maps.Marker(
            {
                map: map,
                position: new google.maps.LatLng(-0.224166, -78.514220)
            }
        );
        infowindow = new google.maps.InfoWindow(
            {
                content:'<strong>La Ronda</strong><br>La Ronda<br> Quito<br>'
            }
        );
        google.maps.event.addListener(marker, 'click', function(){
            infowindow.open(map,marker);
        });
        infowindow.open(map,marker);
        console.log("mapa iniciado")
    }
    google.maps.event.addDomListener(window, 'load', init_map_foch);

    function init_map_nnuu(){
        var myOptions = {
            zoom:19,
            center:new google.maps.LatLng(-0.224166, -78.514220),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
            disableDoubleClickZoom: true,
            draggable: false
        };
        map = new google.maps.Map(document.getElementById('gmap_canvas_nnuu'), myOptions);
        marker = new google.maps.Marker(
            {
                map: map,
                position: new google.maps.LatLng(-0.224166, -78.514220)
            }
        );
        infowindow = new google.maps.InfoWindow(
            {
                content:'<strong>La Ronda</strong><br>La Ronda<br> Quito<br>'
            }
        );
        google.maps.event.addListener(marker, 'click', function(){
            infowindow.open(map,marker);
        });
        infowindow.open(map,marker);
        console.log("mapa iniciado")
    }
    google.maps.event.addDomListener(window, 'load', init_map_nnuu);
</script>
<script src="js/nuevabusqueda.js"></script>
</body>
</html>
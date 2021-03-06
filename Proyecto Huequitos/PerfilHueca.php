﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Perfil Hueca</title>
    <link rel="stylesheet" href="css/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <!--link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet"-->

</head>
<body>
<div class="container-fluid">
    <div class="row menu">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light px-5">
                <a class="navbar-brand w-25" href="index.php">
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
                        <a id="cerrarSesionboton" class="nav-item nav-link" href="#">Cerrar Sesión</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-3 py-5 pefilHueca">
            <div class="row justify-content-center">
                <div class="col">
                    <figure class="figure text-center">
                        <img class="w-50 img-fluid rounded-circle perfiImagen" src="img/poliburguer.JPG" alt="Generic placeholder image">
                        <figcaption class="tittle my-3"><h3>PoliBurguer</h3></figcaption>
                    </figure>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row justify-content-center">
                        <div class="col mx-auto">
                            <h3 class="tittle text-left">Horarios:</h3>
                            <hr/>
                        </div>
                    </div>
                    <div class="row justify-content-start text-white">
                        <div class="col-lg-12 col-md-12 col-xl-12 col-sm-8 col-8">
                            <h5>Lunes - Viernes:</h5>
                            <h6 class="text-center"> 08h30 - 22h00</h6>
                        </div>
                    </div>
                    <div class="row justify-content-start text-white">
                        <div class="col-lg-12 col-md-12 col-xl-12 col-sm-8 col-8 ">
                            <h5>Sabados/Domingos/Feriados:</h5>
                            <h6 class="text-center" >10h00 - 20h00</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row justify-content-center">
                        <div class="col mx-auto">
                            <h3 class="tittle text-left">Dirección:</h3>
                            <hr/>
                        </div>
                    </div>
                    <div class="row justify-content-start text-white">
                        <div class="col-lg-12 col-md-12 col-xl-12 col-sm-8 col-8">
                            <h6>Av. A Mena Caamano y Av. Andalucia</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row justify-content-center">
                        <div class="col mx-auto">
                            <h3 class="tittle text-left">Se encuentra:</h3>
                            <hr/>
                        </div>
                    </div>
                    <div class="row justify-content-start text-center">
                        <div class="col-lg-12 col-md-12 col-xl-12 col-sm-8 col-8">
                            <h6 class="text-success">abierto</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="row justify-content-center">
                <div style='height:400px; width:100%;'>
                    <div id='map' style='height:100%;width:100%;'></div>
                </div>
            </div>
            <div class="row">
                <div class="col my-5">
                    <div class="row justify-content-center py-3">
                        <div class="col-3">
                            <h5>Tu Ubicacion:</h5>
                        </div>
                        <div class="col-5">
                            <h5>Escuela Politecnica Nacional</h5>
                        </div>
                    </div>
                    <div class="row justify-content-center py-3">
                        <div class="col-3">
                            <h5>Tu Hueca:</h5>
                        </div>
                        <div class="col-5">
                            <h5>El Carbonero Poliburguer</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center px-5">
                <div class="col">
                    <div class="row px-5">
                        <div class="col titulos px-5">
                            <h1 class="tittle text-center">Menu</h1>
                            <hr/>
                        </div>
                    </div>
                    <div class="row px-5 py-4">
                        <div class="col">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#hb" role="tab">Hamburguesas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#salchi" role="tab">Salchipapas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#bebida" role="tab">Bebidas</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row otrosResultados ">
                        <div class="col">
                            <div class="tab-content">
                                <div class="tab-pane active" id="hb" role="tabpanel">
                                    <div class="row d-flex">
                                        <div class="col text-center">
                                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="carousel-item active">
                                                        <div class="row justify-content-center px-5 py-5">
                                                            <div class="col-3">
                                                                <div class="card">
                                                                    <div class="text-center">
                                                                        <img class="card-img-top my-4 px-4 h-75 w-100" src="img/poli.jpeg" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">Hamburguesa Simple</h4>
                                                                        <p class="card-text">Pan + carne</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="card">
                                                                    <div class="text-center">
                                                                        <img class="card-img-top my-4 px-4 h-75 w-100" src="img/poli.jpeg" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">Hamburguesa Doble</h4>
                                                                        <p class="card-text">Pan + 2 Carnes</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="card">
                                                                    <div class="text-center">
                                                                        <img class="card-img-top my-4 px-4 h-75 w-100" src="img/poli.jpeg" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">Hamburguesa Mixta</h4>
                                                                        <p class="card-text">Pan+Carne+Chorizo</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="card">
                                                                    <div class="text-center">
                                                                        <img class="card-img-top my-4 px-4 h-75 w-100" src="img/poli.jpeg" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">Hamburguesa Mixta</h4>
                                                                        <p class="card-text">Ensaladas a elegir</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="row justify-content-center px-5 py-5">
                                                            <div class="col-3">
                                                                <div class="card">
                                                                    <div class="text-center">
                                                                        <img class="card-img-top my-4 px-4 h-75 w-100" src="img/poli.jpeg" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">Hamburguesa Simple</h4>
                                                                        <p class="card-text">Pan + carne</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="card">
                                                                    <div class="text-center">
                                                                        <img class="card-img-top my-4 px-4 h-75 w-100" src="img/poli.jpeg" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">Hamburguesa Doble</h4>
                                                                        <p class="card-text">Pan + 2 Carnes</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="card">
                                                                    <div class="text-center">
                                                                        <img class="card-img-top my-4 px-4 h-75 w-100" src="img/poli.jpeg" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">Hamburguesa Mixta</h4>
                                                                        <p class="card-text">Pan+Carne+Chorizo</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="card">
                                                                    <div class="text-center">
                                                                        <img class="card-img-top my-4 px-4 h-75 w-100" src="img/poli.jpeg" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">Hamburguesa Mixta</h4>
                                                                        <p class="card-text">Ensaladas a elegir</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" style="width: 3%;" href="#carouselExampleControls" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" style="width: 3%;" href="#carouselExampleControls" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="salchi" role="tabpanel">
                                    <div class="row d-flex">
                                        <div class="col text-center">
                                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="carousel-item active">
                                                        <div class="row justify-content-center px-5 py-5">
                                                            <div class="col-3">
                                                                <div class="card">
                                                                    <div class="text-center">
                                                                        <img class="card-img-top my-4 px-4 h-75 w-100" src="img/salchi.jpg" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">Hamburguesa Simple</h4>
                                                                        <p class="card-text">Pan + carne</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="card">
                                                                    <div class="text-center">
                                                                        <img class="card-img-top my-4 px-4 h-75 w-100" src="img/salchi.jpg" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">Hamburguesa Doble</h4>
                                                                        <p class="card-text">Pan + 2 Carnes</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="card">
                                                                    <div class="text-center">
                                                                        <img class="card-img-top my-4 px-4 h-75 w-100" src="img/salchi.jpg" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">Hamburguesa Mixta</h4>
                                                                        <p class="card-text">Pan+Carne+Chorizo</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="card">
                                                                    <div class="text-center">
                                                                        <img class="card-img-top my-4 px-4 h-75 w-100" src="img/salchi.jpg" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">Hamburguesa Mixta</h4>
                                                                        <p class="card-text">Ensaladas a elegir</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="row justify-content-center px-5 py-5">
                                                            <div class="col-3">
                                                                <div class="card">
                                                                    <div class="text-center">
                                                                        <img class="card-img-top my-4 px-4 h-75 w-100" src="img/salchi.jpg" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">Hamburguesa Simple</h4>
                                                                        <p class="card-text">Pan + carne</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="card">
                                                                    <div class="text-center">
                                                                        <img class="card-img-top my-4 px-4 h-75 w-100" src="img/salchi.jpg" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">Hamburguesa Doble</h4>
                                                                        <p class="card-text">Pan + 2 Carnes</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="card">
                                                                    <div class="text-center">
                                                                        <img class="card-img-top my-4 px-4 h-75 w-100" src="img/salchi.jpg" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">Hamburguesa Mixta</h4>
                                                                        <p class="card-text">Pan+Carne+Chorizo</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="card">
                                                                    <div class="text-center">
                                                                        <img class="card-img-top my-4 px-4 h-75 w-100" src="img/salchi.jpg" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">Hamburguesa Mixta</h4>
                                                                        <p class="card-text">Ensaladas a elegir</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" style="width: 3%;" href="#carouselExampleControls" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" style="width: 3%;" href="#carouselExampleControls" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="bebida" role="tabpanel">
                                    <div class="row d-flex">
                                        <div class="col text-center">
                                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="carousel-item active">
                                                        <div class="row justify-content-center px-5 py-5">
                                                            <div class="col-3">
                                                                <div class="card">
                                                                    <div class="text-center">
                                                                        <img class="card-img-top my-4 px-4 h-75 w-100" src="img/sodas.jpg" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">Gaseosa</h4>
                                                                        <p class="card-text">pepsi</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="card">
                                                                    <div class="text-center">
                                                                        <img class="card-img-top my-4 px-4 h-75 w-100" src="img/sodas.jpg" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">Gaseosa </h4>
                                                                        <p class="card-text">coca cola</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="card">
                                                                    <div class="text-center">
                                                                        <img class="card-img-top my-4 px-4 h-75 w-100" src="img/sodas.jpg" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">Gaseosa</h4>
                                                                        <p class="card-text">Pilsener</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="card">
                                                                    <div class="text-center">
                                                                        <img class="card-img-top my-4 px-4 h-75 w-100" src="img/sodas.jpg" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">Gaseosa</h4>
                                                                        <p class="card-text">Fruit</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="row justify-content-center px-5 py-5">
                                                            <div class="col-3">
                                                                <div class="card">
                                                                    <div class="text-center">
                                                                        <img class="card-img-top my-4 px-4 h-75 w-100" src="img/sodas.jpg" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">Hamburguesa Simple</h4>
                                                                        <p class="card-text">Pan + carne</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="card">
                                                                    <div class="text-center">
                                                                        <img class="card-img-top my-4 px-4 h-75 w-100" src="img/sodas.jpg" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">Hamburguesa Doble</h4>
                                                                        <p class="card-text">Pan + 2 Carnes</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="card">
                                                                    <div class="text-center">
                                                                        <img class="card-img-top my-4 px-4 h-75 w-100" src="img/sodas.jpg" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">Hamburguesa Mixta</h4>
                                                                        <p class="card-text">Pan+Carne+Chorizo</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="card">
                                                                    <div class="text-center">
                                                                        <img class="card-img-top my-4 px-4 h-75 w-100" src="img/sodas.jpg" alt="Card image cap">
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">Hamburguesa Mixta</h4>
                                                                        <p class="card-text">Ensaladas a elegir</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" style="width: 3%;" href="#carouselExampleControls" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" style="width: 3%;" href="#carouselExampleControls" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col">
                    <div class="row justify-content-center">
                        <div class="comments-container py-3">
                            <div id="contenedorcomentarios" class="col">
                                <div class="row">
                                    <div class="col px-5">
                                        <form>
                                            <div class="form-group">
                                                <label class="tittle" for="comentarioUsuario"><strong>Escribe tu comentario:</strong></label>
                                                <textarea class="form-control" id="comentarioUsuario" rows="5"></textarea>
                                            </div>
                                            <div class="text-right">
                                                <button id="botonComentar" type="submit" class="btn btn-primary">Comentar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <h5 class="tittle text-left"><strong>Comentarios:</strong></h5>
                            </div>
                            <div data-spy="scroll" data-offset="0" class="scrollspyClass">
                                <ul id="comments-list" class="comments-list px-5">
                                    <li class="my-3">
                                        <div class="comment-main-level">
                                            <div class="comment-avatar mr-3">
                                                <img src="img/user4.png" alt="">
                                            </div>
                                            <div class="comment-box">
                                                <div class="comment-head">
                                                    <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Agustin Ortiz</a></h6>
                                                    <span>hace 20 minutos</span>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="comment-content">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="my-3">
                                        <div class="comment-main-level">
                                            <div class="comment-avatar mr-3">
                                                <img src="img/user4.png" alt="">
                                            </div>
                                            <div class="comment-box">
                                                <div class="comment-head">
                                                    <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Agustin Ortiz</a></h6>
                                                    <span>hace 20 minutos</span>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="comment-content">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="my-3">
                                        <div class="comment-main-level">
                                            <div class="comment-avatar mr-3">
                                                <img src="img/user4.png" alt="">
                                            </div>
                                            <div class="comment-box">
                                                <div class="comment-head">
                                                    <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Agustin Ortiz</a></h6>
                                                    <span>hace 20 minutos</span>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="comment-content">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="my-3">
                                        <div class="comment-main-level">
                                            <div class="comment-avatar mr-3">
                                                <img src="img/user4.png" alt="">
                                            </div>
                                            <div class="comment-box">
                                                <div class="comment-head">
                                                    <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Agustin Ortiz</a></h6>
                                                    <span>hace 20 minutos</span>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="comment-content">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
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
<script src="js/jquery-validation/dist/jquery.validate.js"></script>
<script src="js/jquery-validation/dist/localization/messages_es.min.js"></script>
<script src="js/js.cookie.js"></script>
<script src="css/bootstrap-4.0.0-alpha.6-dist/js/popper.min.js"></script>
<script src="css/bootstrap-4.0.0-alpha.6-dist/js/tether.min.js"></script>
<script src="css/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
<script src="js/perfilhueca.js"></script>
<!--script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBBjmpouj6dqlBWYsueo00tSkHKu2zJFUY'></script-->
<!--script>
    /*NO FUNCIONA*/
    function initialize() {
        var myLatLng = {lat: -0.2101867, lng: -78.4886912};
        var myLatLng2 = {lat: -0.20923866016848838, lng: -78.48832368850708};
        var myLatLng3 = {lat: -0.20930035056434268, lng: -78.48826602101326};
        var myLatLng4 = {lat: -0.2093647231510683, lng: -78.4881466627121};
        var myLatLng5 = {lat: -0.20918099305909374, lng: -78.48843097686768};
        var myLatLng6 = {lat: -0.2102806913876026, lng: -78.48695710301399};
        var myLatLng7 = {lat: -0.20980192029554695, lng: -78.48660036921501};
        var myLatLng8 = {lat: -0.2083240329667429, lng: -78.490831553936};
        var mapOptions = {
            zoom:17,
            center:myLatLng,
	        scrollwheel: false,
            disableDoubleClickZoom: true,
            draggable: false
        }

        var map = new google.maps.Map(document.getElementById('map'), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'USTED ESTA AQUI'
        }
        );

        var marker2 = new google.maps.Marker({
            position: myLatLng2,
            map: map,
            title: 'El Ramón Restaurante'
        });

        var marker3 = new google.maps.Marker({
            position: myLatLng3,
            map: map,
            title: 'El Ramón Restaurante'
        });

        var marker4 = new google.maps.Marker({
            position: myLatLng4,
            map: map,
            title: 'El Carbonero Poliburguer'
        });

        var marker5 = new google.maps.Marker({
            position: myLatLng5,
            map: map,
            title: 'RAMÓN ANTIGUA'
        });

        var marker6 = new google.maps.Marker({
            position: myLatLng6,
            map: map,
            title: 'I FEEL UiO'
        });

        var marker7 = new google.maps.Marker({
            position: myLatLng7,
            map: map,
            title: 'Las Costillas'
        });

        var marker8 = new google.maps.Marker({
            position: myLatLng8,
            map: map,
            title: 'The Empanada Shop'
        });

    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script-->
</body>
</html>
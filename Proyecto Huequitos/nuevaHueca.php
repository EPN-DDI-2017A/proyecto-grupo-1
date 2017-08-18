<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nueva Hueca</title>
    <link rel="stylesheet" href="css/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/new-hueca.css">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        #error{
            display: none !important;
        }
    </style>
</head>
<body>
<section id="home" data-type="parallax_section" data-speed="10">
    <article>
        <div class="container-fluid">
            <div class="row menu " id="menup">
                <div class="col">
                    <nav class="navbar navbar-expand-lg  navbar-light px-5" >
                        <a class="navbar-brand w-25" href="PerfilUsuario.php">
                            <img class="animated zoomIn img-fluid w-50" src="img/final.png" >
                        </a>
                        <button class="navbar-toggler navbar-toggler-right p-3" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-item nav-link active" href="PerfilUsuario.php">Perfil<span class="sr-only">(current)</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row info">
                <div class="col px-5 py-4">
                    <form>
                        <div class="row px-4 py-4">
                            <div class="col-5 align-self-center">
                                <div class="card-block">
                                    <img class="w-100 h-75" src="img/restaurant.jpg"/>
                                </div>
                                <div class="form-group py-4">
                                    <input  type="file" class="form-control-file" id="imagenHueca" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">Upload an image of your Hueca only jpg or png</small>
                                </div>
                            </div>
                            <div class="col-7 align-self-start">
                                <div class="row py-4">
                                    <div class="col text-center">
                                        <h1 class="text-white">DATOS HUEQUITO</h1>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" id="nombreHueca" placeholder="Nombre de la Hueca">
                                </div>
                                <div class="form-group">
                                     <input class="form-control" type="text" id="direccion"  placeholder="Jose Abarca Oe3-162 y Lorenzo Flores">
                                </div>
                                <div class="form-group">
                                    <label for="atencion" class="col-form-label">Horarios de Atención:</label>
                                    <textarea class="form-control" id="atencion" rows="3" placeholder="Abierto cada día desde el 18 de marzo hasta el 31 de octubre cerrado los lunes"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col text-center">
                                <h1 class="text-white">PLATOS DE TU HUECA</h1>
                            </div>
                        </div>
                        <div class="form-group row px-5">
                            <div class="col px-5">
                                <div class="row">
                                    <div id="platos" class="col">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                          <li class="nav-item">
                                            <a class="nav-link active" id="hogar-tab" data-toggle="tab" href="#hogar" role="tab" aria-controls="hogar" aria-expanded="true">Plato</a>
                                          </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col">
                                        <div class="tab-content" id="myTabContent">
                                          <div class="tab-pane fade show active" id="hogar" role="tabpanel" aria-labelledby="hogar-tab">
                                                <div class="form-group">
                                                    <input  type="file" class="form-control-file" id="imagenPlato" aria-describedby="fileHelp">
                                                    <small id="fileHelp" class="form-text text-muted"> Subir imagen del plato jpg or png</small>
                                                </div>
                                                <div class="form-group">
                                                    <label id="nameplato" for="nameplato" class="col-form-label">Nombre de Plato:</label>
                                                    <input class="form-control" type="text" id="nameplato" placeholder="Nombre del plato">
                                                </div>
                                                <div class="form-group">
                                                    <label for="categoria" class="col-form-label">Escoja una categoria:</label>
                                                    <select id="categoria" class="form-control" >
                                                        <option>Postres</option>
                                                        <option>Entrada</option>
                                                        <option>Comida Rapida</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="descripPlato" class="col-form-label">Descripcion del plato</label>
                                                    <textarea id="descripPlato" class="form-control" id="atencion" rows="3" placeholder="Abierto cada día desde el 18 de marzo hasta el 31 de octubre cerrado los lunes"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <button id="registro" type="submit" class="btn btn-danger mb-2">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!--FOOTER-->
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
    </article>
</section>
<!--mapa google-->

<script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=f8e5a1f87e11e0a8bcbfd00b2d3e414e33271c15'></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBjmpouj6dqlBWYsueo00tSkHKu2zJFUY&libraries=places"></script>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="css/bootstrap-4.0.0-alpha.6-dist/js/popper.min.js"></script>
<!-- <script src="js/jquery-validation/dist/jquery.validate.min.js"></script> -->
<!-- <script src="js/jquery-validation/dist/localization/messages_es.js"></script> -->
<script src="css/bootstrap-4.0.0-alpha.6-dist/js/tether.min.js"></script>
<script src="css/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>

<script src="js/newHueca.js"></script>
</body>
</html>
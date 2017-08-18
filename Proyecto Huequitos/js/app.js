/**
 * Created by Henry-Ken on 12/7/2017.
 */
$(document).ready(function () {
    console.log("Hola jquery!!");
    // codigo de popover
    var currentTime = new Date()
    var year = currentTime.getFullYear();
    $('#fecha').html(year);
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover({
        content:
        // '<div class="triangulo"></div>'+
        '<div class="row mx-3 my-3">'+
        '   <form id="forminiciosesion" class="w-100">' +
        '       <div class="form-group w-100 justify-content-end text-white">'+
        '           <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Nombre de Usuario">'+
        '       </div>'+
        '       <div class="form-group justify-content-end text-white">'+
        '           <input type="password" class="form-control " name="pass" id="pass" placeholder="Password">'+
        '       </div>'+
        '       <div class="form-group row justify-content-end">'+
        '           <button id="iniciarSesion" class="btn btn-primary" style="background: orange; border: none" href="#">Enviar</button>'+
        '       </div>'+
        '   </form>'+
        '</div>'
    });
    $('[data-toggle="popover"]').on('shown.bs.popover', function (e) {
        e.preventDefault();
        console.log("aparecio");
        $("html").addClass("noscroll");
        $("#forminiciosesion").validate({
            rules:{
                usuario:{
                    required: true
                },
                pass:{
                    required: true
                }
            },
            messages:{
                usuario:{
                    required: "Ingrese su nombre de usuario.",
                },
                pass:{
                    required: "Ingrese su contraseña.",
                }
            }
        });
        $('#iniciarSesion').on('click', function (e) {
        e.preventDefault();
        console.log($('#usuario').val());
        if ($("#forminiciosesion").valid()) {
            $.ajax({
                url: 'iniciarSesion.php',
                type: 'post',
                dataType: 'json',
                data: {
                    usuario: $('#usuario').val(),
                    password: $('#pass').val()
                },
            })
                .done(function(data) {
                    console.log("success");
                    console.log(data);
                    
                    if(data.error == 1){
                        alert("Usuario y Contraseña Incorrectas")
                    }else{
                        localStorage.setItem('usuario', JSON.stringify(data));
                        window.location.href = 'http://localhost/Proyecto Huequitos/PerfilUsuario.php';
                    }
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    console.log("complete");
                });
        }
    });
    });

    $('[data-toggle="popover"]').on('hidden.bs.popover', function () {
        $("html").removeClass("noscroll");
    });

    //video codigo jquery
    scaleVideoContainer();
    initBannerVideoSize('.video-container .poster img');
    initBannerVideoSize('.video-container .filter');
    initBannerVideoSize('.video-container video');

    $(window).on('resize', function() {
        scaleVideoContainer();
        scaleBannerVideoSize('.video-container .poster img');
        scaleBannerVideoSize('.video-container .filter');
        scaleBannerVideoSize('.video-container video');
    });
    function scaleVideoContainer() {

        var height = $(window).height() + 5;
        var unitHeight = parseInt(height) + 'px';
        $('.homepage-hero-module').css('height',unitHeight);

    }
    function initBannerVideoSize(element){

        $(element).each(function(){
            $(this).data('height', $(this).height());
            $(this).data('width', $(this).width());
        });

        scaleBannerVideoSize(element);

    }
    function scaleBannerVideoSize(element){

        var windowWidth = $(window).width(),
            windowHeight = $(window).height() + 5,
            videoWidth,
            videoHeight;

        // console.log(windowHeight);

        $(element).each(function(){
            var videoAspectRatio = $(this).data('height')/$(this).data('width');

            $(this).width(windowWidth);

            if(windowWidth < 100){
                videoHeight = windowHeight;
                videoWidth = videoHeight / videoAspectRatio;
                $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});

                $(this).width(videoWidth).height(videoHeight);
            }

            $('.homepage-hero-module .video-container video').addClass('fadeIn animated');

        });
    }
    
    $("#buscadoroculto").hide();

    // mouseover sobre lupita
    $( "i.mouseencima" )
        .mouseover(function(){
            $(this).removeClass("slideInDown")
            $(this).addClass("infinite tada")
        })
        .mouseout(function() {
            $(this).removeClass("infinite")
        })
        .on("click",function (e) {
            e.preventDefault();
            $("#buscadoroculto").toggle();
            $("#nuevaBusquedatext").focus();
            $("html").addClass("noscroll");
        });

    // programacion de la busqueda
    $("#buscadoroculto").mouseup(function (e) {
        e.preventDefault();
        $("#buscadoroculto").toggle();
        $("html").removeClass("noscroll");
    });
    // metodo para buscar
    $('#huequiar').on('click', function(event) {
        event.preventDefault();
        var busquedacookie = $("#nuevaBusquedatext").val();
        // poner las cookies, localstorage y sessionstorage
        Cookies.set('busqueda', busquedacookie);
        
        window.location.href = 'http://localhost/Proyecto Huequitos/ResultadosHuecas.php';
    });

    // validaciones en index
    // formComentarios es el nombre del id del form a validar
    $("#formComentarios").validate({
        rules:{
            email:{
                required: true,
                email: true
            },
            sugerencia:{
                required: true
            }
        },
        messages:{
            email:{
                required: "Ingrese por favor su correo.",
                email: "Por favor ingrese un correo valido"
            },
            sugerencia:{
                required: "Ingrese por favor su sugerencia."
            }
        }
    });

    $('#enviar').on('click', function(event) {
        event.preventDefault();
        if ($("#formComentarios").valid()) {
            $.ajax({
            url: 'indexComentarios.php',
            type: 'post',
            dataType: 'json',
            data: {
                correo: $('#email').val(),
                sugerencia: $('#sugerencia').val()
            },
        })
        .done(function(data) {
            console.log("success");
            console.log(data);
            alert("Gracias por tu sugerencia");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
        }
    });
    

});


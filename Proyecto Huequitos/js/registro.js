/**
 * Created by Henry-Ken on 17/8/2017.
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
        '<div class="triangulo"></div>'+
        '<div class="row mx-3 my-3">'+
        '   <form class="w-100">' +
        '       <div class="form-group w-100 justify-content-end">'+
        '           <input type="email" class="form-control" id="inputEmail3" placeholder="Email">'+
        '       </div>'+
        '       <div class="form-group justify-content-end">'+
        '           <input type="password" class="form-control " id="inputPassword3" placeholder="Password">'+
        '       </div>'+
        '       <div class="form-group row justify-content-end">'+
        '           <div class="boton">'+
        '               <a type="submit" class="btn" style="background: orange; border: none; color: white" href="PerfilUsuario.php">Iniciar Sesion</a>'+
        '           </div>'+
        '       </div>'+
        '   </form>'+
        '</div>'
    })

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
                        window.location.href = 'http://localhost/Huequitos/PerfilUsuario.php';
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

    // registro de usuario
    $("#botonRegistrar").on("click",function (event){
        event.preventDefault();
        console.log($("#usuarioRegis").val());
        console.log($("#passwordRegis").val());
        console.log($("#passwordrepetirRegis").val());
        $.ajax({
                url: 'iniciarSesion.php',
                type: 'get',
                dataType: 'json',
                data: {
                    usuarioRegis: $('#usuarioRegis').val(),
                    passwordRegis: $('#passwordRegis').val()
                },
            })
                .done(function(data) {
                    console.log("success");
                    console.log(data);
                    alert(data);
                    $("#usuarioRegis").val("");
                    $("#passwordRegis").val("");
                    $("#passwordrepetirRegis").val("");
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    console.log("complete");
                });
    });
    $("#registro").validate({
        rules:{
            usuarioRegis:{
                required: true
            },
            passwordRegis:{
                required: true,
                minlength: 5
            },
            passwordrepetirRegis:{
                required: true,
                minlength: 5,
                equalTo: '#passwordRegis'
            }
        },
        messages:{}
    });
    $('#registro input').on('keyup', function () {
        if ($('#registro').valid()) {
            $('#botonRegistrar').attr('disabled', false);
        } else {
            $('#botonRegistrar').attr('disabled', 'disabled');
        }
    });

});


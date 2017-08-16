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
        '               <a type="submit" class="btn" style="background: orange; border: none; color: white" href="PerfilUsuario.html">Iniciar Sesion</a>'+
        '           </div>'+
        '       </div>'+
        '   </form>'+
        '</div>'
    })

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
    $("#nuevaBusquedatext").blur(function (e) {
        e.preventDefault();
        $("#buscadoroculto").toggle();
        $("html").removeClass("noscroll");
    })
});


/**
 * Created by Henry-Ken on 17/8/2017.
 */
$(document).ready(function(){
    var intlatitud;
    var intlongitud;
    $('section[data-type="parallax_section"]').each(function(){
        var $bgobj = $(this); // Variable para asignacion de objeto
        $(window).scroll(function() {
            $window = $(window);
            var yPos = -($window.scrollTop() / $bgobj.data('speed'));
            // cordinadas del background
            var coords = '50% '+ yPos + 'px';
            // moviendo el background
            $bgobj.css({ backgroundPosition: coords });
        });
    });
    $('#registro').on('click', function(event) {
        event.preventDefault();
        console.log(intlatitud);
        console.log(intlongitud);
        $.ajax({
            url: 'ingresoHueca.php',
            type: 'post',
            dataType: 'json',
            data: {
                nombreHueca:$('#nombreHueca').val(),
                imagenHueca: $('#imagenHueca').val(),
                horarioHueca: $('#atencion').val(),
                latitud: intlatitud,
                longitud: intlongitud,
                plato:{
                    imgPlato: $('#imagenPlato').val(),
                    nombrePlato: $('#nameplato').val(),
                    categoria: $('#categoria').val(),
                    descripPlato: $('#descripPlato').val(),
                }
            },
        })
            .done(function(data) {
                console.log("success");
                console.log(data);
                alert("Hueca ingresada Satisfactoriamente !! :)")
                // var clase_msg = 'alert-success';
                // if (data.error) {
                //     clase_msg = 'alert-danger';
                // }
                // var html = '<div id="mensaje" class="alert ' + clase_msg +  ' alert-dismissible" role="alert">';
                // html += '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
                // html += '<span aria-hidden="true">&times;</span>';
                // html += '</button>';
                // html += data.mensaje;
                // html += '</div>';

                // $('.container').prepend(html);

                // $('#mensaje').slideUp(10000);
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
    });

    google.maps.event.addDomListener(window, 'load', initilize);
    function initilize(){
        var autocomplete =  new google.maps.places.Autocomplete(document.getElementById('direccion'));
        google.maps.event.addListener(autocomplete,'place_changed',function(){
            var places = autocomplete.getPlace();
            console.log(places.formatted_address);
            intlatitud = places.geometry.location.lat();
            intlongitud = places.geometry.location.lng();
        });

    }
});
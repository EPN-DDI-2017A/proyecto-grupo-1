$(document).ready(function () {
    console.log("Hola jquery perfil hueca!!");
    if(localStorage.getItem('usuario')){
        $('#contenedorcomentarios').show();
        $('#perfil').show();
        $('#nuevahuevaboton').show();
        $('#cerrarSesionboton').show();
        $('#home').hide();
        $('#iniciarsesionboton').hide();
    }else{
       $('#contenedorcomentarios').hide();
       $('#perfil').hide();
        $('#nuevahuevaboton').hide();
        $('#cerrarSesionboton').hide();
        $('#home').show();
        $('#iniciarsesionboton').show();
    }

    $('#cerrarSesionboton').on('click',function(){
        localStorage.removeItem('usuario');
        window.location.href = 'http://localhost/Huequitos/PerfilHueca.php';
    });

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
        '           <button id="iniciarSesion" class="btn btn-primary" style="background: orange; border: none">Enviar</button>'+
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

    $('[data-toggle="popover"]').on('hidden.bs.popover', function () {
        $("html").removeClass("noscroll");
    });

});
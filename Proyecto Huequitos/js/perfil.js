$(document).ready(function () {
    console.log("Hola jquery perfil!!");
    if(localStorage.getItem('usuario')){
        var user = JSON.parse(localStorage.getItem('usuario'));
        console.log(user.usuario);
        $('#nombreUser').html('<strong>'+user.usuario+'</strong>');
    }else{
        window.location.href = 'http://localhost/Huequitos/index.php';
    }
    $('#cerrarSesion').on('click',function(){
        localStorage.removeItem('usuario');
        window.location.href = 'http://localhost/Huequitos/index.php';
    });

    $('#huequiar').on('click', function(event) {
        event.preventDefault();
        var busquedacookie = $("#nuevaBusquedatext").val();
        // poner las cookies, localstorage y sessionstorage
        Cookies.set('busqueda', busquedacookie);
        window.location.href = 'http://localhost/Huequitos/ResultadosHuecas.php';
    });
    $('#huequiaroculto').on('click', function(event) {
        event.preventDefault();
        var busquedacookie = $("#nuevaBusquedatextoculto").val();
        // poner las cookies, localstorage y sessionstorage
        Cookies.set('busqueda', busquedacookie);
        window.location.href = 'http://localhost/Huequitos/ResultadosHuecas.php';
    });
    
});

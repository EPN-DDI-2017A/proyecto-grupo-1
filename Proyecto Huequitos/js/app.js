/**
 * Created by Henry-Ken on 12/7/2017.
 */
$(document).ready(function () {
    console.log("Hola jquery!!");
    var currentTime = new Date()
    var year = currentTime.getFullYear();
    $('#fecha').html(year);
    $('[data-toggle="tooltip"]').tooltip()
    $('[data-toggle="popover"]').popover({
        content:
        '<div class="row mx-1 my-3">'+
        '<form class="w-100">' +
        '<div class="form-group w-100 justify-content-end">'+
        '<input type="email" class="form-control" id="inputEmail3" placeholder="Email">'+
        '</div>'+
        '<div class="form-group justify-content-end">'+
        '<input type="password" class="form-control " id="inputPassword3" placeholder="Password">'+
        '</div>'+
        '<div class="form-group row justify-content-end">'+
        '<div class="boton">'+
        '<button type="submit" class="btn btn-primary">Sign in</button>'+
        '</div>'+
        '</div>'+
        '</form>'+
        '</div>'
    })
});

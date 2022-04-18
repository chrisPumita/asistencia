$(document).ready(function() {
    console.log("soy un template ");
});


function mensajeAlerta(tipo,mensaje, titulo) {
    Swal.fire({
        icon: tipo,
        title: titulo,
        text: mensaje
    })
}
$(document).ready(function() {
    console.log("ALERTAS F(X)");
});


function mensajeAlerta(tipo,mensaje, titulo) {
    Swal.fire({
        icon: tipo,
        title: titulo,
        text: mensaje
    })
}
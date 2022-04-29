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


function alertaNotificacion(tipo,titulo) {
    const Toast = Swal.mixin({
        toast: true,
        position: 'bottom-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: tipo,
        title: titulo
    })
}

function sweetConfirm(title, message, callback) {
    Swal.fire({
        title: title,
        text: message,
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'No'
    }).then((confirmed) => {
        callback(confirmed && confirmed.value == true);
    });
}

function sweetCustomDesicion(title,message,yes,no,type,callback) {
    Swal.fire({
        title: title,
        text: message,
        icon: type,
        showCancelButton: true,
        confirmButtonColor: '#15850d',
        cancelButtonColor: 'rgba(175,175,175,0.69)',
        confirmButtonText: yes,
        cancelButtonText: no
    }).then((confirmed) => {
        callback(confirmed && confirmed.value == true);
    });
}
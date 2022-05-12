$(document).ready(function() {
    cargaGruposSidebar();
});

function cargaGruposSidebar(){
    cargaGruposProfe("ALL").then(function (response) {
        let LISTA_DESP = response.data;
        let template = ``;
        if (LISTA_DESP.length > 0) {
            template = `<h6>Seleccione un grupo para pasar lista:</h6>
                        <select class="form-select" aria-label="Default select example" id="selectGpoChoose">`;
            LISTA_DESP.forEach(
                gpo=>{
                    template += `<option value="${gpo.id_grupo}">${gpo.materia} (${gpo.grupo}) - ${gpo.carrera}</option>`;
                }
            );
            template += `</select>`;
        }
        else{
            $("#btnStartPase").html("");
            template += `<div class="alert alert-primary" role="alert">
                          No tenemos grupos registrados <a href="#" class="alert-link">Cree un grupo</a>. Y vuelva a intentarlo.
                        </div>`;
        }
        $("#containerSelectGruposAll").html(template);
    })
}

//selectGpoChoose

function startPaseLista() {
    pasarLista($("#selectGpoChoose option:selected").val())
}

function pasarLista(id) {
    sweetCustomDesicion("Pase de Lista", '¿Desea iniciar el pase de lista en este grupo?','<i class="fas fa-check"></i> Iniciar Pase de Lista','<i class="fas fa-undo-alt"></i> Cancelar','question', function (confirmed){
        if (confirmed) {
            let timerInterval
            Swal.fire({
                title: 'Preparando todo...',
                html: 'Iniciando en <b></b> segundos.',
                timer: 1500,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading()
                    const b = Swal.getHtmlContainer().querySelector('b')
                    timerInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft()
                    }, 100)
                },
                willClose: () => {
                    clearInterval(timerInterval)
                }
            }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                    window.location.href = "./pase_lista.php?start_sesion="+id+"&action=new&id_pase=0&date='none'&filter='TODAY'";
                }
                else{
                    alertaNotificacion("error","Pase de Lista Cancelado")
                }
            })
            //alertaNotificacion("success","Dijo Si")
        }
    });
}

function revisaPaseLista(id_grupo,id_pase,filtro,dia) {
    window.location.href = "./pase_lista.php?start_sesion="+id_grupo+"&action=new&id_pase="+id_pase+"&date="+dia+"&filter='"+filtro+"'";
}
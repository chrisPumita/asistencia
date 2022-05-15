$(document).ready(function() {
    cargaGruposLista(ID_GPO);
    cargaLista();
});

function cargaLista() {
    busca_pase_lista(ID_GPO,FILTER,FECHA,ID_PASE).then(function (response) {
        if(response.response == 0){
            preCargaAlumnos();
        }
        else{
            ID_PASE = response.data.lista_prepare[0].id_pase_fk;
            buildTableStartPaseLista(response.data.lista_prepare);
            $("#buttonCancel").html(`<button type="button" class="btn btn-danger btn-sm btn-lg-5" onClick="cancelPaseLista(${response.data.lista_prepare[0].id_pase_fk});">Cancelar pase de lista</button>`);
            $("#btnUpdateNotas").html(`<button type="button" class="btn btn-primary btn-sm btn-lg-5 mt-3" onClick="saveNotas(${response.data.lista_prepare[0].id_pase_fk});">Guardar Nota</button>`);
            //conteo SPAN
            $("#dateToday").html(response.data.lista_prepare[0].fecha);
            $("#textAreaNoatas").html(response.data.lista_prepare[0].notas);
            estadisticaAsistencia(response.data.lista_prepare);
        }
    })
}


function cargaGruposLista(filtro) {
    cargaGruposProfe(filtro).then(function (response) {
        loadDataGrupo(response.data)
    })
}

function loadDataGrupo(data){
    if (data.length > 0){
        let curso = data[0];
        $("#tittleGpo").html(curso.carrera+" - "+ "Grupo: "+ curso.grupo);
        $("#materiaName").html(curso.materia);
        $("#codigoLink").html(curso.codigo_invitacion);
    }
    else{
        mensajeAlerta("danger","No se puede inciar un pase de lista porque este grupo no tiene alumnos inscritos","Sin alumnos");
        window.location.href = "./";
    }
}

function preCargaAlumnos() {
    cargaLista_pase_lista(ID_GPO,ACTION,true).then(function (result) {
        buildTablePreview(result.data)
    })
}
function buildTablePreview(lista) {
    let template = ``;
    if (lista.length >0) {
        lista.forEach(
            (alumno)=>
            {
                template += `<div class="card mt-3">
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-2 d-flex justify-content-center align-items-center">
                                                <img src="${alumno.avatar}" alt="Avatar" class="avatar_list">
                                            </div>
                                            <div class="col-6 justify-content-center">
                                                <h6><strong>${alumno.app} ${alumno.apm} ${alumno.nombre}</strong></h6>
                                                <p class="m-0">
                                                    <i class="fas fa-times-circle"></i>
                                                    <strong>Aun no se selecciona</strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>`;
            }
        );
        $("#dateToday").html(getDateAhora());
        sweetCustomDesicion("Iniciar Pase de Lista", 'Cuando este listo de clic en INICIAR','<i class="fas fa-check"></i> INICIAR','<i class="fas fa-undo-alt"></i> Cancelar','question', function (confirmed){
            if (confirmed)
            {
                cargaLista_pase_lista(ID_GPO,ACTION,false).then(function (result) {
                    //  buildTableStartPaseLista(result.data.lista_prepare);
                    location.reload();
                    //  cargaLista();
                })
            }
            else{
                window.location.href = "./";
            }
        });
    }
    else{
        template = `<div class="alert alert-warning" role="alert">
           No hay alumnos registrados. Comparta el codigo del grupo.
      </div>`
    }
    $("#listContainer").html(template);
}

function buildTableStartPaseLista(lista) {
    let template = ``;
    if (lista.length >0) {
        let contador = 0;
        lista.forEach(
            (alumno)=>
            {
                contador++;
                let baja = alumno.estatus_alumno == "0" ? '<i class="fas fa-frown text-danger"></i> BAJA':"";
                let bg_pendiente = "bg-info";
                let bg_avatar = "bg-dark";
                //Logica de la carga
                let valor = "";
                if (alumno.confirmada != null){
                        switch (parseInt(alumno.confirmada)) {
                            case 1:
                                bg_avatar = "bg-success";
                                valor= `<i class="fas fa-check-circle text-success"></i>
                                <strong> Presente</strong>`;
                                break;
                            case 0:
                                bg_avatar = "bg-warning";
                                valor= `<i class="fas fa-clock text-warning"></i>
                                <strong> Retardo</strong>`;
                                break;
                            case -1:
                                bg_avatar = "bg-danger";
                                valor= `<i class="fas fa-times text-danger"></i>
                                <strong> Falta</strong>`;
                                break;
                        }
                        bg_pendiente = "";
                }
                else{
                    valor= `<strong><i class="far fa-hand-point-right text-primary"></i> Seleccione...</strong>`;
                }
                template += `<div class="card mt-1 ${bg_pendiente}">
                                <div class="card-body">
                                    <div class="row>
                                    <div class="col-12">
                                        <div class="row" idAlumnoRow="${alumno.id_pase_fk}||${alumno.id_alumno}">
                                            <div class="col-1 d-flex justify-content-center align-items-center fs-3">${contador}</div>
                                            <div class="col-2 col-sm-1 d-flex justify-content-center align-items-center">
                                                <img src="${alumno.avatar}" alt="Avatar" class="avatar_list ${bg_avatar} p-1">
                                            </div>
                                            <div class="col justify-content-center">
                                                <h6><strong>${alumno.app} ${alumno.apm} ${alumno.nombre}</strong></h6>
                                                <p class="m-0">
                                                    ${valor}  ${baja}
                                                </p>
                                                
                                                <!--
                                                <div class="row">
                                                    <p>
                                                        <i class="fas fa-times-circle"></i>
                                                        <strong class="small">Justificada</strong>
                                                        <button type="button" class="btn btn-danger btn-sm">VER</button>
                                                    </p>
                                                </div>
                                                -->

                                            </div>
                                            <div class="col-4 col-md-4 d-block align-items-center justify-content-center d-xl-flex">
                                                <button type="button" accion ="presente" class="btn btn-success btn-sm me-3 btnPase mb-1">Presente</button>
                                                <button type="button" accion ="falta" class="btn btn-danger btn-sm w-auto me-3 btnPase mb-1">Falta</button>
                                                <button type="button" accion ="retardo" class="btn btn-warning btn-sm w-auto me-3 btnPase">Retardo</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>`;
            }
        );
    }
    else{
        template = `<div class="alert alert-warning" role="alert">
           No hay alumnos registrados. Comparta el codigo del grupo.
      </div>`
    }
    $("#listContainer").html(template);
}

//LISTENER PARA ACCION DEL BOTON
$(document).on("click", ".btnPase", function ()
{
    let elAction = $(this)[0];
    let elSelect = $(this)[0].parentElement.parentElement;
    let data = $(elSelect).attr("idAlumnoRow");
    let a = data.split("||");
    let action = $(elAction).attr("accion");
    let idPase = a[0];
    let idAlumno = a[1];
    actionPaseLista(idPase,idAlumno,action).then(function (result) {
        cargaLista();
    })

});

function estadisticaAsistencia(LISTA) {
    let asistidos = LISTA.filter(element => element.confirmada === "1")
    let retardos = LISTA.filter(element => element.confirmada === "0")
    let faltas = LISTA.filter(element => element.confirmada === "-1")
    let asis = asistidos.length;
    let ret = retardos.length;
    let fal = faltas.length;
    ///countAsis
    //countFalt
    //countReta
    $("#countAsis").html(asis);
    $("#countFalt").html(fal);
    $("#countReta").html(ret);
}

//profesor_cancel_pase_lista

function cancelPaseLista(idPase) {
    sweetCustomDesicion("Cancelar Pase de Lista", '¿Esta seguro que desea CANCELAR este pase de lista?','<i class="fas fa-chevron-circle-right"></i> Continuar','<i class="fas fa-times"></i> Cancelar','question', function (confirmed){
        if (!confirmed)
        {
            cancelarPaseLista(idPase).then(function (result) {
                alertaNotificacion("error","Se ha cancelado el pase de lista");
                setTimeout( function() { window.location.href = "./"; }, 1000 );
            })
        }
    });
}

function saveNotas(idPase) {
    let nota = $("#textAreaNoatas").val();
    updateNotaPaseLista(idPase,nota).then(function (result) {
        alertaNotificacion("success","Se ha guardado la nota");
    })
}
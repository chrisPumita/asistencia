$(document).ready(function() {
    cargaGruposLista(ID_GPO);

    cargaListaToday();
});

function cargaListaToday() {
    busca_pase_lista(ID_GPO,"TODAY").then(function (response) {
        console.log("REVISAR SI YA SE HIZO EL PASE DE LISTA")
        console.log(response);
        if(response.response == 0){
            //aun no ha pasado lista
            preCargaAlumnos();
        }
        else{
            buildTableStartPaseLista(response.data)
            console.log(response.data)
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
        console.log(curso);
        $("#tittleGpo").html(curso.carrera+" - "+ "Grupo: "+ curso.grupo);
        $("#materiaName").html(curso.materia);
        $("#codigoLink").html(curso.codigo_invitacion);
        $("#dateToday").html(getDateAhora());
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
                console.log(alumno)
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

        sweetCustomDesicion("Iniciar Pase de Lista", 'Cuando este listo de clic en INICIAR','<i class="fas fa-check"></i> INICIAR','<i class="fas fa-undo-alt"></i> Cancelar','question', function (confirmed){
            if (confirmed)
            {
                cargaLista_pase_lista(ID_GPO,ACTION,false).then(function (result) {
                    console.log(result)
                    $("#buttonCancel").html(`<button type="button" class="btn btn-danger btn-sm btn-lg-5">Cancelar pase de lista</button>`);
                    buildTableStartPaseLista(result.data.lista_prepare);
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
        lista.forEach(
            (alumno)=>
            {
                console.log(alumno)
                let baja = alumno.estatus_alumno == "0" ? '<i class="fas fa-frown text-danger"></i> BAJA':"";
                //Logica de la carga
                let valor = "";
                if (alumno.confirmada != null){
                        switch (parseInt(alumno.confirmada)) {
                            case 1:
                                valor= `<i class="fas fa-check-circle text-success"></i>
                                <strong> Presente</strong>`;
                                break;
                            case 0:
                                valor= `<i class="fas fa-clock text-warning"></i>
                                <strong> Retardo</strong>`;
                                break;
                            case -1:
                                valor= `<i class="fas fa-times text-danger"></i>
                                <strong> Falta</strong>`;
                                break;
                        }
                }
                else{
                    valor= `<strong><i class="far fa-hand-point-right text-primary"></i> Seleccione...</strong>`;
                }
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
                                                <button type="button" class="btn btn-success btn-sm me-3 btnAsist mb-1">Presente</button>
                                                <button type="button" class="btn btn-danger btn-sm w-auto me-3 btnFalta mb-1">Falta</button>
                                                <button type="button" class="btn btn-warning btn-sm w-auto me-3 btnRetardo">Retardo</button>
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


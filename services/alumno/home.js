$(document).ready(function() {
    console.log("F(X) Alumno");
    consultaInscripcionesAlumno();
    consultaUltimosPaseListaAlumno();
    buscaJustificantes();
});

setInterval(consultaUltimosPaseListaAlumno,1000);

//frm_invitacion_code


/*SUBMINT de Add Alumno*/
$("#frm_invitacion_code").submit(function (event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: "../webhook/alumno_inscripcion.php",
        data: $('#frm_invitacion_code').serialize(),
        dataType: "json",
        success: function (result) {
            if(result.response=="1"){
                $('#modal-in-code').modal("hide");
                $('#frm_invitacion_code')[0].reset();
                    mensajeAlerta("success", "Te hemos agregado al grupo correctamente","Registro exitoso")
                consultaInscripcionesAlumno();
            }
            else{
                let alerta =  `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Error de código</strong><p> El codigo que ingrsaste es incorrecto</p>
                        </div>`;
                $('#resp').html(alerta).show(200).delay(2500).hide(200);
            }

        },
        error: function(result){
            console.log(result);
        }
    })
});

function consultaInscripcionesAlumno() {
    consutaInsc("ALL").then(
        function (result) {
            let template = ``;
            let template_lits = ``;
            let inscripciones = result.data;
            if (inscripciones.length>0){
                let GRUPOS = result.data;
                template = `<form class="row g-3" id="frm-busca-pase">
                                    <div class="col-12 col-md-7">
                                        <select class="form-select" id="selectGrupoSearch">`;
                GRUPOS.forEach(gpo=>{
                    template_lits += `<li class="list-group-item"><a href="./info_grupos.php?idGrupo=${gpo.id_grupo}">
                                            <i class="far fa-check-square"></i> ${gpo.materia} - Grupo ${gpo.grupo}
                                        </a></li>`;
                    template += ` <option value="${gpo.id_grupo}">${gpo.materia} - Grupo ${gpo.grupo}</option>`;
                })
                template += `
                                        </select>
                                    </div>
                                    <div class="col-7 col-md-3">
                                        <input class="w-100 form-control" type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
                                    </div>
                                    <div class="col-5 col-md-2">
                                        <button type="submit" class="btn btn-primary mb-3 w-100">Ver</button>
                                    </div>
                                </form>`;
            }
            else{
                template = `<div class="alert alert-primary" role="alert">
                              Aun no te has unido a algun grupo. Pregunta a tu profesor el codigo de 
                              invitacion y agregalo <a href=""  data-bs-toggle="modal" data-bs-target="#modal-in-code">aqui.  </a>
                            </div>`;
                template_lits = "No hay grupos registrados";
            }
            $("#containerBuscaPases").html(template);
            $("#listGrupos").html(template_lits);
        }
    )
}


function consultaUltimosPaseListaAlumno() {
    consultaPasesListaAlumno("LAST",0).then(result =>{
        let pases = result.data;
        let template = ``;
        if (pases.length > 0) {
            pases.forEach(pase=>{
                let icon = "";
                let leyendaEstadus = "";
                switch (pase.confirmada) {
                    case "1":
                        icon = '<i class="far fa-check-square text-success fs-3"></i>';
                        leyendaEstadus = ``;
                        break
                    case "0":
                        icon = '<i class="fas fa-clock text-warning fs-3"></i>';
                        leyendaEstadus = `Retardo`;
                        break
                    case "-1":
                        if (pase.url_justificante != null){
                            if (pase.estatus_rev_just ==="0"){
                                leyendaEstadus = '<i class="fas fa-file-medical"></i> Enviado';
                            }
                            else{
                                leyendaEstadus = '<i class="fas fa-file-medical"></i> Revisado';
                            }
                             }
                        else{
                            leyendaEstadus = `<button type="button" class="btn btn-danger btn-sm fontsizeletrabtn btn_ajustable"
                                            onClick="subirJustificante(${pase.id_pase},'${pase.materia}');"><i class="fas fa-file-upload"></i></button>`;

                        }
                        icon = '<i class="fas fa-times text-danger fs-3"></i>';
                       break
                    default:
                        icon = '<i class="fas fa-hourglass-end fs-3 text-secondary"></i>';
                        leyendaEstadus = `Esperando turno...`;
                        break
                }
                template += `<div class="col-12">
                            <div class="card class_card" role="button">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-2 d-flex text-center justify-content-center align-items-center">
                                            ${icon}
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <div class="row ">
                                                <div class="col-auto text-dark">
                                                    <p class="mb-0 d-flex justify-content-start">
                                                        <strong>${pase.materia}</strong> (${pase.grupo})<cite class="mx-2 justify-content-end">${pase.carrera} </cite>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-12 col-md-5">
                                                     <small >${pase.fecha}</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-2 d-md-block d-flex text-center justify-content-center align-items-center">
                                            ${leyendaEstadus}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`;
            })
        }
        else{
            template = `<div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <strong>No hay pases de lista</strong> Ningun profesor ha pasado listta
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>`;
        }
        $("#containerPasesLista").html(template);
    })
}
//alumno_consulta_pases_lista

function subirJustificante(idPase,materia) {
    $("#modal_justificante").modal("show");
    $("#tituloJust").html(materia);
    $("#idPase").val(idPase);
}

function buscaJustificantes() {
    consultaJustificantes("ALUMNO").then(function (result) {
        console.log(result);
        let LIST = result.data;
        let template = ``;
        if(LIST.length > 0){
            LIST.forEach(just=>{
                let estadoArchivo = just.estatus_rev_just === "0" ? `<span class="position-absolute end-0 me-1 p-1  badge rounded-pill bg-info" style="align-self: end;top: 10px;">Enviado</span>`
                    : `<span class="position-absolute end-0 me-1 p-1  badge rounded-pill bg-success" style="align-self: end;top: 10px;">Revisado</span>`;
                template += `<div class="row" >
                            <div class="card h-100 card_cursor">
                                <div class="card-body" role="button" onclick="showJustificPDF('${just.url_justificante}','${just.materia} ${just.grupo}');">
                                    <div class="row">
                                        <div class="col-2 d-flex justify-content-center align-items-center">
                                            <i class="far fa-file-pdf" style="height: 60px;width: 30px;"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1">${just.materia} <small>${just.grupo}</small></h6>
                                                ${estadoArchivo}
                                            </div>
                                            <div class="card-text text-muted">
                                                ${just.carrera} <br>
                                                Enviado el ${just.upload_date_justificante}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                console.log(just);
            });
        }
        else{
            template = result.mensaje;
        }
        $("#containerJustificantes").html(template);
    })
}

$("#frm-upload-file").on("submit", function(e){
    e.preventDefault();
    var formData = new FormData(document.getElementById("frm-upload-file"));
    formData.append("dato", "valor");
    $.ajax({
        url: "../webhook/alumno_upload_file.php",
        type: "post",
        dataType: "json",
        data: formData,
        contentType: false,
        processData: false
    }).done(function(res){
        if (res.type > 0){
            $("#frm-upload-file").trigger('reset');
            $("#modal_justificante").modal('hide');
            buscaJustificantes();
            mensajeAlerta("success", "El justificante ha sido enviado, espera la respuesta del profesor para que la aprueba y modifique tu falta.","Se envió justificante")
        }
        console.log(res);
    });
});

function showJustificPDF(url,name) {
    $("#Modal_PDF").modal('show');
    let iframe = '<iframe src="'+url+'" width="100%" height="500px"> </iframe>';
    $("#containerPDFView").html(iframe);
    $("#namePDF").html(name);
}
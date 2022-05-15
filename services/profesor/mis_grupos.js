$(document).ready(function() {
    console.log("ESTOY EN MIS GRUPOS");
    cargaMisGrupos();
    cargaMisGruposHoy();
});

function cargaMisGrupos() {
    cargaGruposProfe("0").then(function (result) {
            console.log("DATOS OK")
       //     console.log(result.data[0].link_invitacion)
        //filstrar a los de hoy
        let LISTA_HOY = filterItems("",result.data);
            console.log(LISTA_HOY);
        //todos los no archivados
        buildHTMLCardsMisGrup(result.data);

    })
}


function cargaMisGruposHoy() {
    cargaGruposProfe("0").then(function (result) {
        console.log("DATOS grupos hoy OK")
       //     console.log(result.data[0].link_invitacion)
        //filstrar a los de hoy
        let LISTA_HOY = filterItems("",result.data);
        console.log(LISTA_HOY);
        //todos los no archivados
        buildHTMLCardsMisGruphoy(result.data);

    })
}

function buildHTMLCardsMisGrup(lista) {
    console.log(lista);
    let template = ``;
    //iterar la lista
    if (lista.length > 0)
    {
        //si voy a iterar

        lista.forEach(
            (curso)=>
            {
              //  console.log(typeof(curso.estatus))
                console.log(curso)
                let estadoCurso = parseInt(curso.estatus) === 0 ? "warning": "success";
                //estatus
                 template += `<div class="col-12 col-md-3 pb-3"> 
                                        <div class="card class_card" role="button">
                                            <div class="card-body">
                                                <span class="position-absolute end-0 top-0 me-0 p-2 bg-${estadoCurso} border border-light rounded-circle">
                                                    <span class="visually-hidden">New alerts</span>
                                                </span>
                                                <div class="row text-center">
                                                    <h5 class="card-title">GRUPO ${curso.grupo}</h5>
                                                    <p>${curso.carrera}</p>
                                                    <p><strong>${curso.materia}</strong></p>
                                                </div>
                                                <div class="row">
                                                <ul class="list-group list-group-flush">
                                                  <li class="list-group-item">15/30 Clases</li>
                                                  <li class="list-group-item">${curso.dias}</li>
                                                  <li class="list-group-item">Min ${curso.porcentaje_min}% asis ${curso.puntaje_final}% Calif</li>
                                                  <li class="list-group-item">${curso.retardo_is_falta} Retardos = 1 Falta</li>
                                                  
                                                </ul>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-md-12">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="mt-3" style="display: flex;justify-content: flex-start;">
                                                                    <button type="button" class="btn btn-warning btn-sm fontsizeletrabtn btn_ajustable" onClick="archivarGrupos(${curso.id_grupo});">Archivar</button>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="mt-3" style="display: flex;justify-content: flex-end;">
                                                                    <a href="./detalles_grupo.php?id_grupo=${curso.id_grupo}" type="button" class="btn btn-success btn-sm fontsizeletrabtn btn_ajustable">Más detalles</a>
                                                                </div>
                                                            </div>
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
        //no tengo datos (grupos)
        template = `<div class="alert alert-warning" role="alert">
                      No tienes grupos registrados
                    </div>`;
    }
    //containerGruposAll
    $("#containerGruposAll").html(template);
}



function buildHTMLCardsMisGruphoy(lista) {
    console.log(lista);
    let template = ``;
    //iterar la lista
    if (lista.length > 0)
    {
        //si voy a iterar

        lista.forEach(
            (curso)=>
            {
              //  console.log(typeof(curso.estatus))
                console.log(curso)
                //let estadoCurso = parseInt(curso.estatus) === 0 ? "warning": "success";
                //estatus
                 template += `<div class="col-12 col-md-4 pb-3">
                                    <div class="row">
                                        <div class="col-12 col-md-10 mb-2">
                                            <div class="card class_card" role="button">
                                                <div class="card-body">
                                                    <div class="row text-center">
                                                        <h5 class="card-title">GRUPO ${curso.grupo}</h5>
                                                        <p>${curso.carrera}</p>
                                                        <p>${curso.materia}</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="card-text mb-0"> 15/30 Clases</p>
                                                        <p class="card-text mb-0">${curso.dias}</p>
                                                        <p class="card-text mb-0">Min ${curso.porcentaje_min}% asis ${curso.puntaje_final}% Calif</p>
                                                        <p class="card-text mb-0">${curso.retardo_is_falta} Retardos = 1 Falta</p>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="mt-3" style="display: flex;justify-content: flex-start;">
                                                                <button type="button" class="btn btn-warning btn-sm fontsizeletrabtn btn_ajustable" onClick="archivarGrupos(${curso.id_grupo});">Archivar</button>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mt-3" style="display: flex;justify-content: flex-end;">
                                                                <a href="./detalles_grupo.php?id_grupo=${curso.id_grupo}" type="button" class="btn btn-success btn-sm fontsizeletrabtn btn_ajustable">Más detalles</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-1" style="display: flex;justify-content: center;">

                                                <a href="./detalles_grupo.php?id_grupo=${curso.id_grupo}" type="button" class="btn btn-success btn_ajustable" style="display: flex;align-content: center;justify-content: center;align-items: center;">
                                                    <i class="fas fa-angle-right"></i>
                                                </a>
                                        </div>
                                    </div>
                                </div>`;
            }
        );

    }
    else{
        //no tengo datos (grupos)
        template = `<div class="alert alert-warning" role="alert">
                      No tienes grupos el día de hoy
                    </div>`;
    }
    //containerGruposAll
    $("#containerGruposHoy").html(template);
}


function archivarGrupos(id) {
    alert("cancelar "+ id);
}



/*
        lista.forEach(
            (curso)=>
            {
                console.log(curso)
                 template += ``;
            }
        );
*
* */
$(document).ready(function() {
    console.log("ESTOY EN MIS GRUPOS");
    cargaMisGrupos();
});

function cargaMisGrupos() {
    cargaGruposProfe("0").then(function (result) {
            console.log("DATOS OK")
       //     console.log(result.data[0].link_invitacion)
        //filstrar a los de hoy
        let LISTA_HOY = filterItems("LUN",result.data);
            console.log(LISTA_HOY);
        //todos los no archivados
        buildHTMLCardsMisGrup(result.data);

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
                                                  <li class="list-group-item">An item</li>
                                                  <li class="list-group-item">A second item</li>
                                                  <li class="list-group-item">A third item</li>
                                                  <li class="list-group-item">A fourth item</li>
                                                  <li class="list-group-item">And a fifth one</li>
                                                </ul>
                                                </div>
                                                <div class="row">

                                                    <div class="col-7 col-md-12">
                                                        <p class="card-text mb-0"> 15/30 Clases</p>
                                                        <p class="card-text mb-0"> LUN MAR MIE JUE VIE</p>
                                                        <p class="card-text mb-0"> Min 80% asis 10% Calif  </p>
                                                        <p class="card-text mb-0"> 3 Retardos = 1 Falta  </p>
                                                    </div>
                                                    <div class="col-5 col-md-12">
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
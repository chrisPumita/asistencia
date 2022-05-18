$(document).ready(function() {
    consultaGrupos();
});

function consultaGrupos() {
    consutaInsc("ALL").then(
        function (result) {
            let template = ``;
            let inscripciones = result.data;
            if (inscripciones.length>0){
                inscripciones.forEach(gpo=>{
                    template += `<div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row text-center">
                                                <h5 class="card-title">${gpo.materia} ${gpo.grupo}</h5>
                                                <h6>${gpo.carrera}</h6>
                                            </div>
                                            <div class="row text-center">
                                                <ul class="list-group list-group-flush">
                                                  <li class="list-group-item">${gpo.tipo} ${gpo.nombre_periodo}</li>
                                                  <li class="list-group-item">${gpo.no_clases} Clases</li>
                                                  <li class="list-group-item">${gpo.dias}</li>
                                                  <li class="list-group-item">Asistencia Minima: ${gpo.porcentaje_min}%</li>
                                                </ul>
                                            </div>
            
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mt-3" style="display: flex;justify-content: flex-end;">
                                                        <a href="./info_grupos.php?idGrupo=${gpo.id_grupo}" type="button" class="btn btn-success btn-sm fontsizeletrabtn btn_ajustable">Más detalles</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                });
            }
            else{
                template = `<div class="alert alert-primary" role="alert">
                              Aun no te has unido a algun grupo. Pregunta a tu profesor el codigo de 
                              invitacion y agregalo <a href=""  data-bs-toggle="modal" data-bs-target="#modal-in-code">aqui.  </a>
                            </div>`;
                template_lits = "No hay grupos registrados";
            }
           $("#containerGrupos").html(template);
        }
    )
}
$(document).ready(function() {
    console.log("Mis grupos");
    consultaGrupos();
});

function consultaGrupos() {
    consutaInsc("ALL").then(
        function (result) {
            let template = ``;
            let template_lits = ``;
            let inscripciones = result.data;
            console.log(result);
            if (inscripciones.length>0){

            }
            else{
                template = `<div class="alert alert-primary" role="alert">
                              Aun no te has unido a algun grupo. Pregunta a tu profesor el codigo de 
                              invitacion y agregalo <a href=""  data-bs-toggle="modal" data-bs-target="#modal-in-code">aqui.  </a>
                            </div>`;
                template_lits = "No hay grupos registrados";
            }
       //     $("#containerBuscaPases").html(template);
         //   $("#listGrupos").html(template_lits);
        }
    )
}
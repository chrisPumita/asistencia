$(document).ready(function() {
    console.log("Async Funcions OK");
});


async function cargaPeriodos(filtro) {
    let route = "../webhook/profesor_consulta_periodos.php";
    let datos = {filtro_periodo:filtro};
    return await peticionAjax(datos,route);
}

async function cargaGruposProfe(filtro) {
    let route = "../webhook/profesor_consulta_grupos.php";
    let datos = {filtro:filtro};
    return await peticionAjax(datos,route);
}

async function cargaLista_pase_lista(grupo,action,preload) {
    let route = "../webhook/profesor_consulta_lista_grupo.php";
    let datos = {grupo:grupo, action:action,preload:preload};
    return await peticionAjax(datos,route);
}

async function busca_pase_lista(grupo,filtro,dia,idPase) {
    let route = "../webhook/profesor_consulta_paselista.php";
    let datos = {grupo:grupo, filtro:filtro,dia:dia,idPase:idPase};
    return await peticionAjax(datos,route);
}

async function actulizarperfil(data,route) {
    return await peticionAjax(datos,route);
}

//*PASE DE LISTA CON BOTONES*/
async function actionPaseLista(idPase, idAlumno,actionSet) {
    let route = "../webhook/profesor_edit_pase_lista_alum.php";
    let datos = {idPase:idPase, idAlumno:idAlumno, actionSet:actionSet};
    return await peticionAjax(datos,route);
}
//*CANCELAR PASE LISTA*/
async function cancelarPaseLista(idPase) {
    let route = "../webhook/profesor_cancel_pase_lista.php";
    let datos = {idPase:idPase};
    return await peticionAjax(datos,route);
}

async function updateNotaPaseLista(idPase,nota) {
    let route = "../webhook/profesor_update_nota_pase_lista.php";
    let datos = {idPase:idPase,nota:nota};
    return await peticionAjax(datos,route);
}

/* HISTORIAL PASES DE LISTA */
async function historialPaseLista(filtro) {
    let route = "../webhook/profesor_historia_pase_lista.php";
    let datos = {filtro:filtro};
    return await peticionAjax(datos,route);
}

async function consultaJustificantes(filtro) {
    let route = "../webhook/consulta_justificantes.php";
    let datos = {filtro:filtro};
    return await peticionAjax(datos,route);
}

/*++++++++++++++++++++++++++++++++++++
*   a l u m n o s
* ++++++++++++++++++++++++++++++++++*/

/* HISTORIAL PASES DE LISTA */
async function consutaInsc(filtro) {
    let route = "../webhook/alumno_consulta_inscripciones.php";
    let datos = {filtro:filtro};
    return await peticionAjax(datos,route);
}

/* HISTORIAL PASES DE LISTA */
async function consultaPasesListaAlumno(filtro,id) {
    let route = "../webhook/alumno_consulta_pases_lista.php";
    let datos = {filtro:filtro,id:id};
    return await peticionAjax(datos,route);
}

/**************** PETICION GENERICA AJAX **************/
async function peticionAjax(datos,route)
{
    return $.ajax(
        {
            url: route,
            type: "POST",
            data: datos,
            dataType: "json",
            cache: false,
            success: function(res){
               // console.log(res);
            },
            error: function() {
                alert("Error 500 interno de Servidor al consultar grupos");
            }
        }
    );
}

/***********  GENERADOR FECHAS ****************/
function getDateAhora() {
    let date = new Date();
    return String(date.getDate()).padStart(2, '0') + '/' + String(date.getMonth() + 1).padStart(2, '0') + '/' + date.getFullYear();
}


function filterItems(query,LIST) {
    return LIST.filter(function(el) {
        return el.dias.toLowerCase().indexOf(query.toLowerCase()) > -1;
    })
}
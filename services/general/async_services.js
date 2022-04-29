$(document).ready(function() {
    console.log("Async Funcions OK");
});


async function cargaPeriodos(filtro) {
    let route = "../webhook/profesor_consulta_periodos.php";
    let datos = {filtro_periodo:filtro};
    return await peticionAjax(datos,route);
}

async function cargaGruposProfe(filtro,dia) {
    let route = "../webhook/profesor_consulta_grupos.php";
    let datos = {filtro:filtro, dia:dia};
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
                console.log(res);
            },
            error: function() {
                alert("Error 500 interno de Servidor al consultar grupos");
            }
        }
    );
}

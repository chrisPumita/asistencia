
function generateP() {
    var pass = '';
    var str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ' +
        'abcdefghijklmnopqrstuvwxyz0123456789';

    for (i = 1; i <= 8; i++) {
        var char = Math.floor(Math.random()
            * str.length + 1);

        pass += str.charAt(char)
    }
    return pass;
}

function getServetInfo() {
    // Obtener la ruta del servidor
// Obtener la URL actual
    var wwwUrlPath = window.document.location.href;
 //   console.log("wwwUrlpath = " + wwwUrlPath);
// Obtenga el directorio después de la dirección del host,
    var pathName = window.document.location.pathname;
 //   console.log("pathName = " + pathName);
    var pos = wwwUrlPath.indexOf(pathName);
// Dirección del servidor
    var localhostPath = wwwUrlPath.substring(0, pos);
//    console.log("Dirección del servidor:" + localhostPath);
// Obtener el nombre del proyecto
    var projectName = pathName.substring(0, pathName.substr(1).indexOf("/") + 1)
 //   console.log("Nombre del árticulo:" + projectName);
// Obtener la ruta del servidor
    var servicePath = localhostPath + projectName + "/";
 //   console.log("Ruta del servidor:" + servicePath);

    return servicePath;
}

<?php
$titulo = "HOME - Profesor";
$path = "../";
include_once "./sesion_profesor.php";
?>
<!doctype html>
<html lang="en">
<head> <?php include $path."includes_general/header.php"?></head>
<body>
<div class="container-fluid">
    <div class="row"> <?php include $path."includes_general/sidebar.php"?>
        <div class="col-sm pt-0 min-vh-100 bg-blanco m-0 p-0">
            <!-- content -->
            <div class="container-fluid bg-primary">
                <div class="container p-3 text-light">
                    <div class="row">
                        <div class="col">
                            <h3>¡Hola buenas tardes <strong> <?php echo $_SESSION['name_complete']?> </strong>! </h3>
                        </div>
                        <div class="col-2 d-flex justify-content-center align-items-center">
                            <?php include "./perfil_menu.php" ;?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row pt-3">
                    <div class="col-12 col-md-7 py-3">
                        <h5 class="text-center">Asistencia General</h5>
                        <div id="chart"></div>
                    </div>
                    <div class="col-12 col-md-5 align-content-center py-3">
                        <div class="row">
                            <h5 class="text-center">Inscripcion General</h5>
                        </div>
                        <div class="row h-100">
                            <div id="circularGrapfic" class="d-flex align-content-center m-auto"></div>
                        </div>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-12 col-md-8">
                        <div class="row pt-3">
                            <h5>Seleccione un grupo para pasar lista</h5>
                            <div class="row row-cols-1 row-cols-md-3" id="containerCardGrupos">
                            </div>
                        </div>
                        <div class="row pt-3">
                            <h5>Buscar pase de lista</h5>
                                <div class="col-12 col-md-7 mb-3">
                                    <select class="form-select" aria-label="Default select example" id="selectGrupoSearch" name="selectGrupoSearch">
                                    </select>
                                </div>
                                <div class="col-7 col-md-3">
                                    <input class="w-100 form-control" type="date" id="fecha_pase_lista" name="fecha_pase_lista" value="<?php echo date("Y-m-d"); ?>">
                                </div>
                                <div class="col-5 col-md-2">
                                    <button type="button" class="btn btn-primary mb-3 w-100" onclick="buscaPaseListaxFecha();">Buscar</button>
                                </div>
                            <div id="resp"></div>
                        </div>
                        <div class="row pt-3">
                            <h5>Crear Grupo</h5>
                            <div class="row mt-2 mb-3" id="container_select_periodos">

                            </div>
                        </div>
                        <div class="row py-3">
                            <h5>Accesos rapidos</h5>
                            <div class="row">
                                <div class="col-6 col-md-3 col-sm-3 py-3">
                                    <div class="card">
                                        <div class="card-body card_cursor" data-bs-toggle="modal" data-bs-target="#modal_periodos">
                                            <h5 class="card-title text-center">
                                                <i class="fas fa-calendar-alt"></i>
                                            </h5>
                                            <h6 class="card-subtitle mb-2 text-muted text-center">Periodos</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 col-sm-3 py-3">
                                    <div class="card">
                                        <div class="card-body card_cursor">
                                            <h5 class="card-title text-center">
                                                <i class="fas fa-history"></i>
                                            </h5>
                                            <h6 class="card-subtitle mb-2 text-muted text-center">Historial</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 col-sm-3 py-3">
                                    <a href="mis_grupos.php">
                                        <div class="card">
                                            <div class="card-body card_cursor">
                                                <h5 class="card-title text-center">
                                                    <i class="fas fa-users"></i>
                                                </h5>
                                                <h6 class="card-subtitle mb-2 text-muted text-center">Mis Grupos</h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3 col-sm-3 py-3">
                                    <a href="perfil_profesor.php">
                                        <div class="card">
                                            <div class="card-body card_cursor">
                                                <h5 class="card-title text-center">
                                                    <i class="fas fa-user-cog"></i>
                                                </h5>
                                                <h6 class="card-subtitle mb-2 text-muted text-center">Perfil</h6>
                                            </div>
                                        </div>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="row">
                            <h5>Ultimos pases de lista</h5>
                            <div id="containerHistorial" style="overflow-y: scroll;height: 500px;">
                            </div>
                        </div>
                        <div class="row pt-5">
                            <h5>Justificantes por revisar</h5>
                            <div id="containerJustif"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content -->
        </div>
    </div>
</div>
<?php include_once "../includes_general/footer.php"?>
</body>
<?php
    include "../main_profesor/Modal_profesor/crear_grupo.php";
    include "../main_profesor/Modal_profesor/periodos_registrados.php";
    include "../main_profesor/Modal_profesor/vista_justificante.php";
    include $path."includes_general/js.php";
?>
<script src="../services/profesor/dashboard.js"></script>
<script src="../services/general/generador_claves.js"></script>
<script src="../assets/vendors/md5/md5.min.js"></script>

<script>

</script>
</html>
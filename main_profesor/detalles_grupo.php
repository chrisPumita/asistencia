<?php
$titulo = "Justificantes - Profesor";
$path = "../";
include_once "./sesion_profesor.php";
$id = $_GET["id_grupo"];
echo "<script> let ID_GPO = " . $id . "; </script>";
?>
<!doctype html>
<html lang="en">
<head>
    <?php include $path . "includes_general/header.php" ?>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include $path . "includes_general/sidebar.php" ?>
        <div class="col-sm pt-0 min-vh-100 bg-blanco m-0 p-0">
            <!-- content -->
            <div class="container-fluid bg-primary">
                <div class="container p-3 text-light">
                    <div class="row">
                        <div class="col-12 col-md-7 mt-1">
                            <h5 class="text-md-start text-center" style="text-align: initial;"><strong>Detalles del Grupo</strong></h5>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="row">
                                <div class="col-12 col-md-10" style="display: flex; justify-content: end;">
                                    <?php include "./perfil_menu.php"; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-3">
                <div class="row text-center">
                    <div class="col-12 col-md-12 text-center" id="tituloGrupo"> </div>
                </div>
                <div class="row py-3">
                    <div class="col-12 col-md-7 mb-3">
                        <div class="row row-cols-1 row-cols-md-12 g-4">
                            <div class="col">
                                <div class="card h-100 card_cursor">
                                    <div class="card-body" id="cardInfo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-5 mb-2">
                        <div class="row row-cols-1 row-cols-md-12 g-4">
                            <div class="col">
                                <div class="card card_cursor">
                                    <div class="card-body">
                                        <h6>Indice de asistencia</h6>
                                        <div id="circularGrapfic"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Alumnos
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Historial de Pases Lista
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row px-3 py-3" id="listContainer">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row px-3 py-3 table-responsive" id="containerHistorial">  </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once "../includes_general/footer.php"?>
</body>


<?php
include "../main_profesor/Modal_profesor/pase_de_lista.php";
include "../main_profesor/Modal_profesor/editar_grupo.php";
include "../main_profesor/Modal_profesor/reporte_individual.php";
include $path . "includes_general/js.php";
?>

<script src="../services/profesor/detalle_grupo.js"></script>
</html>
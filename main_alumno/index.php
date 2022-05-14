<?php
$titulo = "HOME - Alumno";
$path = "../";
include_once "./sesion_alumno.php";
?>
<!doctype html>
<html lang="en">
<head> <?php include $path."includes_general/header.php"?></head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include $path."includes_general/sidebar_alumno.php"?>
        <div class="col-sm pt-0 min-vh-100 bg-blanco m-0 p-0">
            <!-- content -->
            <div class="container-fluid bg-primary text-light pt-3">
                <div class="container">
                    <div class="col">
                        <h5>¡Hola buen día!  </h5>
                        <h4><?php echo $_SESSION['name_complete'] ?></h4>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="row">
                            <div class="col-12 col-md-12 ">
                                <div class="row">
                                    <div class="col-12">
                                        <h5><strong>¿Què deseas hacer?</strong></h5>
                                        <div class="row">
                                            <div class="col-12 col-md-4 mb-3">
                                                <div class="card">
                                                    <div class="card-body card_cursor" data-bs-toggle="modal" data-bs-target="#modal-in-code">
                                                        <h5 class="card-title text-center">
                                                            <i class="fas fa-key"></i>
                                                        </h5>
                                                        <h6 class="card-subtitle mb-2 text-muted text-center">Ingresar Còdigo</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 mb-3">
                                                <a href="./mis_grupos.php">
                                                    <div class="card" >
                                                        <div class="card-body card_cursor">
                                                            <h5 class="card-title text-center">
                                                                <i class="fas fa-users"></i>
                                                            </h5>
                                                            <h6 class="card-subtitle mb-2 text-muted text-center">Mis Grupos</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-12 col-md-4 mb-3">
                                                <a href="./historial_grupos.php">
                                                    <div class="card">
                                                        <div class="card-body card_cursor">
                                                            <h5 class="card-title text-center">
                                                                <i class="fas fa-history"></i>
                                                            </h5>
                                                            <h6 class="card-subtitle mb-2 text-muted text-center">Historial</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <h5><strong>Ultimos pases de lista</strong></h5> <!-- row pt-3 --> <!-- "col-12 col-md-9" -->
                                    <div id="containerPasesLista"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <h5><strong> Buscar pase de lista</strong></h5>
                            <div class="col-12" id="containerBuscaPases">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="row">
                            <h5><strong>Mis Grupos</strong></h5>
                            <div class="col" >
                                <ul class="list-group list-group-flush" id="listGrupos">
                                </ul>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <h5><strong>Justificantes recientes</strong></h5>
                            <div id="containerJustificantes"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include_once "../includes_general/footer.php";
    include_once "./modal_alumno/modal-invitacion.php";
?>

</body>
<?php
include "../main_alumno/modal_alumno/subir_justificante.php";
include "../main_alumno/modal_alumno/vista_justificante.php";
include $path."includes_general/js.php";
?>

<script src="../services/alumno/home.js"></script>

</html>


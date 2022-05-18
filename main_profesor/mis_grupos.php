<?php
$titulo = "GRUPOS - Profesor";
$path = "../";
include_once "./sesion_profesor.php";
?>

<!doctype html>
<html lang="en">
<head>
    <?php include $path."includes_general/header.php"?>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include $path."includes_general/sidebar.php"?>
        <div class="col-sm pt-0 min-vh-100 bg-blanco m-0 p-0">
            <!-- content -->
            <div class="container-fluid bg-primary"> 
                <div class="container p-3 text-light">
                    <div class="row">
                        <div class="col-12 col-md-5">
                            <h3>Mis grupos</h3>
                        </div>
                        <div class="col-12 col-md-7">
                            <div class="row">
                                <div class="col-8 col-md-10" style="display: flex; justify-content: flex-end;">
                                    <div class="">
                                         <div class="row">
                                            <div class="col-1" style="display: flex;align-items: center;">
                                                <span class="position-absolute mt-3 p-2 end-1 translate-middle p-2 bg-success border border-light rounded-circle">
                                                    <span class="visually-hidden">New alerts</span>
                                                </span>
                                            </div>
                                            <div class="col text-light mt-2">
                                                <h5 class="">10 Grupos activos</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 col-md-2" style="display: flex;justify-content: flex-end;">
                                    <?php include "./perfil_menu.php" ;?>
                                </div> 
                            </div> 
                        </div>
                    </div>  
                </div>
            </div>

            <div class="container">
                <div class="row d-none">
                    <div class="col-12 p-3">
                        <div class="row">
                            <h4><strong>Periodos Registrados</strong></h4>
                            <div class="col">
                                <div class="row">
                                    <div class="col-3 col-md-1 creargrupo_center mb-3">
                                        Periodo:
                                    </div>
                                    <div class="col-9 col-md-9 mb-3">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Semestre 2022-1 Ene-Ago</option>
                                          <option value="1">One</option>
                                          <option value="2">Two</option>
                                          <option value="3">Three</option>
                                      </select>
                                    </div>

                                    <div class="col-12 col-md-2">
                                        <a href="historial_grupos.php">
                                            <button type="button" class="btn btn-primary btn_ajustable">Historial</button>
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-3">
                                <div class="col-12 col-md-6">
                                    <strong>Semestre 2022-1</strong>
                                    <p>Del 12 de Ago 2022 al 30 de Dic 2022</p>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="btn btn-warning btn_ajustable" data-bs-toggle="modal" data-bs-target="#modal_edit_periodo">Editar periodo</button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-danger btn_ajustable">Terminar periodo</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <hr>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row" style="display: flex;justify-content: center;">
                            <h4><strong>Grupos de hoy</strong></h4>
                            <div class="row" id="containerGruposHoy"></div>
                        </div>
                        <hr>
                        <div class="row" style="display: flex;justify-content: center;">
                            <h4><strong> Otros grupos de la semana</strong></h4>
                            <div class="row" id="containerGruposAll"></div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>
<?php include_once "../includes_general/footer.php"?>
</body>

<?php
    include "../main_profesor/Modal_profesor/edita_periodo.php";
    include $path."includes_general/js.php";
?>

<script src="../services/profesor/mis_grupos.js"></script>
</html>
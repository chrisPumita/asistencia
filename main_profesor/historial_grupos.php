<?php
$titulo = "HOME - Profesor";
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
                            <h3>Grupos creados: 29</h3>
                        </div>
                        <div class="col-12 col-md-7">
                            <div class="row">
                                <div class="col-8 col-md-12" style="display: flex; justify-content: flex-end;">
                                    <div class="">
                                     <div class="row">
                                        <div class="col-1" style="display: flex;align-items: center;">
                                            <span class="position-absolute mt-3 p-2 end-1 translate-middle p-2 bg-success border border-light rounded-circle">
                                                <span class="visually-hidden">New alerts</span>
                                            </span>
                                        </div>
                                        <div class="col text-light">
                                            <h5 class="">10 Grupos activos</h5>
                                        </div>
                                        <div class="col">
                                            <?php include "./perfil_menu.php" ;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>  

                </div>
            </div>

            <div class="container">
                <div class="mt-3">
                    <H4><strong>Historial de Grupos</strong></H4>
                </div>
                <div class="row">
                    <div class="col-3 col-md-1" style="display: flex;align-items: center;">
                        <div class="d-flex aling-items-center">
                            <h6>  Periodo:  </h6> 
                        </div>
                    </div>
                    <div class="col-9 col-md-11">
                        <select class="form-select" aria-label="Default select example">
                          <option selected>Todos</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                      </select>
                  </div>
                </div>
            </div>

            
                <div class="col-12">
                <div class="mb-3 p-4">
                    <table class="table table-bordered order-table display nowrap table-responsive mt-3" id="tableEquiposA">
                        <thead>
                        <tr class="text-center">
                            <th>CARRERA</th>
                            <th>MATERIA</th>
                            <th>GRUPO</th>
                            <th>% ASIS</th>
                            <th>% FALTAS</th>
                            <th>% RETAR</th>
                            <th>PERIODO</th>
                            <th>ALUMNOS</th>
                            <th>ESTATUS</th>
                            <th>DETALLES</th>
                            <th>REPORTE</th>
                        </tr>
                        </thead>
                        <tbody id="">
                        <tr class="text-center">
                            <td data-label="">Informática</td>
                            <td data-label="">Introducción a la informática</td>
                            <td data-label="">2210</td>
                            <td data-label="">70%</td>
                            <td data-label="">25%</td>
                            <td data-label="">5%</td>
                            <td data-label="">semestre 2022-2</td>
                            <td data-label="">34 inscritos</td>
                            <td data-label="">Activo</td>
                            <td data-label="">
                                <button type="button" class="btn btn-info">
                                    <i class="fas fa-info-circle" style="color: white;"></i>
                                    
                                </button>
                            </td>
                            <td data-label="">
                                <button type="button" class="btn btn-secondary">
                                    <i class="fas fa-print" style="color: white;"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="text-center">
                            
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            

            
        </div>
    </div>
</div>
<?php include_once "../includes_general/footer.php"?>
</body>
<?php include $path."includes_general/js.php"?>

<script src="services/template.js"></script>
<!-- Initialize Swiper -->
</html>
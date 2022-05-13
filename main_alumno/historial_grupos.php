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
                        <h5>Historial de grupos inscritos </h5>
                        <hr>
                        <!--<strong> <?php echo $_SESSION['name_complete']?> </strong>! -->
                    </div>
                </div>
            </div>
            <div class="container">
            		<div class="col-12">
                	<div class="mb-3 p-4">
                		<h4><strong>Asistencia por grupo</strong></h4>
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
<?php

include $path."includes_general/js.php";
?>

</html>

			
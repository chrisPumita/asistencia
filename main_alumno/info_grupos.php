<?php
$titulo = "INFORMACION - Alumno";
$path = "../";

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
                        <h4>Revision de asistencia de grupo</h4>
                        <hr>
                    </div>
                </div>
            </div>
            <!-- content -->
            <div class="container">
                <div class="row pt-3">
                    <div class="col-12 col-md-5 py-3">
                        <h5><strong>Reporte de Asistencia </strong></h5>
                        <div class="card class_card" role="button">
									<div class="card-body">
                                        <div class="row">
                                            <h6 class="card-title" >GRUPO {No_Grupo}</h6>
                                            <p style="line-height: 30%"><strong>Carrera {NombreCarrera}</strong></p>
                                            <i style="line-height: 60%">Curso {NombreCurso}</i>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6 pt-4">
                                            	<p class="card-text " style="line-height: 30%"> Min. Asistencias 80%</p>
                                            	<p class="card-text" style="line-height: 30%"> Valor sobre calificación: 10%</p>
                                            	<p class="card-text" style="line-height: 30%"> 3 Retardos = 1 Falta  </p> 
                                            </div>
                                            <div class="col-12 col-md-6 pt-4 text-center" style="color:dimgray;"> 
                                            	<p style="line-height: 50%" >DIAS DE CLASE</p>
                                            	<p>LUN MAR MIE JUE VIE</p>
                                            </div>
                                        </div>
										<div class="row">
                                        	<div class="col-12 col-md-6 pt-5">
                                            	<p class="card-text" style="line-height: 30%"> Valor sobre calificación: 10%</p>
                                            	<p class="card-text" style="line-height: 30%"> 3 Retardos = 1 Falta  </p> 
                                            </div>            

                                        </div>
									</div>
                        </div> 
                    </div>
                    <div class="col-12 col-md-5 align-content-center py-3">
                        <div class="row">
                            <div id="circularGrapfic" class="d-flex align-content-center m-auto"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-2">
                    <div class="row py-3 mt-3 p-2" style="justify-content: center;">
                        <div class="row">
                            <div class="card card-body">
                                <h4 class="card-title text-center">Revisión final</h4>
                                <div class="text-center">
                                    <h5 class="">Asistencias</h5>
                                    <h5 class="asfalre" style="color: green;">30</h5>
                                    <h6 class="">Faltas</h6>
                                    <h5 class="asfalre" style="color: red;">30</h5>
                                    <h6 class="">Retardos</h6>
                                    <h5 class="asfalre" style="color: orange;">30</h5>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="row ">
                    <div class="col-12 ">
                        <div class="row ">
                            <h5>Pases de lista realizados</h5>
                	<div class="mt-3 p-2">
                    <table class="table table-bordered order-table display nowrap table-responsive " id="paseRealizado">
                        
                        <thead>
                        <tr class="text-center">
                            <th>FECHA</th>
                            <th>INICIO</th>
                            <th>ASISTENCIA</th>
                            <th>JUSTIFICANTE</th>
                        </tr>
                        </thead>
                        <tbody id="">
                        <tr class="text-center">
                            <td data-label="">1 de Marzo 2022</td>
                            <td data-label="">08:13</td>
                            <td data-label="">Presente</td>
                            <td data-label="">Ver</td>
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
        </div>
    </div>
</div>
</body>
<?php
include $path."includes_general/js.php";
?>
<script src="../assets/vendors/md5/md5.min.js"></script>
<script>

    var options = {
        series: [44, 55, 13],
        chart: {
            width: 380,
            type: 'pie',
        },
        labels: ['ASISTENCIAS', 'FALTAS', 'RETARDOS'],
        colors: ['#15850d', '#ce2121', '#dbea1a'],
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };
    var chart = new ApexCharts(document.querySelector("#circularGrapfic"), options);
    chart.render();
</script>

</html>

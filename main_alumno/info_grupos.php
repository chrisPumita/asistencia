<?php
$titulo = "INFORMACION - Alumno";
$path = "../";
include_once "./sesion_alumno.php";
$id_gpo =$_GET['idGrupo'];
if (!isset($id_gpo) || $id_gpo == "")
    header("Location:./");
echo '<script>let ID_GPO = '.$id_gpo.';</script>';
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
                    <div class="col-12 col-md-4 col-sm-12 py-3">
                        <h5><strong>Informacion del grupo</strong></h5>
                        <div class="card" id="cardInfo"></div>
                    </div>
                    <div class="col-12 col-md-5 col-sm-6 align-content-center py-3">
                        <div class="row">
                            <h5><strong>Estado de asistencias</strong></h5>
                            <div id="circularGrapfic" class="d-flex align-content-center m-auto"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-sm-6">
                        <div class="row py-3 mt-3 p-2 text-center">
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
                <div class="row ">
                    <div class="col-12 ">
                        <div class="row ">
                            <h5>Pases de lista realizados</h5>
                            <div class="mt-3 p-2" id="containerTbl">

                            </div>
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
include $path."includes_general/js.php";
?>
<script src="../services/alumno/info_gpo.js"></script>

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

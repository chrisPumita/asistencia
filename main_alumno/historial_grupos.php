<?php
$titulo = "HOME - Alumno";
$path = "../";
include_once "./sesion_alumno.php";
?>
<!doctype html>
<html lang="en">
<head> <?php include $path . "includes_general/header.php" ?></head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include $path . "includes_general/sidebar_alumno.php" ?>
        <div class="col-sm pt-0 min-vh-100 bg-blanco m-0 p-0">
            <!-- content -->
            <div class="container-fluid bg-primary text-light pt-3">
                <div class="container">
                    <div class="col py-2">
                        <h5>Historial de grupos inscritos </h5>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-12">
                    <div class="mb-3 p-4">
                        <h4><strong>Asistencia por grupo</strong></h4>
                        <div class="col" id="containerTbl"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "../includes_general/footer.php" ?>
</body>
<?php
include $path . "includes_general/js.php";
?>
<script src='https://cdn.jsdelivr.net/lodash/4.17.2/lodash.min.js'></script>
<script src="../services/alumno/historial.js"></script>
</html>


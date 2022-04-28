<?php
$titulo = "HOME - Alumno";
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
            <div class="container-fluid bg-primary">
                <div class="container">
                    <h1>HOLA</h1>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="row pt-3">
                            <h5>Seleccione un grupo para pasar lista</h5>
                            <div class="row row-cols-1 row-cols-md-3">
                                <?php for($i = 0; $i <4; $i++){ ?>
                                    <div class="col-3 pb-3">
                                        <div class="card class_card" role="button">

                                            <div class="card-body">
                                                <div class="row text-center">
                                                    <h5 class="card-title">GRUPO {NoGrupo}</h5>
                                                    <p>Carrera {NombreCarrera}</p>
                                                    <p>Curso {NombreCurso}</p>
                                                </div>
                                                <div class="row">
                                                    <p class="card-text "> 15/30 Clases</p>
                                                    <p class="card-text "> LUN MAR MIE JUE VIE</p>
                                                    <p class="card-text "> Min 80% asis 10% Calif  </p>
                                                    <p class="card-text "> 3 Retardos = 1 Falta  </p>
                                                </div>

                                                <div class="row">
                                                    <div class="" style="display: flex;justify-content: flex-end;">
                                                        <button type="button" class="btn btn-success btn-sm">Màs detalles</button>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="row pt-3">
                            <h5>Terminados</h5>
                            <div class="row row-cols-1 row-cols-md-3">
                                <?php for($i = 0; $i <4; $i++){ ?>
                                    <div class="col-3 pb-3">
                                        <div class="card class_card" role="button">

                                            <div class="card-body">
                                                <span class="position-absolute end-0 me-3 p-2 bg-success border border-light rounded-circle">
                                                    <span class="visually-hidden">New alerts</span>
                                                </span>
                                                <div class="row text-center">
                                                    <h5 class="card-title">GRUPO {NoGrupo}</h5>
                                                    <p>Carrera {NombreCarrera}</p>
                                                    <p>Curso {NombreCurso}</p>
                                                </div>
                                                <div class="row">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">An item</li>
                                                        <li class="list-group-item">A second item</li>
                                                        <li class="list-group-item">A third item</li>
                                                        <li class="list-group-item">A fourth item</li>
                                                        <li class="list-group-item">And a fifth one</li>
                                                    </ul>
                                                </div>

                                                <div class="row">
                                                    <div class="">
                                                        <button type="button" class="btn btn-success btn-sm">Màs detalles</button>
                                                        <button type="button" class="btn btn-warning btn-sm" >Archivar</button>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- content -->
        </div>
    </div>
</div>
</body>
<?php
include $path."includes_general/js.php";
?>

</html>
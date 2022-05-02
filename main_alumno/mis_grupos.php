<?php
$titulo = "Mis Grupos - Alumno";
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
                        <h4>Mis Grupos  </h4>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="row pt-3">
                            
                            <div class="row row-cols-1 row-cols-md-3">
                                <?php for($i = 0; $i <3; $i++){ ?>
                                    <div class="col-12 col-md-3 mb-2 pb-3">
                                        <div class="card class_card" role="button">

                                            <div class="card-body">
                                                <div class="row text-center">
                                                    <h5 class="card-title">GRUPO {No_Grupo}</h5>
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
                                    <div class="col-12 col-md-1 pb-3" style="display: flex;justify-content: center;">

                                                <button type="button" class="btn btn-success btn_ajustable" style="display: flex;align-content: center;justify-content: center;align-items: center;">
                                                    <i class="fas fa-angle-right"></i>
                                                </button>

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
                                    <div class="col-12 col-md-3 mb-2">
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
                                                        <li class="list-group-item">15/30 Clases</li>
                                                        <li class="list-group-item">LUN, MAR, MIE, JUE</li>
                                                        <li class="list-group-item">Min 80% asis 10% calif</li>
                                                        <li class="list-group-item">3 Retardos = 1 Falta</li>
                                                    </ul>
                                                </div>

                                                <div class="row">
                                                        <div class="col">
                                                            <div class="mt-3" style="display: flex;justify-content: flex-start;">
                                                                <button type="button" class="btn btn-warning btn-sm fontsizeletrabtn btn_ajustable">Archivar</button>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mt-3" style="display: flex;justify-content: flex-end;">
                                                                <button type="button" class="btn btn-success btn-sm fontsizeletrabtn btn_ajustable">Más detalles</button>
                                                            </div>
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
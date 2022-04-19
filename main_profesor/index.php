<?php
$titulo = "HOME - Profesor";
$path = "../"
?>

<!doctype html>
<html lang="en">
<head>
    <?php include $path."includes_general/header.php"?>

</head
<body>
<div class="container-fluid">
    <div class="row">
        <?php include $path."includes_general/sidebar.php"?>
        <div class="col-sm pt-0 min-vh-100 bg-blanco">
            <!-- content -->
            <div class="container-fluid bg-primary">
                <div class="container p-3 text-light">
                    <h3>Hola buenas tardes</h3>
                    <h2>Juan Perez</h2>
                </div>
            </div>
            <div class="container">
                <div class="row pt-3">
                    <div class="col-12 col-md-8">
                        <h5>Asistencia General</h5>
                        <img src="../assets/img/Captura.JPG" width="450" alt="">
                    </div>
                    <div class="col-12 col-md-4">
                        <h5>Inscripcion General</h5>
                        <img src="../assets/img/CUYO.png" width="200" alt="">
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col col-md-8">
                        <h5>Seleccione un grupo para pasar lista</h5>
                        <div class="row row-cols-1 row-cols-md-3 g-4">

                            <?php for($i = 0; $i<4; $i++){ ?>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">GRUPO {NoGrupo}</h5>
                                        <p class="card-text">{NombreMateria}</p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <h5>Ultimos pases de lista</h5>
                        <div class="list-group">
                            <?php for($i = 0; $i<4; $i++){ ?>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">{Grupo}</h5>
                                        <span class="badge bg-warning">Hoy</span>
                                    </div>
                                    <p class="mb-1">{Materia}</p>
                                    <small class="text-muted">{11 de Abril de 2022}</small>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-12 col-md-8">
                        <div class="row py-3">
                            <h5>Buscar pase de lista</h5>
                            <form class="row g-3">
                                <div class="col-12 col-md-7">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Grupo 7205 Informática - Analisis de sistemas</option>
                                        <option value="1">1</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select></div>
                                <div class="col-7 col-md-3">
                                    <input class="w-100 form-control" type="date" id="start" name="trip-start"
                                           value="2018-07-22"
                                           min="2018-01-01" max="2018-12-31">
                                </div>
                                <div class="col-5 col-md-2">
                                    <button type="submit" class="btn btn-primary mb-3 w-100">Ver</button>
                                </div>
                            </form>
                        </div>
                        <div class="row py-3">
                            <h5>Accesos rapidos</h5>
                            <div class="row">
                                <div class="col-6 col-md-3 col-sm-3 py-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title text-center" ><i class="fab fa-whatsapp"></i></h5>
                                            <h6 class="card-subtitle mb-2 text-muted text-center">Periodos</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 col-sm-3 py-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title text-center" ><i class="fab fa-whatsapp"></i></h5>
                                            <h6 class="card-subtitle mb-2 text-muted text-center">Periodos</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 col-sm-3 py-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title text-center" ><i class="fab fa-whatsapp"></i></h5>
                                            <h6 class="card-subtitle mb-2 text-muted text-center">Periodos</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 col-sm-3 py-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title text-center" ><i class="fab fa-whatsapp"></i></h5>
                                            <h6 class="card-subtitle mb-2 text-muted text-center">Periodos</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-4" >
                        <h5>justificantes por revisar</h5>
                        <div class="list-group">
                            <?php for($i = 0; $i<4; $i++){ ?>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">{Nombre alumno}</h5>
                                        <span class="badge bg-danger">{Grupo}</span>
                                    </div>
                                    <p class="mb-1">{Materia}</p>
                                    <small class="text-muted">{11 de Abril de 2022}</small>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content -->
        </div>
    </div>
</div>
</body>

<?php include $path."includes_general/js.php"?>

<script src="services/template.js"></script>
<!-- Initialize Swiper -->
</html>
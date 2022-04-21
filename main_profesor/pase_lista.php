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
                <div class="col-12 col-md-8">
                    <div class="row py-3">
                        <div class="card mt-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="col-2 ">
                                                <img src="../assets/img/defaultAvatar.webp" alt="Avatar" class="avatar">
                                            </div>
                                            <div class="col-10 justify-content-center">
                                                <h6><strong>NOMBRE DEL ALUMNO</strong></h6>
                                                <p class="m-0">
                                                    <i class="fas fa-times-circle"></i>
                                                    <strong>Falta</strong> <span class="text-muted">Faltas acumuladas</span>
                                                </p>
                                                <div class="row">
                                                    <p>
                                                        <i class="fas fa-times-circle"></i>
                                                        <strong>Falta justificada</strong>
                                                        <button type="button" class="btn btn-danger btn-sm">VER</button>
                                                    </p>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-4 d-flex align-items-center justify-content-center">
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <button type="button" class="btn btn-success">Presente</button>
                                            <button type="button" class="btn btn-danger">Falta</button>
                                            <button type="button" class="btn btn-warning">Retardo</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-body">
                                  <span class="position-absolute top-3 end-0 translate-middle p-2 bg-danger border border-light rounded-circle">
    <span class="visually-hidden">New alerts</span>
  </span>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-2 d-flex justify-content-center align-items-center">
                                                <img src="../assets/img/defaultAvatar.webp" alt="Avatar" class="avatar">
                                            </div>
                                            <div class="col-6 justify-content-center">
                                                <h6><strong>NOMBRE DEL ALUMNO</strong></h6>
                                                <p class="m-0">
                                                    <i class="fas fa-times-circle"></i>
                                                    <strong>Falta</strong> <span class="text-muted">Faltas acumuladas</span>
                                                </p>
                                                <div class="row">
                                                    <p>
                                                        <i class="fas fa-times-circle"></i>
                                                        <strong class="small">Justificada</strong>
                                                        <button type="button" class="btn btn-danger btn-sm">VER</button>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-4 col-md-4 d-block align-items-center justify-content-center d-xl-flex">
                                                <button type="button" class="btn btn-success btn-sm me-3 btnAsist mb-1">Presente</button>
                                                <button type="button" class="btn btn-danger btn-sm w-auto me-3 btnAsist mb-1">Falta</button>
                                                <button type="button" class="btn btn-warning  btn-sm w-auto me-3 btnAsist">Retardo</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
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

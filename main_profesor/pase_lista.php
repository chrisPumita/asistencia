<?php
$titulo = "HOME - Profesor";
$path = "../"
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
        <div class="col-sm pt-0 min-vh-100 bg-blanco">
            <!-- content -->
            <div class="container-fluid bg-primary">
                <!--
                <div class="container p-3 text-light">
                    <h3>Hola buenas tardes</h3>
                    <h2>Juan Perez</h2>
                </div> -->
                <div class="row text-light">
                    <div class="col-12 col-md-5">
                        <div class="p-3">
                            <h4>Pase de Lista</h4>
                            <h3 class="asfalre mt-2">GRUPO 7117</h3>
                            <h4>Introducción a la informática</h4>
                        </div>
                        
                    </div>
                    <div class="col-12 col-md-7">
                        <div class="row">
                            <div class="col-6 col-md-5">
                                <div class="p-3">
                                    <h4>{fecha y hora actual}</h4>
                                    <button type="button" class="btn btn-danger btn-sm btn-lg-5">Cancelar pase de lista</button>
                                </div>
                            </div>

                            
                            <div class="col-6 col-md-7 d-flex justify-content-center" style="align-items: center;">
                                <div class="p-3">

                                    <div class="card" style="width: 120px;">
                                      <div class="card-body">
                                         <div class="row">
                                            <div class="col-1" style="display: flex;align-items: center;">
                                                <span class="position-absolute mt-3 p-2 end-1 translate-middle p-2 bg-success border border-light rounded-circle">
                                                    <span class="visually-hidden">New alerts</span>
                                                </span>
                                            </div>
                                            <div class="col text-dark">Activo</div>
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
                <div class="row pt-3">
                    <div class="col-12 col-md-9">
                        <div class="row py-3">
                            <?php for($i = 0; $i<5; $i++){ ?>
                            <div class="card mt-3">
                                <div class="card-body">
                                    <!--
                                  <span class="position-absolute top-3 end-0 translate-middle p-2 bg-danger border border-light rounded-circle">
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                            -->

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
                                                <button type="button" class="btn btn-warning btn-sm w-auto me-3 btnAsist">Retardo</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                    <hr>
                </div>


                <div class="col-12 col-md-3">
                    <div class="row py-3 mt-3 p-2" style="justify-content: center;">
                        <div class="row">
                            <div class="card card-body">
                                <h4 class="card-title">Revisión final</h4>
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

                        <div class="row py-4">
                            <div class="card card-body">
                                <h4 class="card-title">Notas</h4>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Agregar una nota adicional..." style="height: 200px;"></textarea>
                                <button type="button" class="btn btn-primary mt-3">Actualizar</button>
                            </div>
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

<?php include $path."includes_general/js.php"?>

<script src="services/template.js"></script>
<!-- Initialize Swiper -->
</html>

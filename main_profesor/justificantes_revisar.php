<?php
$titulo = "Justificantes - Profesor";
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
                            <h3>Justificantes por Revisar</h3>
                        </div>
                        <div class="col-12 col-md-7">
                            <div class="row">
                                <div class="col-8 col-md-10" style="display: flex; justify-content: end;">
                                    <div class="">
                                         <div class="row">
                                            <div class="col-1" style="display: flex;align-items: center;">
                                                <span class="position-absolute mt-3 p-2 end-1 translate-middle p-2 bg-warning border border-light rounded-circle">
                                                    <span class="visually-hidden">New alerts</span>
                                                </span>
                                            </div>
                                            <div class="col text-light mt-2">
                                                <h5 class="">3 pendientes</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 col-md-2" style="display: flex;justify-content: flex-end;">
                                    <?php include "./perfil_menu.php" ;?>
                                </div> 
                            </div> 
                        </div>
                    </div>  
                </div>
            </div>

            <div class="container py-3">
                <div class="row">
                    <h5><strong>Revise el justificante, este estara disponible durante el periodo de fechas</strong></h5>
                    <?php for($i = 0; $i<4; $i++){ ?> 
                    <div class="col-12 col-md-4 mb-3">
                        <div class="row row-cols-1 row-cols-md-12 g-4">
                            <div class="col">
                                <div class="card h-100 card_cursor">
                                    <div class="card-body" data-bs-toggle="modal" data-bs-target="#modal_vista_justificante">
                                        <div class="row">
                                            <div class="col-2 d-flex justify-content-center align-items-center">
                                                <i class="far fa-file-pdf" style="height: 80px;width: 40px;"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1">{Nombre alumno}</h5>
                                                    <span class="position-absolute end-0 me-3 p-2 badge rounded-pill bg-warning" style="align-self: end;top: 17px;">Pendiente</span>
                                                </div>
                                                <div class="card-text text-muted">
                                                    {Nombre de la materia} <br>
                                                    {Fecha en la que se subio}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <div class="row py-3">
                    <h5><strong>Justificantes revisados</strong></h5>
                    <?php for($i = 0; $i<4; $i++){ ?> 
                    <div class="col-12 col-md-4 mb-3">
                        <div class="row row-cols-1 row-cols-md-12 g-4">
                            <div class="col">
                                <div class="card h-100 card_cursor">
                                    <div class="card-body" data-bs-toggle="modal" data-bs-target="#modal_vista_justificante">
                                        <div class="row">
                                            <div class="col-2 d-flex justify-content-center align-items-center"">
                                                <i class="far fa-file-pdf" style="height: 80px;width: 40px;"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1">{Nombre alumno}</h5>
                                                    <span class="position-absolute end-0 me-3 p-2 badge rounded-pill bg-success" style="align-self: end;top: 17px;">Revisado</span>
                                                </div>
                                                <div class="card-text text-muted">
                                                    {Nombre de la materia} <br>
                                                    {Fecha en la que se subio}
                                                </div>
                                            </div>
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
<?php include_once "../includes_general/footer.php"?>
</body>


<?php
    include "../main_profesor/Modal_profesor/vista_justificante.php";
    include $path."includes_general/js.php";
?>

    
<!-- Initialize Swiper -->
</html>
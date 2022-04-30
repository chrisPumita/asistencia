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
            <div class="container-fluid bg-primary text-light pt-3">
                <div class="container">
                    <div class="col">
                        <h5>¡Hola buenas tardes!  </h5>
                        <h4>Juan Perez  </h4>
                        <hr>
                        <!--<strong> <?php echo $_SESSION['name_complete']?> </strong>! -->
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row py-3">
                    <div class="row">
                        <div class="col-6 col-md-3 col-sm-3 py-3">
                            <div class="card">
                                <div class="card-body card_cursor" data-bs-toggle="modal" data-bs-target="#modal_ingresar_codigo">
                                    <h5 class="card-title text-center">
                                        <i class="fas fa-key"></i>
                                    </h5>
                                    <h6 class="card-subtitle mb-2 text-muted text-center">Ingresar Còdigo</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-sm-3 py-3">
                            <div class="card">
                                <div class="card-body card_cursor">
                                    <h5 class="card-title text-center">
                                        <i class="fas fa-users"></i>
                                    </h5>
                                    <h6 class="card-subtitle mb-2 text-muted text-center">Mis Grupos</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-sm-3 py-3">
                            <div class="card">
                                <div class="card-body card_cursor">
                                    <h5 class="card-title text-center">
                                        <i class="fas fa-history"></i>
                                    </h5>
                                    <h6 class="card-subtitle mb-2 text-muted text-center">Historial</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <h5>Justificantes recientes</h5>
                            <div class="list-group" data-bs-toggle="modal" data-bs-target="#Modal_PDF"> 
							<?php for($i = 0; $i<2; $i++){ ?>
								<a href="#" class="list-group-item list-group-item-action ">
								<i class="far fa-file-pdf"></i>
						        <div class="d-flex justify-content-between">
						        	
							        <h6 b class="mb-1">{Nombre Alumnoo}</h6>
							        <span class="badge bg-danger ">Revisado</span>
							    </div>
							    <p class="mb-1">{Materia}</p>
							    <small class="text-muted">Subido el {11 de Abril de 2022}</small>
						        </a> 
						    <?php } ?> 
							</div>					
                        </div>
                    </div>
                </div>
            </div>
            <!-- content -->
            <div class="container">
                <div class="row pt-3">
                    <div class="col-12 col-md-9">
                        <div class="row py-3">
                            <?php for($i = 0; $i<4; $i++){ ?>
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
                                                    <div class="col-1 d-flex justify-content-center align-items-center">
                                                        <img src="../assets/img/close.png" alt="Avatar" class="avatar">
                                                    </div>
                                                    <div class="col-5 justify-content-center">
                                                        <h6><strong>{Nombre alumno}</strong></h6>
                                                        <h7><strong>{Carrera}{Materia}</strong></h7>
                                                    </div>
                                                    <div class="col-3 justify-content-center">
                                                        <h6><strong>{Fecha}</strong></h6>
                                                        <h7><strong>a las {Hora}</strong></h7>
                                                    </div>

                                                    <div class="col-3 col-md-3 d-block align-items-center justify-content-center d-xl-flex">
                                                        <button type="button" class="btn btn-danger mb-3 w-70" data-bs-toggle="modal" data-bs-target="#modal_justificante">Subir justificante</button>
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
                </div>
                <div class="row pt-3">
                    <h5>Buscar pase de lista</h5>
                    <form class="row">
                        <div class="col-12 col-md-7">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Grupo 7205 Informática - Analisis de sistemas</option>
                                <option value="1">1</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-7 col-md-3">
                            <input class="w-100 form-control" type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
                        </div>
                        <div class="col-5 col-md-2">
                            <button type="submit" class="btn btn-primary mb-3 w-100">Ver</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
</body>
<?php
include "../main_alumno/modal_alumno/subir_justificante.php";
include "../main_alumno/modal_alumno/vista_justificante.php";
include $path."includes_general/js.php";
?>

</html>


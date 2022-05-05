<?php
$titulo = "GRUPOS - Profesor";
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
        <div class="col-sm pt-0 min-vh-100 bg-blanco m-0 p-0">
            <!-- content -->
            <div class="container-fluid bg-primary"> 
                <div class="container p-3 text-light">
                    <div class="row">
                        <div class="col-12 col-md-5">
                            <h3>Mis grupos</h3>
                        </div>
                        <div class="col-12 col-md-7">
                            <div class="row">
                                <div class="col-8 col-md-10" style="display: flex; justify-content: flex-end;">
                                    <div class="">
                                         <div class="row">
                                            <div class="col-1" style="display: flex;align-items: center;">
                                                <span class="position-absolute mt-3 p-2 end-1 translate-middle p-2 bg-success border border-light rounded-circle">
                                                    <span class="visually-hidden">New alerts</span>
                                                </span>
                                            </div>
                                            <div class="col text-light mt-2">
                                                <h5 class="">10 Grupos activos</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 col-md-2" style="display: flex;justify-content: flex-end;">
                                    <div class="dropdown">
                                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="menuPerfil" data-bs-toggle="dropdown" aria-expanded="false">
                                            <!-- IMAGEN CON SESIÓN 
                                            <img src=" <?php echo $_SESSION['avatar'] ?>" alt="Avatar" class="avatar">
                                            -->
                                            <img src="
                                    https://holatelcel.com/wp-content/uploads/2020/12/foto-perfil-whatsapp-.png" alt="Avatar" class="avatar">
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="menuPerfil">
                                            <li>
                                                <a class="dropdown-item" href="perfil_profesor.php">Perfil</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal_nvopass">Cambiar contraseña</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Acerca de</a>
                                            </li>
                                            <hr>
                                            <li>
                                                <a class="dropdown-item" href="../c_logout.php">Salir</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> 
                            </div> 
                        </div>
                    </div>  
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-9 p-3">
                        <div class="row">
                            <h4><strong>Grupos de hoy</strong></h4>
                            <div class="col">
                                <div class="row">
                                    <div class="col-3 col-md-1 creargrupo_center mb-3">
                                        Periodo:
                                    </div>
                                    <div class="col-9 col-md-9 mb-3">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Semestre 2022-1 Ene-Ago</option>
                                          <option value="1">One</option>
                                          <option value="2">Two</option>
                                          <option value="3">Three</option>
                                      </select>
                                    </div>

                                    <div class="col-12 col-md-2">
                                        <a href="historial_grupos.php">
                                            <button type="button" class="btn btn-primary btn_ajustable">Historial</button>
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-3">
                                <div class="col-12 col-md-6">
                                    <strong>Semestre 2022-1</strong>
                                    <p>Del 12 de Ago 2022 al 30 de Dic 2022</p>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="btn btn-warning btn_ajustable" data-bs-toggle="modal" data-bs-target="#modal_edit_periodo">Editar periodo</button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-danger btn_ajustable">Terminar periodo</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <hr>
                        <div class="row">
                            <?php for($i = 0; $i <3; $i++){ ?>
                                <div class="col-12 col-md-4 pb-3">
                                    <div class="row">
                                        <div class="col-12 col-md-10 mb-2">
                                            <div class="card class_card" role="button">
                                                <div class="card-body">
                                                    <div class="row text-center">
                                                        <h5 class="card-title">GRUPO {NoGrupo}</h5>
                                                        <p>Carrera {NombreCarrera}</p>
                                                        <p>Curso {NombreCurso}</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="card-text mb-0"> 15/30 Clases</p>
                                                        <p class="card-text mb-0"> LUN MAR MIE JUE VIE</p>
                                                        <p class="card-text mb-0"> Min 80% asis 10% Calif  </p>
                                                        <p class="card-text mb-0"> 3 Retardos = 1 Falta  </p>
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

                                        <div class="col-12 col-md-1" style="display: flex;justify-content: center;">

                                                <button type="button" class="btn btn-success btn_ajustable" style="display: flex;align-content: center;justify-content: center;align-items: center;">
                                                    <i class="fas fa-angle-right"></i>
                                                </button>

                                        </div>
                                    </div>
                                </div>
                            <?php } ?>           
                        </div>
                        <hr>
                        <div class="row" style="display: flex;justify-content: center;">
                            <h4><strong> Otros grupos de la semana</strong></h4>
                            <div class="row" id="containerGruposAll"></div>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 p-3">
                        <div class="row">
                            <h5><strong>Pases de lista de hoy</strong></h5>
                            <div class="list"> 
                                <?php for($i = 0; $i<2; $i++){ ?> 
                                    <a href="#" class="list-group-item list-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">{Grupo}</h5>
                                        <span class="badge position_per">Hoy</span>
                                    </div>
                                    <p class="mb-1">{Materia}</p>
                                    <small class="text-muted">{11 de Abril de 2022}</small>
                                    </a> 
                            <?php } ?>
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
    include "../main_profesor/Modal_profesor/edita_periodo.php";
    include $path."includes_general/js.php";
?>

<script src="../services/profesor/mis_grupos.js"></script>
</html>
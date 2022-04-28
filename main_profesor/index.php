<?php
$titulo = "HOME - Profesor";
$path = "../";

session_start();
$_SESSION["idSesion"] = session_id();
if(!isset($_SESSION['name_user']))
{
    header('Location: ../');
}
?>
<!doctype html>
<html lang="en">
<head> <?php include $path."includes_general/header.php"?></head>
<body>
<div class="container-fluid">
    <div class="row"> <?php include $path."includes_general/sidebar.php"?>
        <div class="col-sm pt-0 min-vh-100 bg-blanco m-0 p-0">
            <!-- content -->
            <div class="container-fluid bg-primary">
                <div class="container p-3 text-light">
                    <div class="row">
                        <div class="col">
                            <h3>¡Hola buenas tardes <strong> <?php echo $_SESSION['name_complete'] ?> </strong>! </h3>
                        </div>
                        <div class="col-2 d-flex justify-content-center align-items-center">
                            <div class="dropdown">
                                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="menuPerfil" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src=" <?php echo $_SESSION['avatar'] ?>" alt="Avatar" class="avatar">
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="menuPerfil">
                                    <li>
                                        <a class="dropdown-item" href="#">Perfil</a>
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
            <div class="container">
                <div class="row pt-3">
                    <div class="col-12 col-md-7 py-3">
                        <h5 class="text-center">Asistencia General</h5>
                        <div id="chart"></div>
                    </div>
                    <div class="col-12 col-md-5 align-content-center py-3">
                        <div class="row">
                            <h5 class="text-center">Inscripcion General</h5>
                        </div>
                        <div class="row h-100">
                            <div id="circularGrapfic" class="d-flex align-content-center m-auto"></div>
                        </div>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-12 col-md-8">
                        <div class="row pt-3">
                            <h5>Seleccione un grupo para pasar lista</h5>
                            <div class="row row-cols-1 row-cols-md-3">
                                <?php for($i = 0; $i <4; $i++){ ?>
                                <div class="col pb-3">
                                    <div class="card class_card" role="button">
                                        <img src="../assets/img/banner.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">GRUPO {NoGrupo}</h5>
                                            <p class="card-text">{NombreMateria}</p>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
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
                        <div class="row pt-3">
                            <h5>Crear Grupo</h5>
                            <div class="row mt-2 mb-3" id="container_select_periodos">
                                
                            </div>
                        </div>
                        <div class="row py-3">
                            <h5>Accesos rapidos</h5>
                            <div class="row">
                                <div class="col-6 col-md-3 col-sm-3 py-3">
                                    <div class="card">
                                        <div class="card-body card_cursor" data-bs-toggle="modal" data-bs-target="#modal_periodos">
                                            <h5 class="card-title text-center">
                                                <i class="fas fa-calendar-alt"></i>
                                            </h5>
                                            <h6 class="card-subtitle mb-2 text-muted text-center">Periodos</h6>
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
                                                <i class="fas fa-user-cog"></i>
                                            </h5>
                                            <h6 class="card-subtitle mb-2 text-muted text-center">Perfil</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="row">
                            <h5>Ultimos pases de lista</h5>
                            <div class="list-group"> <?php for($i = 0; $i
                                <2; $i++){ ?> <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">{Grupo}</h5>
                                        <span class="badge bg-warning">Hoy</span>
                                    </div>
                                    <p class="mb-1">{Materia}</p>
                                    <small class="text-muted">{11 de Abril de 2022}</small>
                                </a> <?php } ?>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <h5>justificantes por revisar</h5>
                            <div class="list-group"> <?php for($i = 0; $i
                                <2; $i++){ ?> <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">{Nombre alumno}</h5>
                                        <span class="badge bg-danger">{Grupo}</span>
                                    </div>
                                    <p class="mb-1">{Materia}</p>
                                    <small class="text-muted">{11 de Abril de 2022}</small>
                                </a> <?php } ?>
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
    include "../main_profesor/Modal_profesor/crear_grupo.php";
    include "../main_profesor/Modal_profesor/periodos_registrados.php";
    include $path."includes_general/js.php";
?>
<script src="../services/profesor/dashboard.js"></script>
<script src="../services/general/generador_claves.js"></script>
<script src="../assets/vendors/md5/md5.min.js"></script>

<script>
    var exampleModal = document.getElementById('modal_crearGrupo')
    exampleModal.addEventListener('show.bs.modal', function (event) 
    {
            //alert("CARGANDO DATOS")
    })
</script>
</html>
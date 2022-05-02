<?php
$titulo = "Justificantes - Profesor";
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
                        <div class="col-12 col-md-7 mt-1">
                            <h4>Grupo 2210 Informática - Introducción a la informática</h4>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="row">
                                <div class="col-8 col-md-10" style="display: flex; justify-content: end;">
                                    <div class="">
                                         <div class="row">
                                            <div class="col-1" style="display: flex;align-items: center;">
                                                <span class="position-absolute mt-3 p-2 end-1 translate-middle p-2 bg-success border border-light rounded-circle">
                                                    <span class="visually-hidden">New alerts</span>
                                                </span>
                                            </div>
                                            <div class="col text-light mt-2">
                                                <h5 class="">30 Alumnos</h5>
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

            <div class="container py-3">
                <div class="row">
                    <div class="col-12 col-md-4 pruebacentro">
                        <h5 class="text-md-start text-center" style="text-align: initial;"><strong>Historial de Grupos</strong></h5>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <h4 class="mb-0">Grupo 7104</h4>
                        <h6 class="mb-0"><strong>Infromática</strong></h6>
                        <em>Introducción a la informática</em>
                    </div>
                    
                    <div class="col-12 col-md-4 top-0 d-flex justify-content-md-end" style="display: flex;justify-content: center;align-items: center;">
                        <div class="">
                            <div class="card mt-2 mt-md-0" style="width: 100px;">
                                <div class="p-2" style="display: flex;justify-content: center;">
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

                <div class="row py-3">
                    <div class="col-12 col-md-7 mb-3">
                        <div class="row row-cols-1 row-cols-md-12 g-4">
                            <div class="col">
                                <div class="card h-100 card_cursor">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 col-md-5 mb-2">
                                                <div class="row">
                                                    <p class="card-text mb-0">Min Asistencia: <strong>80%</strong></p>
                                                    <p class="card-text mb-0">Valor sobre calificación: <strong>10%</strong></p>
                                                    <p class="card-text mb-0"><strong>3 retardos = 1 Falta</strong></p>
                                                    <p class="card-text mb-0">3 Bajas registradas</p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-7 text-center">
                                                <div class="row">
                                                    <h5 class="card-text mb-0 text-muted">15/30 Pases de Lista</h5>
                                                    <h6 class="card-text mb-0 text-muted"><strong>LUN MAR MIER JUE VIER</strong></h6>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col">
                                                        <div class="" style="display: flex;justify-content: flex-start;">
                                                            <button type="button" class="btn btn-primary btn-sm fontsizeletrabtn btn_ajustable">
                                                                <i class="fas fa-print"></i>
                                                                Imprimir
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="" style="display: flex;justify-content: flex-end;">
                                                            <button type="button" class="btn btn-primary btn-sm fontsizeletrabtn btn_ajustable">Editar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                               
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-5 mb-2">
                        <div class="row row-cols-1 row-cols-md-12 g-4">
                            <div class="col">
                                <div class="card h-100 card_cursor">
                                    <div class="card-body">
                                        <div class="text-center">
                                            soy una grafica
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Alumnos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Pase Lista</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row px-3 py-3">
                            <?php for($i = 0; $i <4; $i++){ ?>
                                    <div class="col-12 col-md-12 pb-3"> 
                                        <div class="card class_card" role="button">
                                            <div class="card-body">
                                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">
                                                    {n}
                                                    <span class="visually-hidden">unread messages</span>
                                                </span>
                                                <div class="row" style="display: flex;align-items: center;">
                                                    <!--
                                                    <div class="col-6 col-md-1 mb-2" style="display: flex;justify-content: center;align-items: center;">
                                                        <h4 class="text-muted mb-0"><strong>1</strong></h4>
                                                    </div>
                                                    |-->
                                                    <div class="col-12 col-md-1 mb-2" style="display: flex;justify-content: center;align-items: center;">
                                                        <img class="circular_square " src="../assets/img/defaultAvatar.webp" width="40" height="40" alt="Avatar"></img>
                                                    </div>



                                                    <div class="col-12 col-md-7">
                                                        <div class="row mb-1">
                                                            <div class="col text-dark">
                                                                <h6 class="mb-0" style="display: flex;justify-content: center;">
                                                                    <span class="position-relative mt-2 p-2 end-1 start-1 translate-middle bg-success border border-light rounded-circle">
                                                                    <span class="visually-hidden">New alerts</span>
                                                                    </span>
                                                                    <span class="visually-hidden">New alerts</span>
                                                                </span>
                                                                    <strong>{Nombre del alumno}</strong>
                                                                </h6>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-2">
                                                            <div class="col-12 col-md-4 text-md-center text-start" style="text-align: initial;">
                                                                <i class="fas fa-check-circle me-3" style="color: green;"></i>
                                                                <small>35 Asistencias</small>
                                                            </div>
                                                            <div class="col-12 col-md-4 text-md-center text-start" style="text-align: initial;">
                                                                <i class="fas fa-times-circle me-3" style="color: red;"></i>
                                                                <small>5 Faltas</small>
                                                            </div>
                                                            <div class="col-12 col-md-4 text-md-center text-start" style="text-align: initial;">
                                                                <i class="far fa-clock me-3" style="color: orange;"></i>
                                                                <small>Retardos</small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6 col-md-2">
                                                        <h6 class="text-muted mb-0"><strong>90% Asistencia</strong></h6>
                                                        <p class="text-muted mb-0">0.5pts / 3.0pts</p>
                                                    </div>
                                                    
                                                    <div class="col-6 col-md-2">
                                                        <button type="button" class="btn btn-success btn-sm fontsizeletrabtn btn_ajustable">Reporte individual</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row px-3 py-3">
                                <table class="table table-bordered order-table display nowrap table-responsive mt-3" id="tableEquiposA">
                                    <thead>
                                    <tr class="text-center">
                                        <th>FECHA</th>
                                        <th>INICIO</th>
                                        <th>ASISTENCIAS</th>
                                        <th>FALTAS</th>
                                        <th>RETARDOS</th>
                                        <th>JUSTIFICANTES</th>
                                    </tr>
                                    </thead>
                                    <tbody id="">
                                        <tr class="text-center">
                                            <td data-label="">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_pase_de_lista">14 Feb 2022</a>
                                            </td>
                                            <td data-label="">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_pase_de_lista">8:45 am</a>
                                            </td>
                                            <td data-label="">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_pase_de_lista">34</a>
                                            </td>
                                            <td data-label="">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_pase_de_lista">4</a>
                                            </td>
                                            <td data-label="">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_pase_de_lista">1</a>
                                            </td>
                                            <td data-label="">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_pase_de_lista">0</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>     
        </div>
    </div>
</div>
</body>


<?php
    include "../main_profesor/Modal_profesor/pase_de_lista.php";
    include $path."includes_general/js.php";
?>

    
<!-- Initialize Swiper -->
</html>
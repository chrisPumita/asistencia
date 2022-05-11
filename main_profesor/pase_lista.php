<?php
$titulo = "HOME - Profesor";
$path = "../";


include_once "./sesion_profesor.php";

if (!isset($_GET['start_sesion'])){
    header("Location: ./");
}
else{
    $idGrupo = $_GET['start_sesion'];
    $id_pase = $_GET['id_pase'];
    $action = $_GET['action'];
    $date = $_GET['date'];
    $filter = $_GET['filter'];
    if(!isset($idGrupo)||!isset($id_pase)||!isset($action)||!isset($date)||!isset($filter))
        header("Location: ./");
    echo '<script> let ID_GPO = '.$idGrupo.'; </script>';
    echo '<script> let ID_PASE = '.$id_pase.'; </script>';
    echo '<script> let FILTER = '.$filter.'; </script>';
    echo '<script> let ACTION = "'.$action.'"; </script>';
    echo '<script> let FECHA = "'.$date.'"; </script>';
}

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
                <div class="row text-light">
                    <div class="col-12 col-md-4">
                        <div class="p-3">
                            <h4>Pase de Lista</h4>
                            <h3 class="asfalre mt-2"><span id="tittleGpo"></span></h3>
                            <h4 id="materiaName"></h4>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="row mt-md-3">
                            <div class="col-12 col-md-12" style="display: flex;justify-content: center;">
                                <div class="p-3">
                                    <h4 id="dateToday"></h4>
                                    <h3> <span class="small">Código: </span><span id="codigoLink" onClick="copyToClickBoard(this);" role="button"></span></h3>
                                    <span id="buttonCancel"> </span>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-12 col-md-4 mt-4">
                        <div class="row">
                            <div class="col-6 col-md-12 mb-2 d-flex justify-content-md-end justify-content-center">
                            <div class="card" style="width: 100px;">
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
                        <div class="col-6 col-md-12 mb-2 d-flex justify-content-md-end justify-content-center" style="display: flex;justify-content: flex-end;">
                            <div class="dropdown">
                                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="menuPerfil" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="
                            https://holatelcel.com/wp-content/uploads/2020/12/foto-perfil-whatsapp-.png" alt="Avatar" class="avatar">
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="menuPerfil" style="">
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

            <div class="container">
                <div class="row pt-3">
                    <div class="col-12 col-md-9">
                        <div class="row py-3" id="listContainer" >
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="row py-3 mt-3 p-2" style="justify-content: center;">
                            <div class="row">
                                <div class="card card-body">
                                    <h4 class="card-title">Revisión final</h4>
                                    <div class="text-center">
                                        <h5 class="">Asistencias</h5>
                                        <h5 class="asfalre" style="color: green;" id="countAsis"></h5>
                                        <h6 class="">Faltas</h6>
                                        <h5 class="asfalre" style="color: red;" id="countFalt"></h5>
                                        <h6 class="">Retardos</h6>
                                        <h5 class="asfalre" style="color: orange;" id="countReta"></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div id="chart"></div>
                                </div>
                            </div>
                            <div class="row py-4">
                                <div class="card card-body">
                                    <h4 class="card-title" for="textAreaNoatas">Notas</h4>
                                    <textarea class="form-control" id="textAreaNoatas" rows="3" placeholder="Agregar una nota adicional..." style="height: 200px;"></textarea>
                                    <span id="btnUpdateNotas">
                                        <button type="button" class="btn btn-primary mt-3">Actualizar</button>
                                    </span>
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

<script src="../services/profesor/pase_lista.js"></script>
</html>

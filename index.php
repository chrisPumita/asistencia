<?php
$titulo = "HOME - Iniciar Sesion";
$path = "./";
session_start();
$_SESSION["idSesion"] = session_id();
if(isset($_SESSION['name_user']))
{
    //Si ya existe una sesion reedirecciona a home segun cuenta
    //alumno
    //profesor
    if($_SESSION['tipo'] == "profesor")
        header('Location: ./main_profesor/');
    else
        header('Location: ./main_alumno/');
}

?>
<!-- ----- VERSION DEL DOCUMENTO ---------
    VERSION 1.04.1 BUILD 25/04/2022
    @autor: ReCkrea StuDios
    @website: reckreastudios.com
    @webdevs: ChrisRCGS, Fernando HL, Emanuel Mtz. Zuri Hinojosa.
    -->
<!doctype html>
<html lang="en">
<head>
    <?php include $path."includes_general/header.php"?>
</head
<body>
<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="text-center my-5">
                    <a href="./index.php">
                        <img src="./assets/img/logo.png" alt="logo" width="250">
                    </a>
                </div>
                <div class="card shadow-lg">

                    <div class="card-body p-5">
                        <h1 class="fs-4 card-title fw-bold mb-4 text-center">Iniciar Sesión</h1>
                        <form id="frm_login" class="needs-validation" novalidate="" autocomplete="off">
                            <div id="resp"></div>
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">E-Mail</label>
                                <input id="email" type="email" class="form-control" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="password">Contraseña</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                            <div class="mb-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rdo_accoun" id="rdo_accoun1" value="alumno" checked>
                                    <label class="form-check-label" for="rdo_accoun1">Alumno</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rdo_accoun" id="rdo_accoun2" value="profesor">
                                    <label class="form-check-label" for="rdo_accoun2">Profesor</label>
                                </div>
                            </div>
                            <div class="align-items-center d-flex">
                                <button type="submit" class="btn btn-primary ms-auto">
                                    Iniciar
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            ¿No tiene una Cuenta? Crear una cuenta como:
                        </div>
                        <div class="row pt-3">
                            <div class="col-6 text-center">
                                <a href="./register_alumno.php" class="btn btn-outline-secondary">Alumno</a>
                            </div>
                            <div class="col-6 text-center">
                                <a href="./register_profesor.php" class="btn btn-outline-secondary">Profesor</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5 text-muted">
                    Copyright PapeAndHome © 2022. All rights reserved.
                </div>
            </div>
        </div>
    </div>
</section>
</body>

<?php include $path."includes_general/js.php"?>

<script src="services/login.js"></script>
<!-- Initialize Swiper -->
</html>
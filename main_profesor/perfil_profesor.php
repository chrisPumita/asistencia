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
           <div class="container-fluid bg-primary"> 
            <!-- content -->
                <div class="container p-3 text-light">
                    <div class="row">
                        <div class="col-10 mt-2">
                            <h3>Mi Perfil</h3>
                        </div>
                        <div class="col-2 d-flex justify-content-center align-items-center">
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

            <div class="container p-3">
                <div class="row mt-3">
                    <div class="col-12 col-md-3">
                        <div class="text-center" >
                            <img class="circular_square" src="../assets/img/defaultAvatar.webp" width="250" height="250" alt="Avatar">
                        </div>
                        <div class="text-center text-muted mt-3">
                            <h4>{Nombre Alumno}</h4>
                            <button type="button" class="btn btn-primary">Cambiar</button>
                        </div>
                    </div>


                    <div class="col-12 col-md-9">
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="edit_nombre_profe">Nombre</label>
                            <input id="edit_nombre_profe" type="text" class="form-control" name="edit_nombre_profe" value="" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="edit_app_profe">Primer Apellido</label>
                            <input id="edit_app_profe" type="text" class="form-control" name="edit_app_profe" value="" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="edit_apm_profe">Segundo Apellido</label>
                            <input id="edit_apm_profe" type="text" class="form-control" name="edit_apm_profe" value="" required autofocus>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="edit_sexo_profe">Sexo</label>
                                    <select class="form-select" aria-label=".form-select-sm example" name="edit_sexo_profe" id="edit_sexo_profe">
                                        <option value="0">Hombre</option>
                                        <option value="1">Mujer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                 <div class="mb-3">
                                    <label class="mb-2 text-muted" for="edit_email_profe">Correo electrónico</label>
                                    <input id="edit_email_profe" type="text" class="form-control" name="edit_email_profe" value="" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="edit_gradoAc_profe">Grado académico</label>
                                    <select class="form-select" aria-label=".form-select-sm example" name="edit_gradoAc_profe" id="edit_gradoAc_profe">
                                        <option value="Lic. ">Lic.</option>
                                        <option value="Ing. ">Ing.</option>
                                        <option value="Mtro.">Mtro.</option>
                                        <option value="Prof.">Prof.</option>
                                        <option value="Dr.">Dr.</option>
                                        <option value="Vet.">Vet.</option>
                                        <option value="Act.">Act.</option>
                                        <option value="Arq.">Arq.</option>
                                        <option value="Tec.">Tec.</option>
                                        <option value="TSU.">TSU.</option>
                                        <option value="C.">C.</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                 <div class="mb-3">
                                    <label class="mb-2 text-muted" for="edit_carrera_profe">Carrera/Especialidad</label>
                                    <input id="edit_carrera_profe" type="text" class="form-control" name="edit_carrera_profe" value="" required autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col col-md-10">
                            </div>
                            <div class="col-12 col-md-2" style="display: flex;justify-content: flex-end;">
                                <button type="button" class="btn btn-primary btn_ajustable">Actualizar</button>
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

<script src="services/template.js"></script>
<!-- Initialize Swiper -->
</html>
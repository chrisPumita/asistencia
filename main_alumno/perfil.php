<?php
$titulo = "PERFIL - Alumno";
$path = "../";
include_once "./sesion_alumno.php";
?>

<!doctype html>
<html lang="en">
<head>
    <?php include $path."includes_general/header.php"?>

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include $path."includes_general/sidebar_alumno.php"?>
        <div class="container-fluid bg-primary text-light pt-3">
                <div class="container">
                    <h4>Mi Perfil  </h4>
                </div>
        </div>
        <div class="col-sm pt-0 min-vh-100 bg-blanco m-0 p-0">
           

            <div class="container p-3">
                <div class="row mt-3">
                    <div class="col-12 col-md-3">
                        <div class="text-center" >
                            <img class="circular_square" src="../assets/img/defaultAvatar.webp" width="250" height="250" alt="Avatar" id="avatar_al">
                        </div>
                        <div class="text-center text-muted mt-3">
                            <h4><span id="nombre_perfil"></span></h4>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_avatar">Cambiar</button>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-9">
                    <form id="frm-update-datos-alumno">
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="edit_nombre_al">Nombre</label>
                            <input id="edit_nombre_al" type="text" class="form-control" name="edit_nombre_al" value="" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="edit_app_al">Primer Apellido</label>
                            <input id="edit_app_al" type="text" class="form-control" name="edit_app_al" value="" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="edit_apm_al">Segundo Apellido</label>
                            <input id="edit_apm_al" type="text" class="form-control" name="edit_apm_al" value="" required autofocus>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="edit_sexo_al">Sexo</label>
                                    <select class="form-select" aria-label=".form-select-sm example" name="edit_sexo_al" id="edit_sexo_al">
                                        <option value="0">Hombre</option>
                                        <option value="1">Mujer</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col">
                            	<div class="mb-3">
                            		<label class="mb-2 text-muted" for="edit_user_al">Usuario</label>
                            		<input id="edit_user_al" type="text" class="form-control" name="edit_user_al" value="" required autofocus disabled>
                        		</div>
                            	
                            </div>
                        </div>
                        <div class="mb-3">
                            		<label class="mb-2 text-muted" for="edit_no_cta">No. Cuenta/Matricula</label>
                            		<input id="edit_no_cta" type="text" class="form-control" name="edit_no_cta" value="" required autofocus disabled>
                        		</div>
                                 <div class="mb-3">
                                    <label class="mb-2 text-muted" for="edit_email_al">Correo electrónico</label>
                                    <input id="edit_email_al" type="email" class="form-control" name="edit_email_al" value="" required autofocus>
                                </div>

                        <div class="row mt-3">
                            <div class="col col-md-10">
                            </div>
                            <div class="col-12 col-md-2" style="display: flex;justify-content: flex-end;">
                                <button type="submit" class="btn btn-primary btn_ajustable">Actualizar</button>
                            </div>
                        </div>
                    </form>
                    </div>
                    
                </div>
            </div> 
        </div>
    </div>
</div>
<?php include_once "../includes_general/footer.php"?>
</body>

<?php
    include "../main_profesor/Modal_profesor/edita_periodo.php";
    include_once "./modal_alumno/subir_avatar.php";
    include $path."includes_general/js.php";
?>
<script src="../services/general/perfil.js"></script>
<script src="services/template.js"></script>
<!-- Initialize Swiper -->
</html>
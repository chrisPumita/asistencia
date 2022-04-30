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
            <!-- content -->
            <div class="container-fluid bg-primary text-light pt-3">
                <div class="container">
                    <h4>Mi Perfil  </h4>
                </div>
            </div>
    </div>
    <div class="row justify-content-center h-100">
        <div class="col-4 pt-3 justify-content-center">
        	<div class="text-center" >
        		<img src="../assets/img/defaultAvatar.webp" width="300" height="300"  alt="Avatar">
        	</div>
        	<div class="text-center" >
        		<h4>{Nombre Alumno}</h4>
        		<button type="button" class="btn btn-primary">Cambiar</button>
        	</div>
        </div>
        <div class="col-6 pt-3">
                        <form id="frm-new-profesor" class="needs-validation" novalidate="" autocomplete="off">
                            <div id="resp"></div>
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="nombre">Nombre</label>
                                <input id="nombre" type="text" class="form-control" name="nombre" value="" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="app">Primer Apellido</label>
                                <input id="app" type="text" class="form-control" name="app" value="" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="apm">Segundo Apellido</label>
                                <input id="apm" type="text" class="form-control" name="apm" value="" required autofocus>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="mb-2 text-muted" for="sexo">Sexo</label>
                                        <select class="form-select" aria-label=".form-select-sm example" name="sexo" id="sexo">
                                            <option value="0">Hombre</option>
                                            <option value="1">Mujer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                     <div class="mb-3">
                                        <label class="mb-2 text-muted" for="user_name">Usuario</label>
                                        <input id="user_name" type="text" class="form-control" name="user_name" value="" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="apm">No. Cuenta/Matricula</label>
                                <input id="apm" type="text" class="form-control" name="apm" value="" required autofocus>
                            </div>                         
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">Correo electrónico</label>
                                <input id="email" type="email" class="form-control" name="email" value="" required>
                                <div class="invalid-feedback">
                                    Correo electrónico no válido.
                                </div>
                            </div>

                             <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="mb-2 text-muted" for="pwd">Contraseña</label>
                                        <input id="pwd" type="password" class="form-control" name="pwd" required>
                                        <div class="invalid-feedback">
                                            La contraseña es requerida
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                     <div class="mb-3">
                                        <label class="mb-2 text-muted" for="pwd_confirm">Repetir contraseña</label>
                                        <input id="pwd_confirm" type="password" class="form-control" name="pwd_confirm" required>
                                        <div class="invalid-feedback">
                                            La contraseña es requerida
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="" style="text-align: center;">
                                <button type="submit" class="btn btn-primary ms-auto">
                                    Actualizar
                                </button>
                            </div>
                        </form>
        </div>
    </div>
</div>
</body>
<?php
include $path."includes_general/js.php";
?>

</html>

<!-- <section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-6 col-xl-8 col-lg-8 col-md-8 col-sm-9">
                <div class="col-4">
                	hola
                </div>
                <div class="col-8">
                	hola
                </div>
            </div>
        </div>
    </div>
</section> -->
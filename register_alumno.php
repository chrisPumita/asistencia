<?php
$titulo = "oKList | Crear cuenta Alumno";
$path = "./"
?>

<!doctype html>
<html lang="en">
<head>
    <?php include $path."includes_general/header.php"?>
</head
<body>
<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-6 col-xl-8 col-lg-8 col-md-8 col-sm-9">
                <div class="text-center my-5">
                    <a href="./index.php">
                        <img src="./assets/img/logo.png" alt="logo" width="250">
                    </a>
                </div>
                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <h1 class="fs-4 card-title fw-bold mb-4 text-center" style="color: darkblue;">Registrarme como Alumno</h1>
                        <form id="frm-new-alumno" class="needs-validation" novalidate="" autocomplete="off">
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
                                <label class="mb-2 text-muted" for="noCta">No. Cuenta/Matricula</label>
                                <input type="text" class="form-control" name="noCta" id="noCta" value="" required autofocus>
                            </div>                         
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">Correo electr??nico</label>
                                <input id="email" type="email" class="form-control" name="email" value="" required>
                                <div class="invalid-feedback">
                                    Correo electr??nico no v??lido.
                                </div>
                            </div>

                             <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="mb-2 text-muted" for="pwd">Contrase??a</label>
                                        <input id="pwd" type="password" class="form-control" name="pwd" required>
                                        <div class="invalid-feedback">
                                            La contrase??a es requerida
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                     <div class="mb-3">
                                        <label class="mb-2 text-muted" for="pwd_confirm">Repetir contrase??a</label>
                                        <input id="pwd_confirm" type="password" class="form-control" name="pwd_confirm" required>
                                        <div class="invalid-feedback">
                                            La contrase??a es requerida
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <p class="form-text text-muted mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="chkTerms">
                                <label class="form-check-label" for="chkTerms">
                                    He leido los terminos y condiciones
                                </label>
                            </p>
                            <div class="" style="text-align: center;">
                                <button type="submit" class="btn btn-primary ms-auto">
                                    Crear Cuenta
                                </button>
                            </div>
                        </form>
                    </div>
                    
                </div>
                <div class="text-center mt-5 text-muted">
                    Copyright oKList ?? 2022. All rights reserved.
                </div>
            </div>
        </div>
    </div>
</section>
</body>

<?php include $path."includes_general/js.php"?>

<script src="services/registro.js"></script>
<!-- Initialize Swiper -->
</html>
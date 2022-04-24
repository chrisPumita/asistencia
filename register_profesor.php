<?php
$titulo = "HOME - Profesor";
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
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="text-center my-5">
                    <a href="./index.php">
                        <img src="./assets/img/logo.png" alt="logo" width="250">
                    </a>
                </div>
                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <h1 class="fs-4 card-title fw-bold mb-4 text-center" style="color: darkblue;">Registrarme como Profesor</h1>
                        <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="name">Nombre</label>
                                <input id="name" type="text" class="form-control" name="name" value="" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="name">Primer Apellido</label>
                                <input id="name" type="text" class="form-control" name="name" value="" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="name">Segundo Apellido</label>
                                <input id="name" type="text" class="form-control" name="name" value="" required autofocus>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="mb-2 text-muted" for="name">Sexo</label>
                                        <select class="form-select" aria-label=".form-select-sm example">
                                            <option selected></option>
                                            <option value="1">Hombre</option>
                                            <option value="2">Mujer</option>
                                            <option value="3">Otro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                     <div class="mb-3">
                                        <label class="mb-2 text-muted" for="name">Usuario</label>
                                        <input id="name" type="text" class="form-control" name="name" value="" required autofocus>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="mb-2 text-muted" for="name">Grado académico</label>
                                        <select class="form-select" aria-label=".form-select-sm example">
                                            <option selected></option>
                                            <option value="1">Basica</option>
                                            <option value="2">Media</option>
                                            <option value="3">Media Superior</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                     <div class="mb-3">
                                        <label class="mb-2 text-muted" for="name">Carrera/Especialidad</label>
                                        <input id="name" type="text" class="form-control" name="name" value="" required autofocus>
                                    </div>
                                </div>
                                
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
                                        <label class="mb-2 text-muted" for="password">Contraseña</label>
                                        <input id="password" type="password" class="form-control" name="password" required>
                                        <div class="invalid-feedback">
                                            La contraseña es requerida
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                     <div class="mb-3">
                                        <label class="mb-2 text-muted" for="password">Repetir contraseña</label>
                                        <input id="password" type="password" class="form-control" name="password" required>
                                        <div class="invalid-feedback">
                                            La contraseña es requerida
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
                                    Suscribirse
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            ¿Ya tienes una cuenta? <a href="./login.php" class="text-dark">Iniciar Sesión</a>
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

<script src="services/template.js"></script>
<!-- Initialize Swiper -->
</html>
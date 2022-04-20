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
                        <h1 class="fs-4 card-title fw-bold mb-4 text-center">Iniciar Sesión</h1>
                        <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">E-Mail</label>
                                <input id="email" type="email" class="form-control" name="email" value="" required>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="password">Contraseña</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                            <div class="align-items-center d-flex">
                                <a href="./main_profesor" class="btn btn-primary" type="submit" class="btn btn-primary ms-auto">
                                    Iniciar
                                </a>
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

<script src="services/template.js"></script>
<!-- Initialize Swiper -->
</html>
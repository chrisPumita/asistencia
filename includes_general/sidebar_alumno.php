<div class="container-fluid">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../assets/img/logo.png" alt="logo" width="80px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../main_alumno/index.php"> <i class="fas fa-home"></i> Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../main_alumno/mis_grupos.php"><i class="fas fa-graduation-cap"></i> Mis Grupos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../main_alumno/historial_grupos.php"> <i class="fas fa-history"></i> Historial</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
        <div class="dropdown">
                                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="menuPerfil" data-bs-toggle="dropdown" aria-expanded="false">
                                    Hola <?php echo $_SESSION['name_user'] ?>
                                    <img src="<?php echo $_SESSION['avatar'] ?>" alt="Avatar" class="avatar">
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="menuPerfil" style="">
                                    <li>
                                        <a class="dropdown-item" href="../main_alumno/perfil.php">Perfil</a>
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
      </span>
                </div>
            </div>
        </nav>
    </div>
</div>
<?php include "../main_profesor/Modal_profesor/cambia_contraseña.php"; ?>

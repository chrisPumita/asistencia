<div class="dropdown">
    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="menuPerfil" data-bs-toggle="dropdown" aria-expanded="false">
        <img src=" <?php echo $_SESSION['avatar'] ?>" alt="Avatar" class="avatar">
    </button>
    <ul class="dropdown-menu" aria-labelledby="menuPerfil">
        <li>
            <a class="dropdown-item" href="perfil_profesor.php">Perfil</a>
        </li>
        <li>
            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal_nvopass">Cambiar contraseña</a>
        </li>
        <li>
            <a class="dropdown-item" href="./about.php">Acerca de</a>
        </li>
        <hr>
        <li>
            <a class="dropdown-item" href="../c_logout.php">Salir</a>
        </li>
    </ul>
</div>
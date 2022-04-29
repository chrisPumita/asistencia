<div class="col-sm-auto bg-light sticky-top">
    <div class="d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center sticky-top">
        <a href="./" class="d-block p-3 link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
            <img src="../assets/img/logo.png" alt="logo" width="40px">
        </a>
        <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center justify-content-between w-100 px-3 align-items-center">
            <li class="nav-item">
                <a href="../main_profesor/index.php" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                    <i class="fas fa-home"></i>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                    <i class="fas fa-check-double" data-bs-toggle="modal" data-bs-target="#modal_pase_lista"></i>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                    <i class="fas fa-users"></i>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Products">
                    <i class="fas fa-calendar-alt"></i>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
                    <i class="fas fa-file"></i>
                </a>
            </li>
        </ul>
    </div>
</div>


<?php include "../main_profesor/Modal_profesor/pasar_lista.php"; ?>
<?php include "../main_profesor/Modal_profesor/cambia_contraseña.php"; ?>
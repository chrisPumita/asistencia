<?php
$titulo = "GRUPOS - Profesor";
$path = "../";
session_start();
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
        <div class="col-sm pt-0 bg-blanco m-0 p-0">
           <div class="container-fluid bg-primary"> 
            <!-- content -->
                <div class="container p-3 text-light">
                    <div class="row">
                        <div class="col-10 mt-2">
                            <h3>Creditos</h3>
                        </div>
                        <div class="col-2 d-flex justify-content-center align-items-center">
                            <?php include "./perfil_menu.php" ;?>
                        </div>  
                    </div> 
                </div> 
            </div>

            <div class="container p-3">
                <?php include_once $path."includes_general/about_load.php" ?>
            </div> 
        </div>
    </div>
</div>
<?php include_once "../includes_general/footer.php"?>
</body>

<?php
    include "../main_profesor/Modal_profesor/edita_periodo.php";
    include $path."includes_general/js.php";
?>
</html>
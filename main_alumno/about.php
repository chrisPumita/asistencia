<?php
$titulo = "HOME - Alumno";
$path = "../";
include_once "./sesion_alumno.php";
?>
<!doctype html>
<html lang="en">
<head> <?php include $path."includes_general/header.php"?></head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include $path."includes_general/sidebar_alumno.php"?>
        <div class="col-sm pt-0 bg-blanco m-0 p-0">
            <!-- content -->
            <div class="container-fluid bg-primary">
                <div class="container">
                    <h1 class="text-light">Creditos</h1>
                </div>

            </div>
            <!-- content -->
            <?php include_once $path."includes_general/about_load.php" ?>
        </div>
    </div>
    <?php include_once "../includes_general/footer.php"?>
</div>
</body>
<?php
include $path."includes_general/js.php";
?>

</html>
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
<div class="container-fluid">
    <div class="row">
        <?php include $path."includes_general/sidebar.php"?>
        <div class="col-sm pt-0 min-vh-100 bg-blanco">
            <!-- content -->
            <div class="container-fluid bg-primary">
                <div class="container p-3 text-light">
                    <h3>Hola buenas tardes</h3>
                    <h2>Juan Perez</h2>
                </div>
            </div>
            <div class="container">
                <div class="row pt-3">
                    <div class="col-12 col-md-8">
                        <h5>Asistencia General</h5>
                        <img src="https://upload.wikimedia.org/wikipedia/es/timeline/6zswa00f78sek0xned6xv13ie6tq40i.png" alt="">
                    </div>
                    <div class="col-12 col-md-4">
                        <h5>Inscripcion General</h5>
                        <img src="https://es-static.z-dn.net/files/d92/b7d98a49bf4fa2eb09abb6587a667a58.jpg" width="200" alt="">
                    </div>
                </div>
                <div class="row"></div>
                <div class="row"></div>
            </div>
            <!-- content -->
        </div>
    </div>
</div>
</body>

<?php include $path."includes_general/js.php"?>

<script src="services/template.js"></script>
<!-- Initialize Swiper -->
</html>
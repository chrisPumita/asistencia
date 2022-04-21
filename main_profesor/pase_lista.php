<?php
$titulo = "HOME - Profesor";
$path = "../"
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
                <div class="row py-5">
                    <div class="card mt-3">
                        <div class="card-body">
                            This is some text within a card body.
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            This is some text within a card body.
                        </div>
                    </div>
                </div>
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

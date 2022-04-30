<?php
$titulo = "HOME - Alumno";
$path = "../";

?>
<!doctype html>
<html lang="en">
<head> <?php include $path."includes_general/header.php"?></head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include $path."includes_general/sidebar_alumno.php"?>
        <div class="col-sm pt-0 min-vh-100 bg-blanco m-0 p-0">
            <!-- content -->
            <div class="container-fluid bg-primary text-light pt-3">
                <div class="container">
                    <div class="col">
                        <h5>Historial de grupos inscritos </h5>
                        <hr>
                        <!--<strong> <?php echo $_SESSION['name_complete']?> </strong>! -->
                    </div>
                </div>
            </div>
            <div class="table-responsive">
			  	<table class="table table-light caption-top">
				  <caption>Asistencia por grupo</caption>
				  <thead class="table-light">
				    <tr>
				      <th scope="col">Carrera</th>
				      <th scope="col">Materia</th>
				      <th scope="col">Grupo</th>
				      <th scope="col">Asis</th>
				      <th scope="col">Faltas</th>
				      <th scope="col">Ret</th>
				      <th scope="col">Periodo</th>
				      <th scope="col">Estatus</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mark</td>
				      <td>Otto</td>
				      <td>@mdo</td>
				      <td>Mark</td>
				      <td>Otto</td>
				      <td>@mdo</td>
				      <td>the Bird</td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Jacob</td>
				      <td>Thornton</td>
				      <td>@fat</td>
				      <td>Mark</td>
				      <td>Otto</td>
				      <td>@mdo</td>
				      <td>the Bird</td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Larry</td>
				      <td>the Bird</td>
				      <td>@twitter</td>
				      <td>Mark</td>
				      <td>Otto</td>
				      <td>@mdo</td>
				      <td>the Bird</td>
				    </tr>
				  </tbody>
				</table>
			</div>
    	</div>
</div>
</body>
<?php

include $path."includes_general/js.php";
?>

</html>


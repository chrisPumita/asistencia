<!--Lirerias-->
<script src="<?php echo $path; ?>assets/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo $path; ?>assets/vendors/bootstrap-5.0.2/js/popper.min.js"></script>
<script src="<?php echo $path; ?>assets/vendors/bootstrap-5.0.2/js/bootstrap.min.js"></script>
<script src="<?php echo $path; ?>assets/vendors/fontawesome-5.15.4/js/fontawesome.min.js"></script>
<script src="<?php echo $path; ?>assets/vendors/fontawesome-5.15.4/js/all.min.js"></script>
<script src="<?php echo $path; ?>assets/vendors/sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?php echo $path; ?>assets/vendors/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo $path; ?>assets/vendors/apexcharts/apexcharts.min.js"></script>

<script src="<?php echo $path; ?>services/general/alertas.js"></script>
<script src="<?php echo $path; ?>services/general/async_services.js"></script>
<script src="<?php echo $path; ?>services/general/password.js"></script>

<?php
if (isset($_SESSION['tipo']))
    if($_SESSION['tipo'] == "profesor")
        echo '<script src="'.$path.'services/sidebar.js"></script>';
?>
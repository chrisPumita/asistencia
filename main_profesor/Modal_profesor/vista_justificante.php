<!-- Modal vista justificante -->
<div class="modal fade" id="Modal_PDF" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg modal-fluid modal-notify modal-info" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead" id="namePDF"></p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!--Body-->
            <div class="modal-body">
                <input type="hide" id="idJustAlumno">
                <input type="hide" id="idJustPase">
                <div id="containerPDFView"></div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-success"  onClick="actionJust('1');" >Aceptar</button>
                <button type="button" class="btn btn-danger" onClick="actionJust('0');" >Rechazar</button>
                <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal" >Cerrar</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
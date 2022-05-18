<!-- Subir Justificante -->
<div class="modal fade" id="modal_justificante" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Subir Justificante</h5>
        <button type="button" class="btn-close btnClose_modal" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <h5><span id="tituloJust"></span></h5>
        <p>Seleccione su justificante en formato PDF</p>
          <form id="frm-upload-file" enctype="multipart/form-data">
              <div class="modal-body">
                  <input type="hidden" name="idPase" id="idPase" required="" value="0">
                  <div class="input-group">
                      <input type="file" class="form-control" accept="image/gif,image/jpeg,.pdf" id="archivo" name="archivo" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">
                      <i class="bx bx-x d-block d-sm-none"></i>
                      <span class="d-none d-sm-block"><i class="fas fa-times"></i> Cancelar</span>
                  </button>
                  <button type="submit" class="btn btn-primary ml-1">
                      <i class="bx bx-check d-block d-sm-none"></i>
                      <span class="d-none d-sm-block"><i class="fas fa-upload"></i> Subir</span>
                  </button>
              </div>
          </form>
      </div>
    </div>
  </div>
</div>
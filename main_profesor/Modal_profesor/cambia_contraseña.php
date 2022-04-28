<!-- Modal cambio de contraseña -->
<div class="modal fade" id="modal_nvopass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cambiar contraseña</h5>
        <button type="button" class="btn-close btnClose_modal" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h6>Cambiar la contraseña de su cuenta:</h6>
        <div class="mb-3">
          <label class="mb-2 text-muted" for="name">Contraseña actual:</label>
          <input id="pass_actual" type="password" class="form-control" name="pass_actual">
        </div>
        <div class="mb-3">
          <label class="mb-2 text-muted" for="name">Nueva contraseña:</label>
          <input id="pass_nvo" type="password" class="form-control" name="pass_nvo">
        </div>
        <div class="mb-3">
          <label class="mb-2 text-muted" for="name">Confirmar contraseña:</label>
          <input id="pass_nvo_confi" type="password" class="form-control" name="pass_nvo_confi">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Actualizar</button>
      </div>
    </div>
  </div>
</div>
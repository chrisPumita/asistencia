<!-- Modal edita periodo -->
<div class="modal fade" id="modal_edit_periodo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edita Periodo</h5>
        <button type="button" class="btn-close btnClose_modal" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h6>Rellene los campos para editar el periodo:</h6>

        <div class="row py-2">
          <div class="col-3 col-md-4">
            Semestre:
          </div>
          <div class="col-9 col-md-8">
            <input class="form-control" id="edita_semestre" name="edita_semestre" type="text" placeholder="" aria-label="default input example">
          </div>
        </div>

        <div class="row py-2">
          <div class="col-3 col-md-4">
            Fecha de inicio:
          </div>
          <div class="col-9 col-md-8">
            <input class="w-100 form-control" type="date" id="edita_fecha_inicioPeriodo" name="fecha_inicioPeriodo" value="2018-07-22" min="2018-01-01" max="2018-12-31">
          </div>
        </div>

        <div class="row py-2">
          <div class="col-3 col-md-4">
            Fecha de termino:
          </div>
          <div class="col-9 col-md-8">
            <input class="w-100 form-control" type="date" id="edita_fecha_terminoPeriodo" name="fecha_terminoPeriodo" value="2018-07-22" min="2018-01-01" max="2018-12-31">
          </div>
        </div>

        <div class="row py-2">
          <div class="col-3 col-md-4">
            Tipo:
          </div>
          <div class="col-9 col-md-8">
            <select class="form-select" id="select_tipoPlan" name="edita_select_tipoPlan" aria-label="Default select example">
              <option selected>   - Tipo de plan -   </option>
              <option value="1">Plan semestral</option>
              <option value="2">Plan cuatrimestral</option>
              <option value="3">Plan bimestral</option>
            </select>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Editar</button>
      </div>
    </div>
  </div>
</div>
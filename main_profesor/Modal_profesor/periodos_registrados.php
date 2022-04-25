<!-- Modal periodos -->
<div class="modal fade" id="modal_periodos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cambiar contraseña</h5>
        <button type="button" class="btn-close btnClose_modal" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h6>Seleccione un périodo para editar la información:</h6>
        <div class="mb-3">
          <table class="table table-bordered order-table display nowrap table-responsive mt-3" id="tableEquiposA" cellspacing="0" width="100%">
            <thead>
              <tr class="text-center">
                <th>PERIODO</th>
                <th>FECHAS</th>
                <th>ESTATUS</th>
                <th>EDITAR</th>

              </tr>
            </thead>
            <tbody id="">
              <tr class="text-center">
                <td data-label="">semestre 2022-2</td>
                <td data-label="">14 abril 2022 - 15 jun 2022</td>
                <td data-label="">ACTIVO</td>
                <td data-label="">
                  <button type="button" class="btn btn-warning">
                    <i class="fas fa-edit" style="color: white;"></i>
                  </button>
                </td>
              </tr>
              <tr class="text-center">
                <td data-label="">semestre 2022-1</td>
                <td data-label="">14 abril 2022 - 15 jun 2022</td>
                <td data-label="">CONCLUIDO</td>
                <td data-label="">
                  <button type="button" class="btn btn-warning">
                    <i class="fas fa-edit" style="color: white;"></i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="row mt-2 mb-3">
          <div class="col-3 creargrupo_center">
            <label class="text-muted" for="name">Semestre:</label>
          </div>
          <div class="col-9">
            <input type="text" class="form-control" id="carrera_nva" placeholder="">
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-3 creargrupo_center">
            <label class="text-muted" for="name">Fecha de inicio:</label>
          </div>
          <div class="col-9">
            <input class="w-100 form-control" type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-3 creargrupo_center">
            <label class="text-muted" for="name">Fecha de termino:</label>
          </div>
          <div class="col-9">
            <input class="w-100 form-control" type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-3 creargrupo_center">
            <label class="text-muted" for="name">Tipo:</label>
          </div>
          <div class="col-9">
            <input type="text" class="form-control" id="carrera_nva" placeholder="">
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Nuevo</button>
        <button type="button" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>
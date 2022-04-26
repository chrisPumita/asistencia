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
                <form id="frm_periodo_update_insert">
                    <div id="resp"></div>
                    <input type="text" id="no_periodo" name="no_periodo" value="0">
                    <div class="row mb-3">
                        <div class="col-3 creargrupo_center">
                            <label class="text-muted" for="tipo_periodo">Tipo:</label>
                        </div>
                        <div class="col-9">
                            <select class="form-select" id="tipo_periodo" name="tipo_periodo">
                                <option value="Semestre" selected>Semestre</option>
                                <option value="Anual">Anual</option>
                                <option value="Trimestre">Trimestre</option>
                                <option value="Cuatrimestre">Cuatrimestre</option>
                                <option value="Mensual">Mensual</option>
                                <option value="N/A">N/A</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2 mb-3">
                        <div class="col-3 creargrupo_center">
                            <label class="text-muted" for="nombre_periodo">Periodo:</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" id="nombre_periodo" name="nombre_periodo" placeholder="Eje. 2022-2023, 2023-1">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3 creargrupo_center">
                            <label class="text-muted" for="fecha_inicio_periodo">Fecha de inicio:</label>
                        </div>
                        <div class="col-9">
                            <input class="w-100 form-control" type="date" id="fecha_inicio_periodo" name="fecha_inicio_periodo">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3 creargrupo_center">
                            <label class="text-muted" for="fecha_fin_periodo">Fecha de termino:</label>
                        </div>
                        <div class="col-9">
                            <input class="w-100 form-control" type="date" id="fecha_fin_periodo" name="fecha_fin_periodo">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="reset" class="btn btn-success m-2">Nuevo</button>
                            <button type="submit" class="btn btn-success m-2">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal crear grupo -->
<div class="modal fade" id="modal_crearGrupo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear grupo</h5>
        <button type="button" class="btn-close btnClose_modal" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h6>Llene los campos para crear un gurpo</h6>
          <form id="frm_new_grpo">
              <div class="row mt-2 mb-3">
                  <div class="col-2 creargrupo_center">
                      <label class="text-muted" for="name">Periodo:</label>
                  </div>
                  <div class="col-10">
                      <select class="form-select" aria-label="Default select example">
                          <option selected>   - Seleccione el periodo -   </option>
                          <option value="1">Semestre 2022</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                      </select>
                  </div>
              </div>
              <div class="row mt-2 mb-3">
                  <div class="col-2 creargrupo_center">
                      <label class="text-muted" for="name">Carrera:</label>
                  </div>
                  <div class="col-10">
                      <input type="text" class="form-control" id="carrera_nva" placeholder="">
                  </div>
              </div>
              <div class="row mt-2 mb-3">
                  <div class="col-12 col-md-6">
                      <div class="row mt-2">
                          <div class="col-2 col-md-4 creargrupo_center">
                              <label class="text-muted " for="name">Materia:</label>
                          </div>
                          <div class="col-10 col-md-8">
                              <input type="text" class="form-control" id="materia_nva" placeholder="">
                          </div>
                      </div>
                  </div>

                  <div class="col-12 col-md-6">
                      <div class="row mt-2">
                          <div class="col-2 col-md-4 creargrupo_center">
                              <label class="text-muted " for="name">Grupo:</label>
                          </div>
                          <div class="col-10 col-md-8">
                              <input type="text" class="form-control" id="grupo_nvo" placeholder="">
                          </div>
                      </div>
                  </div>
              </div>
              <hr class="text-muted">
              <div class="row creargrupo_center mb-3">
                  <div class="col-12 col-md-5">
                      <label class="text-muted " for="name">% Minimo de asistencia:</label>
                  </div>
                  <div class="col-12 col-md-7">
                      <div class="row">
                          <div class="col-6">
                              <input type="number" class="form-control" id="min_asis_nvo" placeholder="">
                          </div>
                          <div class="col-6 creargrupo_center">
                              <label class="text-muted small" for="name">Si no hay minimo dejar 0</label>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row creargrupo_center mb-3">
                  <div class="col-12 col-md-5">
                      <label class="text-muted " for="name">Retardos que hacen falta:</label>
                  </div>
                  <div class="col-12 col-md-7">
                      <div class="row">
                          <div class="col-6 creargrupo_center">
                              <input type="number" class="form-control" id="ret_falta_nvo" placeholder="">
                          </div>
                          <div class="col-6 creargrupo_center">
                              <cite class="text-muted small" for="name">Dejar 1, el retardo se cuenta como falta. 0 no hay tolerancia de retardo</cite>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row creargrupo_center mb-3">
                  <div class="col-12 col-md-5">
                      <label class="text-muted " for="name">Clases estimadas:</label>
                  </div>
                  <div class="col-12 col-md-7">
                      <div class="row">
                          <div class="col-6 creargrupo_center">
                              <input type="number" class="form-control" id="min_asis_nvo" placeholder="">
                          </div>
                          <div class="col-6 creargrupo_center">
                              <label class="text-muted small" for="name">0 para calcular sobre pase de lista realizados</label>
                          </div>
                      </div>
                  </div>
              </div>
              <hr class="text-muted">
              <div class="row">
                  <div class="col-12 col-md-5">
                      <label class="text-muted" for="name">Días:</label><br>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" value="" id="lunes">
                          <label class="form-check-label text-muted" for="lunes">Lun</label>
                      </div>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" value="" id="martes">
                          <label class="form-check-label text-muted" for="martes">Mar</label>
                      </div>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" value="" id="miercoles">
                          <label class="form-check-label text-muted" for="miercoles">Mier</label>
                      </div>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" value="" id="jueves">
                          <label class="form-check-label text-muted" for="flexCheckDefault">Jue</label>
                      </div>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" value="" id="viernes">
                          <label class="form-check-label text-muted" for="flexCheckDefault">Vier</label>
                      </div>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" value="" id="sabado">
                          <label class="form-check-label text-muted" for="flexCheckDefault">Sab</label>
                      </div>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" value="" id="domingo">
                          <label class="form-check-label text-muted" for="flexCheckDefault">Dom</label>
                      </div>
                  </div>
                  <div class="col-12 col-md-7">
                      <div class="row mt-2 mb-2">
                          <div class="col-12">
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                  <label class="form-check-label text-muted small" for="flexCheckDefault">
                                      El porcentaje contara para la calificación final
                                  </label>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="row">
                                  <div class="col-6">
                                      <div class="row">
                                          <div class="col-4 creargrupo_center">
                                              <label class="form-check-label text-muted" for="flexCheckDefault">Valor:</label>
                                          </div>
                                          <div class="col-8 creargrupo_center">
                                              <input type="number" class="form-control" id="valor_nvo" placeholder="">
                                          </div>
                                      </div>

                                  </div>
                                  <div class="col-6">
                                      <div class="form-check">
                                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                          <label class="form-check-label text-muted" for="flexRadioDefault1">
                                              /10 Puntos
                                          </label>
                                      </div>
                                      <div class="form-check">
                                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                          <label class="form-check-label text-muted" for="flexRadioDefault1">/100 Porciento
                                          </label>
                                      </div>
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
              <hr class="text-muted">
              <div class="row creargrupo_center mb-3">
                  <div class="col-12 col-md-4">
                      <label class="text-muted " for="name">Código de invitación:</label>
                  </div>
                  <div class="col-12 col-md-8">
                      <div class="row">
                          <div class="col-7 col-md-8 creargrupo_center">
                              <input type="text" class="form-control" id="materia_nva" placeholder="">
                          </div>
                          <div class="col-5 col-md-4 creargrupo_center justify-content-center">
                              <button type="button" class="btn btn-primary btn-sm">Generar</button>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row creargrupo_center mb-3">
                  <div class="col-12 col-md-4">
                      <label class="text-muted " for="name">Link de invitación:</label>
                  </div>
                  <div class="col-7 col-md-8">

                      <div class="col-12 col-md-12 creargrupo_center">
                          <input type="text" class="form-control" id="materia_nva" placeholder="">
                      </div>

                  </div>
              </div>
              <div class="row">
                  <div class="col-12 col-md-4">
                      <label class="text-muted " for="name">Correos:</label>
                  </div>
                  <div class="col-12 col-md-8">
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Escriba los correos separados por comas..."></textarea>
                  </div>
              </div>
              <hr class="text-muted">
              <div class="row">
                  <div class="col">
                      <button type="button" class="btn btn-success">Crear grupo</button>
                      <button type="button" class="btn btn-success">Crear y enviar invitaciones</button>
                  </div>

              </div>
          </form>
      </div>
    </div>
  </div>
</div>
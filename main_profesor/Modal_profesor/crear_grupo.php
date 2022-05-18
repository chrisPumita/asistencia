<!-- Modal crear grupo -->
<div class="modal fade" id="modal_crearGrupo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tituloModalGrupo"></h5>
                <button type="button" class="btn-close btnClose_modal" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5">
                <h6>Llene los campos para crear un grupo</h6>
                <form id="frm_new_grpo">
                    <input type="hidden" class="selector" id="id_periodo_selected" name="id_periodo_selected">
                    <div class="row mt-2 mb-3">
                        <div class="col-2 creargrupo_center">
                            <label class="text-muted" for="carrera_nva">*Carrera:</label>
                        </div>
                        <div class="col-10">
                            <input type="text" class="form-control" id="carrera_nva" name="carrera_nva" placeholder="Escriba la carrera">
                        </div>
                    </div>
                    <div class="row mt-2 mb-3">
                        <div class="col-12 col-md-6">
                            <div class="row mt-2">
                                <div class="col-2 col-md-4 creargrupo_center">
                                    <label class="text-muted " for="materia_nva">*Materia:</label>
                                </div>
                                <div class="col-10 col-md-8">
                                    <input type="text" class="form-control" id="materia_nva" name="materia_nva" placeholder="Escriba la Materia que imparte">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="row mt-2">
                                <div class="col-2 col-md-4 creargrupo_center">
                                    <label class="text-muted " for="grupo_nvo">*Grupo:</label>
                                </div>
                                <div class="col-10 col-md-8">
                                    <input type="text" class="form-control" id="grupo_nvo" name="grupo_nvo" placeholder="Escriba el grupo">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="text-muted">
                    <div class="row">
                        <div class="col-12 col-md-8 ">
                            <label class="text-muted" for="min_asis_nvo">% Minimo de asistencia:</label>
                            <cite class="text-info small" for="min_asis_nvo"> (Si no hay minimo dejar 0)</cite>
                        </div>
                        <div class="col-12 col-md-4">
                            <input type="number" class="form-control" id="min_asis_nvo" name="min_asis_nvo"  value="0">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-8 ">
                            <label class="text-muted" for="retardos_num">Retardos que hacen falta:</label>
                            <cite class="text-info small" for="retardos_num">(Dejar 1, el retardo se cuenta como falta. 0 no hay tolerancia de retardo)</cite>
                        </div>
                        <div class="col-12 col-md-4">
                            <input type="number" class="form-control" id="retardos_num" name="retardos_num"  value="0">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-8 ">
                            <label class="text-muted" for="no_clases">Clases estimadas:</label>
                            <cite class="text-info small" for="no_clases">(0 para calcular sobre pase de lista realizados)</cite>
                        </div>
                        <div class="col-12 col-md-4">
                            <input type="number" class="form-control" id="no_clases" name="no_clases"  value="0">
                        </div>
                    </div>
                    <hr class="text-muted">
                    <div class="row">
                        <div class="col-12 col-md-5">
                            <label class="text-muted" for="name">Días:</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="LUN" id="lunes" name="dias[]">
                                <label class="form-check-label text-muted" for="lunes">Lun</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="MAR" id="martes" name="dias[]">
                                <label class="form-check-label text-muted" for="martes">Mar</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="MIE" id="miercoles" name="dias[]">
                                <label class="form-check-label text-muted" for="miercoles">Mier</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="JUE" id="jueves" name="dias[]">
                                <label class="form-check-label text-muted" for="jueves">Jue</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="VIE" id="viernes" name="dias[]">
                                <label class="form-check-label text-muted" for="viernes">Vier</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="SAB" id="sabado" name="dias[]">
                                <label class="form-check-label text-muted" for="sabado">Sab</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="DOM" id="domingo" name="dias[]">
                                <label class="form-check-label text-muted" for="domingo">Dom</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-7">
                            <div class="row mt-2 mb-2">
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="chkPOrcent" name="chkPOrcent">
                                        <label class="form-check-label text-muted small" for="chkPOrcent"> El porcentaje contara para la calificación final </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-4 creargrupo_center">
                                                    <label class="form-check-label text-muted" for="valor_cal">Valor:</label>
                                                </div>
                                                <div class="col-8 creargrupo_center">
                                                    <input type="number" class="form-control" id="valor_cal" name="valor_cal"  value="0">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="radioPts" id="10Pts" value="10" checked>
                                                <label class="form-check-label text-muted" for="10Pts"> /10 Puntos </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="radioPts" id="100Pts" value="100">
                                                <label class="form-check-label text-muted" for="100Pts">/100 Porciento </label>
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
                            <label class="text-muted " for="code_invitacion">Código de invitación:</label>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="row">
                                <div class="col-7 col-md-8 creargrupo_center">
                                    <input type="text" class="form-control" id="code_invitacion" name="code_invitacion" readonly>
                                </div>
                                <div class="col-5 col-md-4 creargrupo_center justify-content-center">
                                    <button type="button" class="btn btn-primary btn-sm" onclick="changeKeys();">Generar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row creargrupo_center mb-3">
                        <div class="col-12">
                            <label class="text-muted " for="code_invitacion_md5">Link de invitación:</label>
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control" id="code_invitacion_md5" name="code_invitacion_md5" readonly>
                        </div>
                    </div>
                    <div class="row d-none">
                        <div class="col-12 col-md-4">
                            <label class="text-muted " for="correos_send">Correos:</label>
                        </div>
                        <div class="col-12 col-md-8">
                            <textarea class="form-control" id="correos_send" name="correos_send" rows="2" placeholder="Escriba los correos separados por comas..."></textarea>
                        </div>
                    </div>
                    <hr class="text-muted">
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-success">Crear grupo</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
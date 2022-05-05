<!-- Modal periodos -->
<div class="modal fade" id="modal_reporte_individual" tabindex="-1" aria-labelledby="modal_vista_justificante" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reporte individual</h5>
                <button type="button" class="btn-close btnClose_modal" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-12 pb-3"> 
                        <div class="card class_card" role="button">
                            <div class="card-body">
                                <div class="row" style="display: flex;align-items: center;">
                                    <div class="col-12 col-md-2 mb-2" style="display: flex;justify-content: center;align-items: center;">
                                        <img class="circular_square " src="../assets/img/defaultAvatar.webp" width="60" height="60" alt="Avatar"></img>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="row mb-1">
                                            <div class="col text-dark">
                                                <h6 class="mb-0" style="display: flex;justify-content: flex-start;">
                                                    <span class="position-relative mt-2 p-2 end-1 start-1 translate-middle bg-success border border-light rounded-circle">
                                                    <span class="visually-hidden">New alerts</span>
                                                    </span>
                                                    <span class="visually-hidden">New alerts</span>
                                                </span>
                                                    <strong>{Nombre del alumno}</strong>
                                                </h6>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <h6 class="text-muted mb-0"><strong>90% Asistencia</strong></h6>
                                        <p class="text-muted mb-0">0.5pts / 3.0pts</p>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12 col-md-6">
                                        <div class="row">
                                            <div class="col-12 col-md-4">
                                               <div class="text-center">
                                                    <h5 class="">Asistencias</h5>
                                                    <h5 class="asfalre" style="color: green;">30</h5>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="text-center">
                                                    <h5 class="">Faltas</h5>
                                                    <h5 class="asfalre" style="color: red;">30</h5>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="text-center">
                                                    <h5 class="">Retardos</h5>
                                                    <h5 class="asfalre" style="color: orange;">30</h5> 
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <h6><strong>Pases de lista realizados</strong></h6>
                    <div class="mb-3">
                        <table class="table table-bordered order-table display nowrap table-responsive mt-3" id="tableEquiposA" cellspacing="0" width="100%">
                            <thead>
                            <tr class="text-center">
                                <th>FECHA</th>
                                <th>INICIO</th>
                                <th>ASISTENCIA</th>
                                <th>JUSTIFICANTE</th>
                            </tr>
                            </thead>
                            <tbody id="">
                                <tr class="text-center">
                                    <td data-label="">1 DE MARZO DE 2022</td>
                                    <td data-label="">8:13</td>
                                    <td data-label="" class="creargrupo_center">
                                        <i class="fas fa-check-circle me-3" style="color: green;"></i>
                                        PRESENTE
                                    </td>
                                    <td data-label="">
                                        <a href="">
                                            Ver
                                        </a>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td data-label="">1 DE MARZO DE 2022</td>
                                    <td data-label="">8:13</td>
                                    <td data-label="" class="creargrupo_center">
                                        <i class="fas fa-times-circle me-3" style="color: green;"></i>
                                        FALTA &nbsp; <small class="text-muted">(Falta justificada)</small>
                                    </td>
                                    <td data-label="">
                                        <a href="">
                                            Ver
                                        </a>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td data-label="">1 DE MARZO DE 2022</td>
                                    <td data-label="">8:13</td>
                                    <td data-label="" class="creargrupo_center">
                                        <i class="far fa-clock me-3" style="color: blue;"></i>
                                        RETARDO
                                    </td>
                                    <td data-label="">
                                        <a href="">
                                            Ver
                                        </a>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td data-label="">1 DE MARZO DE 2022</td>
                                    <td data-label="">8:13</td>
                                    <td data-label="" class="creargrupo_center">
                                        <i class="fas fa-times-circle me-3" style="color: red;"></i>
                                        FALTA &nbsp; <small class="text-muted">(Esperando justificante)</small>
                                    </td>
                                    <td data-label="">
                                        <a href="">
                                            Ver
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Eventos</h1>
                    </div>                
                </div>
            </div>
        </div>
    <!-- Fin content-header -->

    <!-- Contenido principal -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- Boton añadir Usuario -->
                        <div class="col-12 d-flex justify-content-center aling-items-center">
                            <button type="button" class="btn btn-app bg-success" id="abrirModalAñadirEvento">
                                <i class="fas fa-users"></i> Añadir evento
                            </button>                        
                        </div>
                    <!-- Modal "añadir Usuario" -->
                        <div class="modal fade" id="modalAñadirEvento">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <h4 class="modal-title">Añadir Evento</h4>
                                        <button type="button" style="color: white;" class="close" id="cerrarModalAñadirEvento" onclick="limpiarInputsAñadirEvento()">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body bg-secondary ">
                                        <form id="formularioAñadirEvento">
                                            <div class="card-body row">
                                                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                                                    <label for="AñadirNombreEvento">Nombre del evento</label>
                                                    <input type="text" name="NameAñadirNombreEvento" class="form-control" id="AñadirNombreEvento" placeholder="Ingrese el nombre del evento">
                                                </div>                                                
                                                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                                                    <label for="AñadirFechaInicio">Fecha inicio</label>
                                                    <input type="date" name="AñadirFechaInicio" class="form-control" id="AñadirFechaInicio" placeholder="Ingrese la fecha de inicio">
                                                </div>                                                
                                                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                                                    <label for="AñadirHoraInicio">Hora inicio</label>
                                                    <input type="time" name="AñadirHoraInicio" class="form-control" id="AñadirHoraInicio" placeholder="Ingrese la hora de inicio">
                                                </div>                                                
                                                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                                                    <label for="AñadirFechaFin">Fecha fin</label>
                                                    <input type="date" name="AñadirFechaFin" class="form-control" id="AñadirFechaFin" placeholder="Ingrese la fecha de fin">
                                                </div>                                                
                                                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                                                    <label for="AñadirHoraFin">Hora inicio</label>
                                                    <input type="time" name="AñadirHoraFin" class="form-control" id="AñadirHoraFin" placeholder="Ingrese la hora de fin">
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                                                    <label for="AñadirLugarEvento">Lugar del evento</label>
                                                    <input type="text" name="AñadirLugarEvento" class="form-control" id="AñadirLugarEvento" placeholder="Ingrese el lugar del evento">
                                                </div>            
                                            </div>
                                            <div class="card-footer">
                                              <button type="submit" class="btn btn-primary mx-5 my-5" id="botonAñadirEvento">Guardar</button>
                                              <button type="button" class="btn btn-danger" id="botonLimpiarInputsAñadirEvento" onclick="limpiarInputsAñadirEvento()">Limpiar registro</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- Modal "editar Usuario" -->
                        <div class="modal fade" id="modalEditarEvento">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <h4 class="modal-title">Editar Evento</h4>
                                        <button type="button" style="color: white;" class="close" id="cerrarModalEditarEvento" onclick="limpiarInputsEditarEvento()">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body bg-secondary ">
                                        <form id="formularioEditarEvento">
                                            <input type="text" style="display: none;" id="EditarIdEvento">
                                            <div class="card-body row">
                                                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                                                    <label for="EditarNombreEvento">Nombre del evento</label>
                                                    <input type="text" name="EditarNombreEvento" class="form-control" id="EditarNombreEvento" placeholder="Ingrese el nombre del evento">
                                                </div>                                                
                                                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                                                    <label for="EditarFechaInicio">Fecha inicio</label>
                                                    <input type="date" name="EditarFechaInicio" class="form-control" id="EditarFechaInicio" placeholder="Ingrese la fecha de inicio">
                                                </div>                                                
                                                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                                                    <label for="EditarHoraInicio">Hora inicio</label>
                                                    <input type="time" name="EditarHoraInicio" class="form-control" id="EditarHoraInicio" placeholder="Ingrese la hora de inicio">
                                                </div>                                                
                                                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                                                    <label for="EditarFechaFin">Fecha fin</label>
                                                    <input type="date" name="EditarFechaFin" class="form-control" id="EditarFechaFin" placeholder="Ingrese la fecha de fin">
                                                </div>                                                
                                                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                                                    <label for="EditarHoraFin">Hora inicio</label>
                                                    <input type="time" name="EditarHoraFin" class="form-control" id="EditarHoraFin" placeholder="Ingrese la hora de fin">
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-4 form-group">
                                                    <label for="EditarLugarEvento">Lugar del evento</label>
                                                    <input type="text" name="EditarLugarEvento" class="form-control" id="EditarLugarEvento" placeholder="Ingrese el lugar del evento">
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                              <button type="submit" class="btn btn-primary mx-5 my-5" id="botonEditarEvento">Guardar</button>
                                              <button type="button" class="btn btn-danger" id="botonLimpiarInputsEditarEvento" onclick="limpiarInputsEditarEvento()">Limpiar registro</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- Tarjeta colapsable de filtrar búsqueda -->                
                    <!-- Tarjeta colapsable con DataTable de usuarios -->                
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Eventos</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">                                        
                                            <table id="tablaEventos" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Codigo</th>
                                                        <th>Nombre del evento</th>
                                                        <th>Fecha inicio</th>
                                                        <th>Hora inicio</th>
                                                        <th>Fecha fin</th>
                                                        <th>Hora fin</th>
                                                        <th>Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Codigo</th>
                                                        <th>Nombre del evento</th>
                                                        <th>Fecha inicio</th>
                                                        <th>Hora inicio</th>
                                                        <th>Fecha fin</th>
                                                        <th>Hora fin</th>
                                                        <th>Opciones</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                </div>                      
            </div>
        </div>
    <!-- Fin contenido principal -->
</div>

<!-- Scripts Necesarios para funcionamiento -->
    <!-- Recursos necesarios para la validación de inputs -->
        <script src="../../js/jQuery/jquery.validate.min.js"></script>
        <script src="../../js/jQuery/additional-methods.min.js"></script>
    <!-- DataTables & plugins -->
        <script src="../../plugins/dataTables/jquery.dataTables.min.js"></script>
        <script src="../../plugins/dataTables/dataTables.bootstrap4.min.js"></script>
        <script src="../../plugins/dataTables/dataTables.responsive.min.js"></script>
        <script src="../../plugins/dataTables/responsive.bootstrap4.min.js"></script>
        <script src="../../plugins/dataTables/dataTables.buttons.min.js"></script>                
        <script src="../../plugins/dataTables/buttons.bootstrap4.min.js"></script>
        <script src="../../plugins/jzip/jszip.min.js"></script>                
        <script src="../../plugins/pdfMake/pdfmake.min.js"></script>
        <script src="../../plugins/pdfMake/vfs_fonts.js"></script>
        <script src="../../plugins/dataTables/buttons.html5.min.js"></script>
        <script src="../../plugins/dataTables/buttons.print.min.js"></script>
        <script src="../../plugins/dataTables/buttons.colVis.min.js"></script>
    <!-- Script abrir/cerrar modales -->    
        <script src="../../js/jQuery/abrirCerrarModales/abrirCerrarModalesUsuarios.js"></script>
    <!-- Script para la validación de inputs de formularios -->
        <script src="../../js/validations/validacionUsuarios.js"></script>
    <!-- Script para limpiar campos de todos los Formularios de registro -->
        <script src="../../js/limpiarInputs/limpiarInputs.js"></script>
    <!-- Script para añadir usuario -->
        <script src="../../js/jQuery/registroAjax/añadirUsuario.js"></script>
    <!-- Script para editar usuario -->
        <script src="../../js/jQuery/editarAjax/editarUsuario.js"></script>
    <!-- Script para eliminar usuario -->
        <script src="../../js/jQuery/eliminarAjax/eliminarUsuario.js"></script>
    <!-- Iniciar DataTable -->
        <script src="../../js/jQuery/dataTables/dataTableUsuarios.js"></script>
    <!-- Filtros de busqueda -->
        <script src="../../js/jQuery/dataTables/filtroBusquedaDataTable/busquedaDataTableUsuarios.js"></script>
<!-- Fin Scripts Necesarios para funcionamiento -->                        
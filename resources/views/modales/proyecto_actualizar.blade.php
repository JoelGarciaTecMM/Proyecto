<form id = "formEditarProyecto">
    @csrf
    <div class="modal fade" id="actualizarProyecto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar proyecto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class = "row">
                        <div class = "mb-2"><span>Nombre del proyecto:</span></div>
                        <div class = "mb-3"><input type="text" id = "epNombre" name = "nombre" class = "form-control" placeholder="Escribe aqui..."></div>
                    </div>
                    <div class = "row" >
                        <div class = "mb-2"><span>Cliente:</span></div>
                        <div class = "mb-3 me-3">
                            <select name="cliente" id="epCliente" class = "form-control">
                                <option selected >Seleciones una opciones</option>
                            </select>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "mb-2 row">
                            <div class = "col"><span>Fecha inicio:</span></div>
                            <div class = "col"><span>Fecha Fin:</span></div>
                        </div>
                        <div class = "mb-3 row">
                            <div class = "mb-2 row">
                                <div class = "col"><input type="date" class = "form-control" name="fechaInicio" id="epFechaInicio"></div>
                                <div class = "col"><input type="date" class = "form-control" name="fechaFin" id="epFechaFin"></div>
                            </div>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "mb-2"><span>Decripcion:</span></div>
                        <div class = "mb3">
                        <textarea class = "form-control " name="descripcion" id="epDecripcion" placeholder="Escribe aqui..."></textarea>
                        </div>
                    </div>
                    <div class = "row" >
                        <div class = "mb-2"><span>Estado:</span></div>
                        <div class = "mb-3 me-3">
                            <select name="estado" id="epEstado" class = "form-control">
                                <option selected >Seleciones una opciones</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" id = "epId" nombre = "idProyecto" class = "form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </div>
        </div>
    </div>

</form>
<form id = "formNuevoProyecto">
    @csrf
    <div class="modal fade" id="agregarProyecto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Proyecto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class = "row">
                        <div class = "mb-2"><span>Nombre del proyecto:</span></div>
                        <div class = "mb-3"><input type="text" name = "nombre" id = "npNombre" class = "form-control" placeholder="Escribe aqui..." required></div>
                    </div>
                    <div class = "row" >
                        <div class = "mb-2"><span>Cliente:</span></div>
                        <div class = "mb-3 me-3">
                            <select name="cliente" id="npCliente" class = "form-control" required>
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
                                <div class = "col"><input type="date" class = "form-control" name="fechaInicio" id="npFechaInicio" required></div>
                                <div class = "col"><input type="date" class = "form-control" name="fechaFin" id="npFechaFin" required></div>
                            </div>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "mb-2"><span>Decripcion:</span></div>
                        <div class = "mb3">
                        <textarea class = "form-control " name="descripcion" id="npDescripcion" placeholder="Escribe aqui..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </div>
        </div>
    </div>

</form>
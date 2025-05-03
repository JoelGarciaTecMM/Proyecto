<form id = "formEditarTarea_proyecto">
    @csrf
    <div class="modal fade" id="editarTarea_proyecto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Cliente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id = "etpId" name = "id">
                    <div class = "row">
                        <div class = "mb-2"><span>Nombre:</span></div>
                        <div class = "mb-3"><input type="text" name = "nombre" id = "etpNombre" class = "form-control" placeholder="Escribe aqui..." required></div>
                    </div>
                    <div class = "row">
                        <div class = "mb-2"><span>Descripcion:</span></div>
                        <div class = "mb-3"><input type="text" name = "descripcion" id = "etpDescripcion" class = "form-control" placeholder="Escribe aqui..." required></div>
                    </div>
                    <div class = "row" >
                        <div class = "mb-2"><span>Usuario:</span></div>
                        <div class = "mb-3 me-3">
                            <select name="usuario" id="etpUsuario" class = "form-control" required>
                                <option selected >Seleciones una opciones</option>
                                <option value="1">prueba 1</option>
                                <option value="2">prueba 2</option>
                                <option value="3">prueba 3</option>
                            </select>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "mb-2 row">
                            <div class = "col"><span>Caducidad:</span></div>
                        </div>
                        <div class = "mb-3 row">
                            <div class = "mb-2 row">
                                <div class = "col"><input type="date" class = "form-control" name="caducidad" id="etpCaducidad" required></div>
                            </div>
                        </div>
                    </div>
                    <div class = "row" >
                        <div class = "mb-2"><span>Prioridad:</span></div>
                        <div class = "mb-3 me-3">
                            <select name="prioridad" id="etpPrioridad" class = "form-control" required>
                                <option selected >Seleciones una opciones</option>
                                <option value="1">prueba 1</option>
                                <option value="2">prueba 2</option>
                                <option value="3">prueba 3</option>
                            </select>
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
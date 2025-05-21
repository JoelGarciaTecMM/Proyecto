<form id = "formNuevoTarea_proyecto">
    @csrf
    <div class="modal fade" id="agregarTarea_proyecto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Proyecto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class = "row">
                        <div class = "mb-2"><span>Nombre:</span></div>
                        <div class = "mb-3"><input type="text" name = "nombre" id = "ntpNombre" class = "form-control" placeholder="Escribe aqui..." required></div>
                    </div>
                    <div class = "row">
                        <div class = "mb-2"><span>Descripcion:</span></div>
                        <div class = "mb-3"><input type="text" name = "descripcion" id = "ntpDescripcion" class = "form-control" placeholder="Escribe aqui..." required></div>
                    </div>
                    <div class = "row" >
                        <div class = "mb-2"><span>Usuario:</span></div>
                        <div class = "mb-3 me-3">
                            <select name="usuario" id="ntpUsuario" class = "form-control" required>
                                <option selected >Seleciones una opciones</option>

                            </select>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "mb-2 row">
                            <div class = "col"><span>Caducidad:</span></div>
                        </div>
                        <div class = "mb-3 row">
                            <div class = "mb-2 row">
                                <div class = "col"><input type="date" class = "form-control" name="caducidad" id="ntpCaducidad" required></div>
                            </div>
                        </div>
                    </div>
                    <div class = "row" >
                        <div class = "mb-2"><span>Prioridad:</span></div>
                        <div class = "mb-3 me-3">
                            <select name="prioridad" id="ntpPrioridad" class = "form-control" required>

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
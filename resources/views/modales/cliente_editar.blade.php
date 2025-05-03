<form id = "formEditarCliente">
    @csrf
    <div class="modal fade" id="editarCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Cliente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id = "ecId" name = "id">
                    <div class = "row">
                        <div class = "mb-2"><span>Nombre:</span></div>
                        <div class = "mb-3"><input type="text" name = "nombre" id = "ecNombre" class = "form-control" placeholder="Escribe aqui..." required></div>
                    </div>
                    <div class = "row">
                        <div class = "mb-2"><span>Apellidos:</span></div>
                        <div class = "mb-3"><input type="text" name = "apellido" id = "ecApellido" class = "form-control" placeholder="Escribe aqui..." required></div>
                    </div>
                    <div class = "row">
                        <div class = "mb-2"><span>Correo:</span></div>
                        <div class = "mb-3"><input type="text" name = "correo" id = "ecCorreo" class = "form-control" placeholder="Escribe aqui..." required></div>
                    </div>
                    <div class = "row">
                        <div class = "mb-2"><span>Telefono:</span></div>
                        <div class = "mb-3"><input type="number" name = "telefono" id = "ecTelefono" class = "form-control" placeholder="Escribe aqui..." required></div>
                    </div>
                    <div class = "row">
                        <div class = "mb-2"><span>Curp:</span></div>
                        <div class = "mb-3"><input type="text" name = "curp" id = "ecCurp" class = "form-control" placeholder="Escribe aqui..." required></div>
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
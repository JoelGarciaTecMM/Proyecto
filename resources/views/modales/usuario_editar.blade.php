<form action="" id = "formEditarUsuario">
    @csrf
    <div class="modal fade" id="editarUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Usuario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id = "euId" nombre = "id">
                    <div class = "row">
                        <div class = "mb-2"><span>Nombre:</span></div>
                        <div class = "mb-3"><input type="text" name = "nombre" id = "euNombre" class = "form-control" placeholder="Escribe aqui..." required></div>
                    </div>
                    <div class = "row">
                        <div class = "mb-2"><span>Apellido:</span></div>
                        <div class = "mb-3"><input type="text" name = "apellido" id = "euApellido" class = "form-control" placeholder="Escribe aqui..." required></div>
                    </div>
                    <div class = "row">
                        <div class = "mb-2"><span>Correo:</span></div>
                        <div class = "mb-3"><input type="email" name = "correo" id = "euCorreo" class = "form-control" placeholder="Escribe aqui..." required></div>
                    </div>
                    <div class = "row">
                        <div class = "mb-2"><span>Contraseña:</span></div>
                        <div class = "mb-3"><input type="password" name = "contraseña" id = "euContraseña" class = "form-control" placeholder="Escribe aqui..."></div>
                    </div>
                    <div class = "row" >
                        <div class = "mb-2"><span>Tipo:</span></div>
                        <div class = "mb-3 me-3">
                            <select name="tipoUsuario" id="euTipoUsuario" class = "form-control" required>
                                <option selected >Seleciones una opciones</option>
                                <option value="1">Administrador</option>
                                <option value="2">Operador</option>
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
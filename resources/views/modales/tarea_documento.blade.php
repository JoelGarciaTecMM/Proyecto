<form action="" id = "formDocumentoTarea">
    @csrf
    <div class="modal fade" id="documentoTarea" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Usuario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="idTarea" nombre="idTarea">
                    <div class = "row mb-5">
                        <div class = "mb-2"><span>documento:</span></div>
                        <div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">

                                </div>
                                <div class="col-sm-12 col-md-2 col-lg-12">
                                    <div class="col-xl-12 text">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-2 mt-xl-0 mt-4 ">
                                                <div class="card text-center">
                                                    <div class="card-header p-3 pb-0">
                                                        <h6 class="mb-0"></h6>
                                                    </div>
                                                    <div id = "proyectosClienteContenido">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class = "row" >
                        <div class = "mb-2"><span>Subir documento:</span></div>
                        <input class = "form-control" type="file" name="documento" id="documento">
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
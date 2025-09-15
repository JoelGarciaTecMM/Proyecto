

    //funcion para cambiar la pagina

    function changePage(page){
        var pagResume = document.getElementById("pagResume");
        var pagProyectos = document.getElementById("pagProyectos");
        var pagDocumentos = document.getElementById("pagDocumentos");
        if (page == "resumen"){
            pagResume.style.display = "";
            pagProyectos.style.display = "none";
            pagDocumentos.style.display = "none";
            infoCliente();
            fillProyectosActivos();
            filldocumentosGeneral();
        }
        else if (page == "proyectos"){
            pagResume.style.display = "none";
            pagProyectos.style.display = "";
            pagDocumentos.style.display = "none";
            fillProyectosTodos();
        }
        else if (page == "documentos"){
            pagResume.style.display = "none";
            pagProyectos.style.display = "none";
            pagDocumentos.style.display = "";
            fillDocumentosTodos();
        }
        else ;
    }

    function infoCliente(){
        var datos = {
            'id': id_cliente,
        }
        $.ajax ({
            type: "POST",
            url: ruta_get_infoGeneral,
            data: datos,
            async: false,
    
            beforeSend: function(objeto) {
            //$("#datatable-search").html("Mensaje: Cargando...");
            },
            success: function(datos) {
            console.log (datos);
            $("#nombreCliente").html(datos[0].nombre+ " " +datos[0].apellido);
            $("#correoCliente").html(datos[0].correo);
            $("#telefonoCliente").html(datos[0].telefono);
            $("#curpCliente").html(datos[0].curp);
            }
        });
    }
    infoCliente();

    function fillProyectosActivos(){
        var inn = "";
        var datos = {
            'idCliente': id_cliente,
        }
        $.ajax ({
            type: "POST",
            url: ruta_get_infoProyectosActivos,
            data: datos,
            async: false,
    
            beforeSend: function(objeto) {
            //$("#datatable-search").html("Mensaje: Cargando...");
            },
            success: function(datos) {
            console.log (datos);
                if (datos.length> 1) var t = 1
                else t = datos.length;
                $("#proyectosClienteResumen").html("");
                for (var i = 0; i < t; i ++){
                        inn += '<div class="card-body border-radius-lg p-3" >'+
                            '<a href="./tareas_proyecto?id='+datos[i].id+'" type= "buttom" target="_blank"> '+
                                '<div class="d-flex">'+
                                    '<div class="icon icon-shape bg-gradient-dark shadow text-center">'+
                                        '<i class="material-icons opacity-10">task</i>'+
                                    '</div>'+
                                    '<div class="ms-3">'+
                                        '<div class="numbers">'+
                                            '<h6 class="mb-1 text-dark text-sm">'+datos[i].nombre+'</h6>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</a>'+
                        '</div>';
                }
                //console.log(inn);
                $("#proyectosClienteResumen").html(inn);
            }
        });
    }
    fillProyectosActivos();

    function filldocumentosGeneral(){
        var inn = "";
        var datos = {
            'idCliente': id_cliente,
        }
        $.ajax ({
            type: "POST",
            url: ruta_get_infoDocumentos,
            data: datos,
            async: false,
    
            beforeSend: function(objeto) {
            //$("#datatable-search").html("Mensaje: Cargando...");
            },
            success: function(datos) {
            console.log (datos);
                if (datos.length> 3) var t = 3
                else t = datos.length;
                $("#documentosClienteResumen").html("");
                for (var i = 0; i < t; i ++){
                        inn += '<div class="card-body border-radius-lg p-3" >'+
                            '<a href="..'+datos[i].ruta+'"  type= "buttom" target="_blank"> '+
                                '<div class="d-flex">'+
                                    '<div class="icon icon-shape bg-gradient-dark shadow text-center">'+
                                        '<i class="material-icons opacity-10">assignment</i>'+
                                    '</div>'+
                                    '<div class="ms-3">'+
                                        '<div class="numbers">'+
                                            '<h6 class="mb-1 text-dark text-sm">'+datos[i].nombre+'</h6>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</a>'+
                        '</div>';
                }
                //console.log(inn);
                $("#documentosClienteResumen").html(inn);
            }
        });
    }

    filldocumentosGeneral();

    function fillProyectosTodos(){
        var inn = "";
        var datos = {
            'idCliente': id_cliente,
        }
        $.ajax ({
            type: "POST",
            url: ruta_get_infoProyectos,
            data: datos,
            async: false,
    
            beforeSend: function(objeto) {
            //$("#datatable-search").html("Mensaje: Cargando...");
            },
            success: function(datos) {
            console.log (datos);

                $("#proyectosClienteContenido").html("");
                for (var i = 0; i < datos.length; i ++){
                        inn += '<div class="card-body border-radius-lg p-3" >'+
                            '<a href="./tareas_proyecto?id='+datos[i].id+'" type= "buttom" target="_blank"> '+
                                '<div class="d-flex">'+
                                    '<div class="icon icon-shape bg-gradient-dark shadow text-center">'+
                                        '<i class="material-icons opacity-10">task</i>'+
                                    '</div>'+
                                    '<div class="ms-3">'+
                                        '<div class="numbers">'+
                                            '<h6 class="mb-1 text-dark text-sm">'+datos[i].nombre+'</h6>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</a>'+
                        '</div>';
                }
                console.log(inn);
                $("#proyectosClienteContenido").html(inn);
            }
        });
    }

    function fillDocumentosTodos(){
        var inn = "";
        var datos = {
            'idCliente': id_cliente,
        }
        $.ajax ({
            type: "POST",
            url: ruta_get_infoDocumentos,
            data: datos,
            async: false,
    
            beforeSend: function(objeto) {
            //$("#datatable-search").html("Mensaje: Cargando...");
            },
            success: function(datos) {
            console.log (datos);

                $("#documentosClienteContenido").html("");
                for (var i = 0; i < datos.length; i ++){
                        inn += '<div class="card-body border-radius-lg p-3" >'+
                            '<a href="..'+datos[i].ruta+'"  type= "buttom" target="_blank"> '+
                                '<div class="d-flex">'+
                                    '<div class="icon icon-shape bg-gradient-dark shadow text-center">'+
                                        '<i class="material-icons opacity-10">assignment</i>'+
                                    '</div>'+
                                    '<div class="ms-3">'+
                                        '<div class="numbers">'+
                                            '<h6 class="mb-1 text-dark text-sm">'+datos[i].nombre+'</h6>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</a>'+
                        '</div>';
                }
                //console.log(inn);
                $("#documentosClienteContenido").html(inn);
            }
        });
    }

    $("#uploadUserFile").on("submit",function(event){
    event.preventDefault();
    var datos = new FormData(this);
    datos.append("idCliente", id_cliente);
    $.ajax ({
        type: "post",
        url: ruta_upload_document,
        data: datos,
        processData: false,
        contentType: false,

        beforeSend: function(objeto) {
        //$("#datatable-search").html("Mensaje: Cargando...");
        },
        success: function(datos) {
        console.log(datos);
        fillDocumentosTodos();
        document.getElementById('uploadUserFile').reset();
        }
    });
})


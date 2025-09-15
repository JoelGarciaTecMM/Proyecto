var arrDatos = "";
const modalNuevo = new bootstrap.Modal ("#agregarTarea_proyecto");
const modalEditar = new bootstrap.Modal ("#editarTarea_proyecto");
const modalDocumento = new bootstrap.Modal ("#documentoTarea");
    let dataTableIsInicialized = false;
    let dataTable;

    const dataTableOptions ={
        destroy: true,
        language: {
            lengthMenu: "Mostrar _MENU_ registros por página",
            zeroRecords: "Ningún usuario encontrado",
            info: "Mostrando de _START_ a _END_ de un total de _TOTAL_ registros",
            infoEmpty: "Ningún usuario encontrado",
            infoFiltered: "(filtrados desde _MAX_ registros totales)",
            search: "Buscar:",
            loadingRecords: "Cargando...",
            paginate: {
                first: "Primero",
                last: "Último",
                next: "Siguiente",
                previous: "Anterior"
            },
        }
    };

//funcion para mostrar los proyectos
function showTP(){
    let datos = {"id" : id_proyecto,};
    if (dataTableIsInicialized == true) dataTable.destroy();
    $.ajax ({
    type: "POST",
    url: ruta_get_tareasProyecto,
    data: datos,
    async: false,

        beforeSend: function(objeto) {
        //$("#datatable-search").html("Mensaje: Cargando...");
        },
        success: function(result) {
            console.log(result);
            arrDatos = result
            $("#tbodyTareasProyecto").html("");
            for (var i = 0; i < arrDatos.length; i ++){
                var content = "<tr>"+ 
                "<td>"+arrDatos[i].id+"</td>"+
                "<td>"+arrDatos[i].nombre+"</td>"+
                "<td>"+arrDatos[i].descripcion+"</td>"+
                "<td>"+arrDatos[i].nombreEstado+"</td>"+
                "<td>"+arrDatos[i].caducidad+"</td>"+
                "<td>"+arrDatos[i].nombreUsuario+"</td>"+
                "<td>"+arrDatos[i].nombrePrioridad+"</td>"+
                '<td class = "text-sm">'+
                    '<a type = "button" name = "'+i+'" onclick = "showEditarCliente(this)" ><i class="material-icons opacity-10">edit</i></a>'+
                    '<a type = "button" name = "'+i+'" onclick = "eliminarCliente(this)" ><i class="material-icons opacity-10">delete</i></a>'+
                    '<a type = "button" name = "'+i+'" onclick = "showDocumentoTarea('+arrDatos[i].id+')" ><i class="material-icons opacity-10">upload_file</i></a>'+
                '</td>'+
                "</tr>"

                $("#tbodyTareasProyecto").append(content);
            }
            dataTable = $('#dataTable-tareasProyecto').DataTable(dataTableOptions);
            dataTableIsInicialized = true;

            fillUsuario();
            fillPrioridad();
            fillEstado();
        }
    });
}

showTP();


//function para crear proyectos

$("#formNuevoTarea_proyecto").on("submit",function(event){
    event.preventDefault();
    var datos = new FormData(this);
    console.log (datos);
    datos.append ("idProyecto",id_proyecto);

    $.ajax ({
        type: "POST",
        url: ruta_post_tareasProyecto,
        data: datos,
        processData: false,
        contentType: false,

        beforeSend: function(objeto) {
        //$("#datatable-search").html("Mensaje: Cargando...");
        },
        success: function(datos) {
        //console.log (datos);
        showTP();
        modalNuevo.hide();
        if (datos == 1)alertsuccess ("Completado", "Tarea creada con exito");
        else alertdanger ("Error","Error desconocido intente de nuevo");
        //document.getElementById("formNuevoCliente").reset();
        }
    });
})

//funcion para mostrar la informacion a editar

function showEditarCliente(item){
    var p = item.name;
    console.log(arrDatos);
    $("#etpId").val(arrDatos[p].id);
    $("#etpNombre").val(arrDatos[p].nombre);
    $("#etpDescripcion").val(arrDatos[p].descripcion);
    $("#etpUsuario").val(arrDatos[p].idUsuario);
    //console.log(document.getElementById("epCliente"));
    $("#etpCaducidad").val(arrDatos[p].caducidad);
    $("#etpPrioridad").val(arrDatos[p].prioridad);
    $("#etpEstado").val(arrDatos[p].estado);
    modalEditar.show();
}

//funcion para editar la informacion

$("#formEditarTarea_proyecto").on("submit",function(event){
    event.preventDefault();
    var datos = new FormData(this);
    //datos.append("idCliente",$("#ecId").val());
    $.ajax ({
        type: "post",
        url: ruta_put_tareasProyecto,
        data: datos,
        processData: false,
        contentType: false,

        beforeSend: function(objeto) {
        //$("#datatable-search").html("Mensaje: Cargando...");
        },
        success: function(datos) {
        console.log(datos);
        showTP();
        modalEditar.hide();
        if (datos == 1)alertsuccess ("Completado", "Tarea actualizada con exito");
        else alertdanger ("Error","Error desconocido intente de nuevo");
        }
    });
})


//function para eliminar proyecto

function eliminarCliente(item){
    var idCliente = arrDatos[item.name].id;
    var datos = new FormData();
    datos.append("id", idCliente);
    Swal.fire({
    title: "¿Eliminar la tarea?",
    text: "No se podran revertir estos cambios",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#19d939",
    cancelButtonColor: "#d33",
    cancelButtonText: "Cancelar",
    confirmButtonText: "Eliminar"
    }).then((result) => {
    if (result.isConfirmed) {
        $.ajax ({
            type: "post",
            url: ruta_delete_tareasProyecto,
            data: datos,
            processData: false,
            contentType: false,

            beforeSend: function(objeto) {
            //$("#datatable-search").html("Mensaje: Cargando...");
            },
            success: function(datos) {
                console.log (datos);
                showTP();
                if (datos == 1)alertsuccess ("Completado", "Tarea Eliminada con exito");
                else alertdanger ("Error","Error desconocido intente de nuevo");
            }
        });
    }
    });
}



function fillUsuario(){
    var inn = '<option selected >Seleciones una opciones</option>';
    $.ajax ({
    type: "GET",
    url: usuarios_todos,
    async: false,

        beforeSend: function(objeto) {
        //$("#datatable-search").html("Mensaje: Cargando...");
        },
        success: function(result) {
            console.log (result);
            $("#ntpUsuario").html("");
            $("#etpUsuario").html("");
            for (var i = 0; i < result.length; i ++){
                inn += "<option value='"+result[i].id+"'>"+result[i].nombre+"</option>";
            }
            console.log(inn);
            $("#ntpUsuario").html(inn);
            $("#etpUsuario").html(inn);
        }
    });
}

function fillPrioridad(){
    var inn = '<option selected >Seleciones una opciones</option>';
    $.ajax ({
    type: "GET",
    url: prioridad_todos,
    async: false,

        beforeSend: function(objeto) {
        //$("#datatable-search").html("Mensaje: Cargando...");
        },
        success: function(result) {
            console.log (result);
            $("#ntpPrioridad").html("");
            $("#etpPrioridad").html("");
            for (var i = 0; i < result.length; i ++){
                inn += "<option value='"+result[i].id+"'>"+result[i].nombre+"</option>";
            }
            console.log(inn);
            $("#ntpPrioridad").html(inn);
            $("#etpPrioridad").html(inn);
        }
    });
}

function fillEstado(){
    var inn = '<option selected >Seleciones una opciones</option>';
    $.ajax ({
    type: "GET",
    url: estado_tarea_todos,
    async: false,

        beforeSend: function(objeto) {
        //$("#datatable-search").html("Mensaje: Cargando...");
        },
        success: function(result) {
            console.log (result);
            $("#etpEstado").html("");
            for (var i = 0; i < result.length; i ++){
                inn += "<option value='"+result[i].id+"'>"+result[i].nombre+"</option>";
            }
            $("#etpEstado").html(inn);
        }
    });
}
var idTarea = ""
function showDocumentoTarea(obj){
    idTarea = obj;
    modalDocumento.show();
    console.log(obj);
    $("#idTarea").val(obj);
    getDocumentoTarea(obj);
}


function getDocumentoTarea(obj){
    var inn= "";
    var datos = 
        {
            "idTarea": obj,
        }

        $.ajax ({
        type: "post",
        data: datos,
        url: documentos_tarea,
        async: false,

            beforeSend: function(objeto) {
            //$("#datatable-search").html("Mensaje: Cargando...");
            },
            success: function(result) {
                console.log (result);
                $("#proyectosClienteContenido").html("");
                for (var i = 0; i < result.length; i ++){
                        inn += '<div class="card-body border-radius-lg p-3" >'+
                            '<a href="../'+ result[i].ruta+'"  type= "buttom" target="_blank"> '+
                                '<div class="d-flex">'+
                                    '<div class="icon icon-shape bg-gradient-dark shadow text-center">'+
                                        '<i class="material-icons opacity-10">assignment</i>'+
                                    '</div>'+
                                    '<div class="ms-3">'+
                                        '<div class="numbers">'+
                                            '<h6 class="mb-1 text-dark text-sm">'+result[i].nombre+'</h6>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="d-grid gap-2 d-md-flex justify-content-md-end">'+
                                    '<a type = "button" idtar = '+obj+' name = "'+result[i].id+'" onclick = "deleteDocumento(this)" ><i class="material-icons opacity-10">delete</i></a>'+
                                '</div>'+
                            '</a>'+
                        '</div>';
                }
                $("#proyectosClienteContenido").html(inn);
            }
        });

}

//funcion agregar documento
$("#formDocumentoTarea").on("submit",function(event){
    event.preventDefault();
    var datos = new FormData(this);
    datos.append("idTarea", idTarea);
    $.ajax ({
        type: "post",
        url: documentos_tarea_create,
        data: datos,
        processData: false,
        contentType: false,

        beforeSend: function(objeto) {
        //$("#datatable-search").html("Mensaje: Cargando...");
        },
        success: function(datos) {
        console.log(datos);
        showDocumentoTarea(idTarea);
        document.getElementById('formDocumentoTarea').reset();
        }
    });
})


function deleteDocumento(item){
    console.log (item.name);
    var datos = 
    {
        "id" : item.name,
    }
        $.ajax ({
        type: "post",
        url: documentos_tarea_delete,
        data: datos,

        beforeSend: function(objeto) {
        //$("#datatable-search").html("Mensaje: Cargando...");
        },
        success: function(datos) {
        console.log(datos);
        showDocumentoTarea(idTarea);
        }
    });
}






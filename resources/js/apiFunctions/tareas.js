var arrDatos = "", totalTareas = "", totalProyectos = "", idTarea = "";
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

//funcion para mostrar las tareas

function showTU(){
    var datos = {
        'idUsuario' : usuarioId, 
    }
    if (dataTableIsInicialized == true) dataTable.destroy();
    $.ajax ({
    type: "POST",
    url: ruta_get_tareas,
    data: datos,
    async: false,

        beforeSend: function(objeto) {
        //$("#datatable-search").html("Mensaje: Cargando...");
        },
        success: function(result) {
            console.log(result);
            arrDatos = result
            
            $("#tbodyTableTareasUsuario").html("");
            for (var i = 0; i < arrDatos.length; i ++){
                var content = "<tr>"+ 
                "<td>"+arrDatos[i].id+"</td>"+
                "<td>"+arrDatos[i].nombre+"</td>"+
                "<td>"+arrDatos[i].descripcion+"</td>"+
                "<td>"+arrDatos[i].nombreEstado+"</td>"+
                "<td>"+arrDatos[i].caducidad+"</td>"+
                "<td>"+arrDatos[i].nombrePrioridad+"</td>"+
                "<td> <a href='./info_cliente?id="+arrDatos[i].idCliente+"'>"+arrDatos[i].nombreCliente+" </a></td>"+
                '<td class = "text-sm">'+
                    '<a type = "button" name = "'+i+'" onclick = "completarTarea(this)" ><i class="material-icons opacity-10">check_circle</i></a>'+
                    '<a type = "button" name = "'+i+'" onclick = "showDocumentoTarea('+arrDatos[i].id+')" ><i class="material-icons opacity-10">upload_file</i></a>'+
                '</td>'
                "</tr>"

                $("#tbodyTableTareasUsuario").append(content);
            }
                
            dataTable = $('#dateTable-tareasUsuario').DataTable(dataTableOptions);
            dataTableIsInicialized = true;
        }
    });
}

showTU();

function completarTarea(item){
    var idTarea = arrDatos[item.name].id;
    var datos = new FormData();
    datos.append("id", idTarea);
    Swal.fire({
    title: "¿Desea completar la tarea?",
    text: "No se podran revertir estos cambios",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#19d939",
    cancelButtonColor: "#d33",
    cancelButtonText: "Cancelar",
    confirmButtonText: "Completar"
    }).then((result) => {
    if (result.isConfirmed) {
        $.ajax ({
            type: "post",
            url: ruta_completar_tarea,
            data: datos,
            processData: false,
            contentType: false,

            beforeSend: function(objeto) {
            //$("#datatable-search").html("Mensaje: Cargando...");
            },
            success: function(datos) {
                //console.log (datos);
                showTU();
                if (datos == 1)alertsuccess ("Completado", "Tarea completada con exito");
                else alertdanger ("Error","Error desconocido intente de nuevo");
            }
        });
    }
    });
}

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


    var calendar = new FullCalendar.Calendar(document.getElementById("calendar"), {
    contentHeight: 'auto',
    initialView: "",
    headerToolbar: {
        start: 'title', // will normally be on the left. if RTL, will be on the right
        center: '',
        end: 'today prev,next' // will normally be on the right. if RTL, will be on the left
    },
    selectable: false,
    editable: false,
    events: [

    ],
    views: {
        month: {
        titleFormat: {
            month: "long",
            year: "numeric"
        }
        },
        agendaWeek: {
        titleFormat: {
            month: "long",
            year: "numeric",
            day: "numeric"
        }
        },
        agendaDay: {
        titleFormat: {
            month: "short",
            year: "numeric",
            day: "numeric"
        }
        }
    },
    });

    calendar.render();

    
    arrDatos.forEach(tarea => {
        var nombre = tarea.nombre;
        if (tarea.estado === null) var fecha =  tarea.created_at;
        else var fecha = tarea.caducidad;
        console.log(fecha);
        if (tarea.estado == 2) {
            calendar.addEventSource({
                events: [ // put the array in the `events` property
                    {
                    title: nombre,
                    start: fecha,
                    className: 'bg-gradient-info'
                    }
                ]
            });
        }

    });
    

    //calendar.removeAllEvents();






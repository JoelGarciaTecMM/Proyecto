var arrDatos = "";
const modalNuevo = new bootstrap.Modal ("#agregarCliente");
const modalEditar = new bootstrap.Modal ("#editarCliente");
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
function showClientes(){
    if (dataTableIsInicialized == true) dataTable.destroy();
    $.ajax ({
    type: "GET",
    url: ruta_get_clientes,
    async: false,

        beforeSend: function(objeto) {
        //$("#datatable-search").html("Mensaje: Cargando...");
        },
        success: function(result) {
            arrDatos = result
            $("#tbodyTableClientes").html("");
            for (var i = 0; i < arrDatos.length; i ++){
                var content = "<tr>"+ 
                "<td>"+arrDatos[i].id+"</td>"+
                "<td>"+arrDatos[i].nombre+"</td>"+
                "<td>"+arrDatos[i].apellido+"</td>"+
                "<td>"+arrDatos[i].correo+"</td>"+
                "<td>"+arrDatos[i].telefono+"</td>"+
                "<td>"+arrDatos[i].curp+"</td>"+
                '<td class = "text-sm">'+
                    '<a type = "button" name = "'+i+'" onclick = "showEditarCliente(this)" ><i class="material-icons text-secondary opacity-10">edit</i></a>'+
                    '<a type = "button" href = "./info_cliente?id='+arrDatos[i].id+'"><i class="material-icons text-secondary opacity-10">person</i></a>'+
                    '<a type = "button" name = "'+i+'" onclick = "eliminarCliente(this)" ><i class="material-icons text-secondary opacity-10">delete</i></a>'+
                '</td>'+
                "</tr>"

                $("#tbodyTableClientes").append(content);
            }
            dataTable = $('#dataTable-clientes').DataTable(dataTableOptions);
            dataTableIsInicialized = true;
        }
    });
}

showClientes();


//function para crear proyectos

$("#formNuevoCliente").on("submit",function(event){
    event.preventDefault();
    var datos = new FormData(this);
    console.log (datos);

    $.ajax ({
        type: "POST",
        url: ruta_post_clientes,
        data: datos,
        processData: false,
        contentType: false,

        beforeSend: function(objeto) {
        //$("#datatable-search").html("Mensaje: Cargando...");
        },
        success: function(datos) {
        console.log (datos);
        showClientes();
        modalNuevo.hide();
        if (datos == 1)alertsuccess ("Completado", "Cliente creado con exito");
        else alertdanger ("Error","Error desconocido intente de nuevo");
        //document.getElementById("formNuevoCliente").reset();
        }
    });
})

//funcion para mostrar la informacion a editar

function showEditarCliente(item){
    var p = item.name;
    console.log(arrDatos);
    $("#ecId").val(arrDatos[p].id);
    $("#ecNombre").val(arrDatos[p].nombre);
    $("#ecApellido").val(arrDatos[p].apellido);
    $("#ecCorreo").val(arrDatos[p].correo);
    //console.log(document.getElementById("epCliente"));
    $("#ecTelefono").val(arrDatos[p].telefono);
    $("#ecCurp").val(arrDatos[p].curp);
    modalEditar.show();
}

//funcion para editar la informacion

$("#formEditarCliente").on("submit",function(event){
    event.preventDefault();
    var datos = new FormData(this);
    //datos.append("idCliente",$("#ecId").val());
    $.ajax ({
        type: "post",
        url: ruta_put_clientes,
        data: datos,
        processData: false,
        contentType: false,

        beforeSend: function(objeto) {
        //$("#datatable-search").html("Mensaje: Cargando...");
        },
        success: function(datos) {
        //console.log(datos);
        showClientes();
        modalEditar.hide();
        if (datos == 1)alertsuccess ("Completado", "Cliente actualizado con exito");
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
    title: "¿Eliminar el usuario?",
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
            url: ruta_delete_clientes,
            data: datos,
            processData: false,
            contentType: false,

            beforeSend: function(objeto) {
            //$("#datatable-search").html("Mensaje: Cargando...");
            },
            success: function(datos) {
                console.log (datos);
                showClientes();
                if (datos == 1)alertsuccess ("Completado", "Cliente Eliminada con exito");
                else alertdanger ("Error","Error desconocido intente de nuevo");
            }
        });
    }
    });
}





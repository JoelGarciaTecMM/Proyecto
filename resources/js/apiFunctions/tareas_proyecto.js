var arrDatos = "";
const modalNuevo = new bootstrap.Modal ("#agregarTarea_proyecto");
const modalEditar = new bootstrap.Modal ("#editarTarea_proyecto");

//funcion para mostrar los proyectos
function showTP(){
    let datos = {"id" : id_proyecto,};

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
                "<td>"+arrDatos[i].estado+"</td>"+
                "<td>"+arrDatos[i].idUsuario+"</td>"+
                '<td class = "text-sm">'+
                    '<a type = "button" name = "'+i+'" onclick = "showEditarCliente(this)" ><i class="material-icons opacity-10">edit</i></a>'+
                    '<a type = "button" name = "'+i+'" onclick = "eliminarCliente(this)" ><i class="material-icons opacity-10">delete</i></a>'+
                '</td>'+
                "</tr>"

                $("#tbodyTareasProyecto").append(content);
            }
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
            }
        });
    }
    });
}





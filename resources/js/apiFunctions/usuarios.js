var arrDatos = "";
const modalNuevo = new bootstrap.Modal ("#agregarUsuario");
const modalEditar = new bootstrap.Modal ("#editarUsuario");
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
function showUsuarios(){
    if (dataTableIsInicialized == true) dataTable.destroy();
    $.ajax ({
    type: "GET",
    url: ruta_get_usuarios,
    async: false,

        beforeSend: function(objeto) {
        //$("#datatable-search").html("Mensaje: Cargando...");
        },
        success: function(result) {
            //console.log(result);
            arrDatos = result
            $("#tbodyTableUsuarios").html("");
            for (var i = 0; i < arrDatos.length; i ++){
                var content = "<tr>"+ 
                "<td>"+arrDatos[i].id+"</td>"+
                "<td>"+arrDatos[i].nombre+ " " +arrDatos[i].apellido+"</td>"+
                "<td>"+arrDatos[i].correo+"</td>"+
                "<td>"+arrDatos[i].nombreRol+"</td>"+
                '<td class = "text-sm">'+
                    '<a type = "button" name = "'+i+'" onclick = "showEditarUsuario(this)" ><i class="material-icons opacity-10">edit</i></a>'+
                    '<a type = "button" name = "'+i+'" onclick = "eliminarUsuario(this)" ><i class="material-icons opacity-10">delete</i></a>'+
                '</td>'+
                "</tr>"

                $("#tbodyTableUsuarios").append(content);
            }
            dataTable = $('#dateTable-usuarios').DataTable(dataTableOptions);
            dataTableIsInicialized = true;

            fillRol();
        }
    });
}

showUsuarios();


//function para crear proyectos

$("#formNuevoUsuario").on("submit",function(event){
    event.preventDefault();
    var datos = new FormData(this);
    console.log (datos);

    $.ajax ({
        type: "POST",
        url: ruta_post_usuarios,
        data: datos,
        processData: false,
        contentType: false,

        beforeSend: function(objeto) {
        //$("#datatable-search").html("Mensaje: Cargando...");
        },
        success: function(datos) {
        //console.log (datos);
        showUsuarios();
        modalNuevo.hide();
        if (datos == 1)alertsuccess ("Completado", "Usuario creado con exito");
        else alertdanger ("Error","Error desconocido intente de nuevo");
        }
    });
})

//funcion para mostrar la informacion a editar

function showEditarUsuario(item){
    var p = item.name;
    console.log(arrDatos);
    $("#euId").val(arrDatos[p].id);
    $("#euNombre").val(arrDatos[p].nombre);
    $("#euApellido").val(arrDatos[p].apellido);
    $("#euCorreo").val(arrDatos[p].correo);
    $("#euTipoUsuario").val(arrDatos[p].tipoUsuario);
    modalEditar.show();
}

//funcion para editar la informacion

$("#formEditarUsuario").on("submit",function(event){
    event.preventDefault();
    var datos = new FormData(this);
    datos.append("idUsuario",$("#euId").val());
    $.ajax ({
        type: "post",
        url: ruta_put_usuarios,
        data: datos,
        processData: false,
        contentType: false,

        beforeSend: function(objeto) {
        //$("#datatable-search").html("Mensaje: Cargando...");
        },
        success: function(datos) {
        //console.log(datos);
        showUsuarios();
        modalEditar.hide();
        if (datos == 1)alertsuccess ("Completado", "Usuario actualizado con exito");
        else alertdanger ("Error","Error desconocido intente de nuevo");
        }
    });
})


//function para eliminar proyecto

function eliminarUsuario(item){
    var idProyecto = arrDatos[item.name].id;
    var datos = new FormData();
    datos.append("id", idProyecto);
    Swal.fire({
    title: "¿Eliminar usuario?",
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
            url: ruta_delete_usuarios,
            data: datos,
            processData: false,
            contentType: false,

            beforeSend: function(objeto) {
            //$("#datatable-search").html("Mensaje: Cargando...");
            },
            success: function(datos) {
                //console.log (datos);
                showUsuarios();
                if (datos == 1)alertsuccess ("Completado", "Usuario Eliminada con exito");
                else alertdanger ("Error","Error desconocido intente de nuevo");
            }
        });
    }
    });
}

function fillRol(){
        var inn = '<option selected >Seleciones una opciones</option>';
    $.ajax ({
    type: "GET",
    url: ruta_rol_todos,
    async: false,

        beforeSend: function(objeto) {
        //$("#datatable-search").html("Mensaje: Cargando...");
        },
        success: function(result) {
            console.log (result);
            $("#nuTipoUsuario").html("");
            $("#euTipoUsuario").html("");
            for (var i = 0; i < result.length; i ++){
                inn += "<option value='"+result[i].id+"'>"+result[i].nombre+"</option>";
            }
            $("#nuTipoUsuario").html(inn);
            $("#euTipoUsuario").html(inn);
        }
    });
}





var arrDatos = "";

//funcion para mostrar los proyectos
function showInfoUsuario(){
    info = {
        'idUsuario' : idUsuario,
    };
    $.ajax ({
    type: "POST",
    url: ruta_get_usuario,
    data: info,
    async: false,

        beforeSend: function(objeto) {
        //$("#datatable-search").html("Mensaje: Cargando...");
        },
        success: function(result) {
            console.log(result);
            $('#ajustesNombre').val(result[0].nombre);
            $('#ajustesApellido').val(result[0].apellido);
            $('#ajustesCorreo').val(result[0].correo);
            $('#ajustesContraseña').val('');
        }
    });
}

showInfoUsuario();



$("#formAjustes").on("submit",function(event){
    event.preventDefault();
    var datos = new FormData(this);
    datos.append("idUsuario",idUsuario);
    $.ajax ({
        type: "post",
        url: ruta_post_usuarios,
        data: datos,
        processData: false,
        contentType: false,

        beforeSend: function(objeto) {
        //$("#datatable-search").html("Mensaje: Cargando...");
        },
        success: function(datos) {
        showInfoUsuario();
        if (datos == 1)alertsuccess ("Completado", "Informacion actualizada con exito");
        else alertdanger ("Error","Error desconocido intente de nuevo");
        }
    });
})





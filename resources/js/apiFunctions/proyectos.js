        var arrDatos = "";
        const modalNuevo = new bootstrap.Modal ("#agregarProyecto");
        const modalEditar = new bootstrap.Modal ("#actualizarProyecto");
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
        function showProyectos(){
            if (dataTableIsInicialized == true) dataTable.destroy();
            $.ajax ({
            type: "GET",
            url: ruta_get_proyectos,
            async: false,

                beforeSend: function(objeto) {
                //$("#datatable-search").html("Mensaje: Cargando...");
                },
                success: function(result) {
                    arrDatos = result
                    $("#tbodyTableProyectos").html("");
                    for (var i = 0; i < arrDatos.length; i ++){
                        var content = "<tr>"+ 
                        "<td>"+arrDatos[i].id+"</td>"+
                        "<td>"+arrDatos[i].nombre+"</td>"+
                        "<td>"+arrDatos[i].nombreCliente+"</td>"+
                        "<td>"+arrDatos[i].nombreEstado+"</td>"+
                        "<td>"+arrDatos[i].fechaInicio+"</td>"+
                        "<td>"+arrDatos[i].fechaFin+"</td>"+
                        "<td>"+arrDatos[i].descripcion+"</td>"+
                        '<td class = "text-sm">'+
                            '<a type = "button" name = "'+i+'" onclick = "showEditarProyecto(this)" ><i class="material-icons text-secondary opacity-10">edit</i></a>'+
                            '<a type = "button" href = "./tareas_proyecto?id='+arrDatos[i].id+'"><i class="material-icons text-secondary opacity-10">task</i></a>'+
                            '<a type = "button" name = "'+i+'" onclick = "eliminarProyecto(this)" ><i class="material-icons text-secondary opacity-10">delete</i></a>'+
                        '</td>'+
                        "</tr>"

                        $("#tbodyTableProyectos").append(content);
                    }
                    dataTable = $('#tablaProyectos').DataTable(dataTableOptions);
                    dataTableIsInicialized = true;
                    showUsuarios();
                    showEstadoProyecto();
                }
            });
        }

        showProyectos();


        //function para crear proyectos

        $("#formNuevoProyecto").on("submit",function(event){
            event.preventDefault();
            var datos = new FormData(this);
            console.log (datos);

            $.ajax ({
                type: "POST",
                url: ruta_post_proyecto,
                data: datos,
                processData: false,
                contentType: false,

                beforeSend: function(objeto) {
                //$("#datatable-search").html("Mensaje: Cargando...");
                },
                success: function(datos) {
                console.log (datos);
                showProyectos();
                document.getElementById("formNuevoProyecto").reset();
                modalNuevo.hide();
                if (datos == 1)alertsuccess ("Completado", "Proyecto agregado con exito");
                else alertdanger ("Error","Error desconocido intente de nuevo");
                }
            });
        })

        //funcion para mostrar la informacion a editar

        function showEditarProyecto(item){
            var p = item.name;
            console.log(arrDatos);
            $("#epId").val(arrDatos[p].id);
            $("#epNombre").val(arrDatos[p].nombre);
            $("#epFechaInicio").val(arrDatos[p].fechaInicio);
            $("#epCliente").val(arrDatos[p].idCliente);
            //console.log(document.getElementById("epCliente"));
            $("#epFechaFin").val(arrDatos[p].fechaFin);
            $("#epDecripcion").html(arrDatos[p].descripcion);
            $("#epEstado").val(arrDatos[p].estado);
            modalEditar.show();
        }

        //funcion para editar la informacion

        $("#formEditarProyecto").on("submit",function(event){
            event.preventDefault();
            var datos = new FormData(this);
            datos.append("idProyecto",$("#epId").val());
            $.ajax ({
                type: "post",
                url: ruta_put_proyecto,
                data: datos,
                processData: false,
                contentType: false,

                beforeSend: function(objeto) {
                //$("#datatable-search").html("Mensaje: Cargando...");
                },
                success: function(datos) {
                console.log(datos);
                showProyectos();
                modalEditar.hide();
                if (datos == 1)alertsuccess ("Completado", "Proyecto actualizado con exito");
                else alertdanger ("Error","Error desconocido intente de nuevo");
                }
            });
        })


        //function para eliminar proyecto

        function eliminarProyecto(item){
            var idProyecto = arrDatos[item.name].id;
            var datos = new FormData();
            datos.append("id", idProyecto);
            Swal.fire({
            title: "¿Eliminar proyecto?",
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
                    url: ruta_delete_proyecto,
                    data: datos,
                    processData: false,
                    contentType: false,

                    beforeSend: function(objeto) {
                    //$("#datatable-search").html("Mensaje: Cargando...");
                    },
                    success: function(datos) {
                        console.log (datos);
                        showProyectos();
                        if (datos == 1)alertsuccess ("Completado", "Proyecto eliminado con exito");
                        else alertdanger ("Error","Error desconocido intente de nuevo");
                    }
                });
            }
            });
        }

        function showUsuarios(){
            var inn = '<option selected >Seleciones una opciones</option>';
            $.ajax ({
            type: "GET",
            url: ruta_get_usuariosTodos,
            async: false,

                beforeSend: function(objeto) {
                //$("#datatable-search").html("Mensaje: Cargando...");
                },
                success: function(result) {
                    //console.log (result);
                    $("#npCliente").html("");
                    $("#epCliente").html("");
                    for (var i = 0; i < result.length; i ++){
                        inn += "<option value='"+result[i].id+"'>"+result[i].nombre+"</option>";
                    }
                    //console.log(inn);
                    $("#npCliente").html(inn);
                    $("#epCliente").html(inn);
                }
            });
        }

        function showEstadoProyecto (){
            var inn = '<option selected >Seleciones una opciones</option>';
            $.ajax ({
            type: "GET",
            url: ruta_get_estadoProyecto,
            async: false,

                beforeSend: function(objeto) {
                //$("#datatable-search").html("Mensaje: Cargando...");
                },
                success: function(result) {
                    //console.log (result);
                    $("#epEstado").html("");
                    for (var i = 0; i < result.length; i ++){
                        inn += "<option value='"+result[i].id+"'>"+result[i].nombre+"</option>";
                    }
                    //console.log(inn);
                    $("#epEstado").html(inn);
                }
            });
        }









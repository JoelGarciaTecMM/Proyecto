

    //funcion para cambiar la pagina

    function changePage(page){
        var pagResume = document.getElementById("pagResume");
        var pagProyectos = document.getElementById("pagProyectos");
        var pagDocumentos = document.getElementById("pagDocumentos");
        if (page == "resumen"){
            pagResume.style.display = "";
            pagProyectos.style.display = "none";
            pagDocumentos.style.display = "none";
        }
        else if (page == "proyectos"){
            pagResume.style.display = "none";
            pagProyectos.style.display = "";
            pagDocumentos.style.display = "none";
        }
        else if (page == "documentos"){
            pagResume.style.display = "none";
            pagProyectos.style.display = "none";
            pagDocumentos.style.display = "";
        }
        else ;
    }
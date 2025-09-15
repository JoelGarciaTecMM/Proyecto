var arrDatos = "", totalTareas = "", totalProyectos = "";


function showtTareas (){
    $.ajax ({
        type: "GET",
        url: ruta_tTareas,
        async: false,
    
            beforeSend: function(objeto) {
            //$("#datatable-search").html("Mensaje: Cargando...");
            },
            success: function(result) {
                totalTareas = result;
            }
        });
}

showtTareas();

function showtProyecto (){
    $.ajax ({
        type: "GET",
        url: ruta_tProyectos,
        async: false,
    
            beforeSend: function(objeto) {
            //$("#datatable-search").html("Mensaje: Cargando...");
            },
            success: function(result) {
                totalProyectos = result;
            }
        });
}

function Tareas (){
    $.ajax ({
        type: "GET",
        url: ruta_tareas,
        async: false,
    
            beforeSend: function(objeto) {
            //$("#datatable-search").html("Mensaje: Cargando...");
            },
            success: function(result) {
                arrDatos = result;
                console.log(result);
            }
        });
}


 //graficas 
    //grafica Proyectos
    showtProyecto();
    $("#totalProyectos").html(totalProyectos.total);
    const char1 = document.getElementById('chart-bar-proyecto');

    new Chart(char1, {
    type: 'pie',
    data: {
        labels: ['Completado', 'Pendiente'],
        datasets: [{
        label: '# of Votes',
        backgroundColor:[ '#17c1e8','#e91e63' ],
        data: [totalProyectos.completadas, totalProyectos.noCompletadas],
        borderWidth: 1
        }]
    },
    options: {
        scales: {
        y: {
            beginAtZero: true
        }
        }
    }
    });


    //grafica tareas
    showtTareas();
    const chartTareas = document.getElementById('chart-bar-tareas');
    $("#totalTareas").html(totalTareas.total);
    new Chart(chartTareas, {
    type: 'pie',
    data: {
        labels: ['Completado', 'Pendiente'],
        datasets: [{
        label: '# of Votes',
        backgroundColor:[ '#17c1e8','#e91e63' ],
        data: [totalTareas.completadas, totalTareas.noCompletadas],
        borderWidth: 1
        }]
    },
    options: {
        scales: {
        y: {
            beginAtZero: false
        }
        }
    }
    });

    //calendario
    Tareas();


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






function init() {
    cargaInicial();
    graficos();

    $("#formularioTipoCambio").on("submit", function (e) {
        guardarTipoCambio(e);
    });

}

function cargaInicial() {

    descargarImagenChart();
    informacionGeneralDia();

    // Carga inicial del tipo de cambio


    limpiarDatos(true);
    mostrarModalDolarUnaVez()
}

function agregarReservarMesa(idmesa) {
    var codigoVerificacion = aleatorioNumero(1, 100);
    location.href = "./venta.php?&idmesa=" + idmesa + "&codigoVerificacion=" + codigoVerificacion + "";
}

function aleatorioNumero(minimo, maximo) {
    return Math.round(Math.random() * (maximo - minimo) + minimo);
}

function descargarImagenChart() {
    $("#btn-venta").click(function() {
        $("#chartventas").get(0).toBlob(function(blob) {
            saveAs(blob, "Grafica_ventas_10dias.png");
        });
    });

    $("#btn-productos").click(function() {
        $("#chartproductomasvendido").get(0).toBlob(function(blob) {
            saveAs(blob, "Grafica_productos_masvendidos.png");
        });
    });
}

function graficos() {
// ==============================================================
// Bar chart Venta
// ==============================================================


    $.post("../ajax/escritorio.php?op=listarUltimas10Ventas", data => {
        var datos = JSON.parse(data);
        var totaldatos = [];
        var totallabel = [];

        for (var i = 0; i < datos.length; i++) {
            totallabel.push("Dia: " + datos[i][0]);
            totaldatos.push(datos[i][1]);
        }



        var ctx2 = document.getElementById("chartventas").getContext("2d");
        var data2 = {
            labels: totallabel,
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "#398bf7",
                    strokeColor: "#398bf7",
                    highlightFill: "#398bf7",
                    highlightStroke: "#398bf7",
                    data: totaldatos
                }
            ]
        };

        var chart2 = new Chart(ctx2).Bar(data2, {
            scaleBeginAtZero: true,
            scaleShowGridLines: true,
            scaleGridLineColor: "rgba(0,0,0,.005)",
            scaleGridLineWidth: 0,
            scaleShowHorizontalLines: true,
            scaleShowVerticalLines: true,
            barShowStroke: true,
            barStrokeWidth: 0,
            tooltipCornerRadius: 2,
            barDatasetSpacing: 3,
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
            responsive: true
        });
    });

// ==============================================================
// Bar chart Producto
// ==============================================================
    $.post("../ajax/escritorio.php?op=listarProductosmasVendidos10", data => {
        var datos = (JSON.parse(data));
        var totalProductos = [];
        var labelNombres = [];

        for (var i = 0; i < datos.length; i++) {
            totalProductos.push(datos[i][1]);
            labelNombres.push(datos[i][0]);
        }

        console.log(totalProductos);
        var ctx2 = document.getElementById("chartproductomasvendido").getContext("2d");
        var data2 = {
            labels: labelNombres,
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "#28a745",
                    strokeColor: "#28a745",
                    highlightFill: "#28a745",
                    highlightStroke: "#28a745",
                    data: totalProductos
                }
            ]
        };

        var chart2 = new Chart(ctx2).Bar(data2, {
            scaleBeginAtZero: true,
            scaleShowGridLines: true,
            scaleGridLineColor: "rgba(0,0,0,.005)",
            scaleGridLineWidth: 0,
            scaleShowHorizontalLines: true,
            scaleShowVerticalLines: true,
            barShowStroke: true,
            barStrokeWidth: 0,
            tooltipCornerRadius: 2,
            barDatasetSpacing: 3,
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
            responsive: true
        });
    });
}

function informacionGeneralDia() {
    $.post("../ajax/escritorio.php?op=cantidadVendidaProductosHoy",data =>{
        var datos = JSON.parse(data);
        $("#txtProductos").html(datos.totalproductoshoy)
    });

    $.post("../ajax/escritorio.php?op=cantidadFacturasHoy",data => {
        var datos = JSON.parse(data);
        $("#txtFacturas").html(datos.totalfacturas)
    });
}

// TIPO DE CAMBIO
function mostrarTipoCambio() {
    $.post("../ajax/configuraciones.php?op=mostrarTipoCambio", data => {
        data = JSON.parse(data);
        if (data === null) {
            $("#dolaraCordoba").val("");
            $("#cordobaaDolar").val("");
            $("#idtipocambio").val("");
        } else {
            $("#dolaraCordoba").val(data.dolarcordoba);
            $("#cordobaaDolar").val(data.cordobadolar);
            $("#idtipocambio").val(data.idtipocambio);
        }

    });
}

function guardarTipoCambio(e) {
    e.preventDefault();

    var formData = new FormData($("#formularioTipoCambio")[0]);

    $.ajax({
        url: "../ajax/configuraciones.php?op=insertarTipoCambio",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (datos) {
            swal("Bien hecho!", datos, "success");
            limpiarDatos(true);
            $('.close').click();
        }
    });
}

function limpiarDatos(flag) {
    if (flag) {
        $('#btnNuevoDatosCambio').show();
        $('#btnGuardarDatosCambio').hide();
        $('#btnCancelarDatosCambio').hide();
        mostrarTipoCambio();
    } else {
            $('#btnGuardarDatosCambio').show();
            $('#btnCancelarDatosCambio').show();
            $('#btnNuevoDatosCambio').hide();

            $("#dolaraCordoba").val("");
            $("#cordobaaDolar").val("");
            $("#idtipocambio").val("");
    }
}

function mostrarModalDolarUnaVez(){
    var fecha = new Date ();
    var fechaActual = fecha.getDate() + "/" + (fecha.getMonth() +1) + "/" + fecha.getFullYear()
    var fechaActualLocalStorage = localStorage.getItem("fechasistema");


    var variableFacturacion = $("#variableSessionFacturacion").val();
    var variableAdmistracion = $("#variableSessionAdministracion").val();

    if (fechaActualLocalStorage === null){
        localStorage.setItem("fechasistema", fechaActual);

        if (parseInt(variableFacturacion) === 1 || parseInt(variableAdmistracion) === 1) {
            $("#agregarNuevoMontoCambio").modal('show');
        }

    } else {
        if (fechaActual !== fechaActualLocalStorage) {
            localStorage.removeItem("fechasistema");
            localStorage.setItem("fechasistema", fechaActual);

            if (parseInt(variableFacturacion) === 1 || parseInt(variableAdmistracion) === 1) {
                $("#agregarNuevoMontoCambio").modal('show');
            }
        }
    }

}


init();
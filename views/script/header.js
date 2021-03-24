function init(){
      //EVENTOSN PARA VALIDAR EL HEADER PARA VENTA 
      var pathname = window.location.pathname;
      pathname.split("/")[3] === "venta.php" ? $("#topbar").remove() : ""; 
     
      var paddin_top = document.getElementById('page-wrapper');
      pathname.split("/")[3] === "venta.php" ? paddin_top.style.cssText = 'padding-top: 0px !important' : ""; 
      
      //EVENTOS PARA VALIDAR EL LOGO
      pathname.split("/")[3] !== "venta.php" ? $("#id_logo").remove() : "";

      var padding_top_imagen = document.getElementById('left-sidebar');
      pathname.split("/")[3] === "venta.php" ? padding_top_imagen.style.cssText = 'padding-top: 0px !important' : "";

}

function cerrarSesion() {
    var variableFacturacion = $("#variableSessionFacturacion").val();
    var variableAdmistracion = $("#variableSessionAdministracion").val();


    if (parseInt(variableFacturacion) === 1 || parseInt(variableAdmistracion) === 1) {
        $.post("../ajax/venta.php?op=aperturaCaja", data => {
            if (parseInt(data) != 0) {
                swal({
                    title: "Estas seguro de salir del sistema?",
                    text: "Te gustaria hacer el cierre de caja antes de cerrar sesion?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#28a745",
                    confirmButtonText: "Hacer el Cierre de Caja",
                    cancelButtonText: "Cerrar Sesion",
                    closeOnConfirm: false,
                    closeOnCancel: false
                }, function (isConfirm) {
                    if (isConfirm) {
                        $(location).attr("href","cashclose.php");
                    } else {
                        location.href = "../ajax/usuario.php?op=salir"
                    }
                });
            } else {
                location.href = "../ajax/usuario.php?op=salir"
            }
        });
    } else {
        location.href = "../ajax/usuario.php?op=salir"
    }


}

function validarAperturaCaja() {
    $.post("../ajax/venta.php?op=aperturaCaja", data => {
        if (parseInt(data) === 0) {
            swal({
                title: "Caja cerrada",
                text: "Es necesario hacer una apertura de caja para poder facturar, porfavor realice una apertura de caja",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#28a745",
                cancelButtonText: "Volver",
                confirmButtonText: "Realizar apertura de caja",
            }, function () {
                $(location).attr("href", "cashopening.php");
            });
        } else {
            $(location).attr("href", "venta.php");
        }
    });
}

function validarAperturaCajaOrdenesMesa() {
    $.post("../ajax/ordenesmesa.php?op=aperturaCaja", data => {
        if (parseInt(data) === 0) {
            swal({
                title: "Caja cerrada",
                text: "Es necesario hacer una apertura de caja para poder hacer ordenes de mesas, por favor notifica a tus superiores para que realicen la apertura de caja del dia",
                type: "warning",
                confirmButtonColor: "#28a745",
                confirmButtonText: "Recargar Pagina",
            }, function () {
                location.reload();
            });
        } else {
            $(location).attr("href", "ordenesmesa.php");
        }
    });
}


init();


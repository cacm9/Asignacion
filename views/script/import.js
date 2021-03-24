function init() {
    controlElmentos();
}

function controlElmentos() {
    $("#btnProcesarllamadas").show();
    $("#btnProcesarVisitas").show();
    $("#btnCargarllamadas").hide();
    $("#btnCargarVisitas").hide();
}

function Procesarllamadas() {
    var Form = new FormData($('#filesllamadas')[0]);
    $.ajax({
        url: "../ajax/import.php?op=Procesarllamadas",
        type: "post",
        data: Form,
        async: true,
        processData: false,
        contentType: false,
        success: function (data) {
            if (data != 0) {
                console.log(data);
                $("#btnProcesarllamadas").hide();
                $("#btnCargarllamadas").show();
            }
            else{
                swal("ERROR", "No se ecuentra ningun Archivo Cargado ","error");
            }

        }
    });
}

function uploadllamadas() {
    
    $('#btnCargarllamadas').attr("disabled", true);
    var Form = new FormData($('#filesllamadas')[0]);
    $.ajax({
        url: "../ajax/import.php?op=Cargarllamadas",
        type: "post",
        data: Form,
        async: true,
        processData: false,
        contentType: false,
        success: function (data) {
            swal("Bien hecho!", data.split(",")[0], data.split(",")[1]);
            $('#btnCargarllamadas').attr("disabled", false);
            console.log(data);
        }
    }); 
}

function uploadVisitas() {
    $('#btnCargarVisitas').attr("disabled", true);
    var Form = new FormData($('#filesVisitas')[0]);
    $.ajax({
        url: "../ajax/import.php?op=CargarVisitas",
        type: "post",
        data: Form,
        processData: false,
        contentType: false,
        success: function (data) {
            swal("Bien hecho!", data.split(",")[0], data.split(",")[1]);
            $('#btnCargarVisitas').attr("disabled", false);
            console.log(data);
        }
    });
}

init();
/*     $(document).ready(function(){
    $('#filesllamadas').submit(function(event){
        if($('#fileLlamada').val())
        {
            event.preventDefault();
            $('#targetLayer').hide();
            $(this).ajaxSubmit({
                target: '#targetLayer',
                beforeSubmit:function(){
                    $('.progress-bar').width('50%');
                },
                uploadProgress: function(event, position, total, percentageComplete)
                {
                    $('.progress-bar').animate({
                        width: percentageComplete + '%'
                    }, {
                        duration: 1000
                    });
                },
                success:function(){
                    $('#targetLayer').show();
                },
                resetForm: true
            });
        }
        return false;
    });
}); */
function init(){
$("#card_form_usuarios").hide()
$("#card_tbl_usuarios").show()
}

function validarFormulariosUsuarios(tag){
   if(tag){
    $("#card_form_usuarios").hide()
    $("#card_tbl_usuarios").show() 
    $("#btnGuardar").hide()
    $("#btnActualizar").hide() 
    $("#btnLimpiar").hide() 
    
   }
    else{
      
        $("#card_form_usuarios").show()
        $("#card_tbl_usuarios").hide() 
        $("#btnGuardar").show()
        $("#btnActualizar").hide() 
        $("#btnLimpiar").show() 
        }
}

init()
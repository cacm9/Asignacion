<?php

require '../config/conexion.php';

class Import{

    public function _construct()
    {

    }

    public function Importarllamadas($Contrato,$Resultado,$MotivoNoPago,$FechaGestion,$Agencia,$ComentarioFinal){
       //set_time_limit(500);
        $sw = true;
        $sql = "INSERT INTO Tbl_Gestiones_Asignacion2 
        (Contrato,
        Resultado,
        Motivo_NoPago,
        Fecha_Gestion,
        Agencia,
        Comentario_Final)
         VALUES
         ($Contrato,
          '$Resultado', 
          '$MotivoNoPago',
          '$FechaGestion',
          '$Agencia',
          '$ComentarioFinal'
           )";
         ejecutarConsulta($sql) or $sw=false;
         return $sw;

    }

    public function ImportarVisitas($Contrato,$MotivoBaja,$Agencia,$FechaVisita,$ComentarioFinal){
        $sw = true;
        $sql = "INSERT INTO Tbl_Gestiones_Asignacion_Visita2 
        (Contrato,
        Motivo_Baja,
        Agencia,
        Fecha_Visita,
        Coment_Final)
         VALUES
         ($Contrato,
          '$MotivoBaja', 
          '$Agencia',
          '$FechaVisita',
          '$ComentarioFinal'
           )";
         ejecutarConsulta($sql) or $sw=false;
         return $sw;

    }
}
?>
<?php

$host = "172.26.12.53\SQL2008";
$usuario = "sa";
$contraseña = "Claro2020";

try {
    $conexion = new PDO("sqlsrv:Server=$host;Database=Asginacion_Cobranza", $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$conexion->exec("set names utf8");
    //return $conexion;
} catch (PDOException $error) {
    echo "No se pudo conectar a la BD: " . $error->getMessage();
}
if (!function_exists('ejecutarConsulta')) {
    function ejecutarConsulta($sql)
    {
        global $conexion;
        $query = $conexion->query($sql) or die($conexion->errorCode());
        return $query;
    }

    // function ejecutarConsultaSimpleFila($sql)
    // {
    //     global $conexion;
    //     $query = $conexion->query($sql);
    //     $row = $query->fetch_assoc();
    //     return $row;
    // }

    // function ejecutarConsulta_retornarID($sql)
    // {
    //     global $conexion;
    //     $query = $conexion->query($sql);
    //     return $conexion->insert_id;
    // }

    function limpiarCadena($str)
    {
        global $conexion;
        $str = $conexion->quote(trim($str));
        return htmlspecialchars($str);
    }
}

<?php
require_once "../conexcionDataBase.php";

    $stmt = conection::conectar()->prepare("SELECT `id`, codigo, nombre_evento, fecha_inicio, hora_inicio, fecha_fin, hora_fin, lugar_evento, '' as opciones FROM `teventos`");

    $stmt -> execute();

    $respuesta = $stmt -> fetchAll();

echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
?>
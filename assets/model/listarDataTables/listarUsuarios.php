<?php
require_once "../conexcionDataBase.php";

    $stmt = conection::conectar()->prepare("SELECT `id`, Nombre, Usuario, Contraseña, Rol, Estado, '' as opciones FROM `usuarios`");

    $stmt -> execute();

    $respuesta = $stmt -> fetchAll();

echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
?>
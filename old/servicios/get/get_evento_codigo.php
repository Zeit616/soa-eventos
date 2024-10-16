<?php
require_once "../comun/conexcionDataBase.php";

$codigo = $_GET["codigo"];

$stmt = $conexcion->prepare("SELECT * FROM teventos WHERE codigo = :codigo");
$stmt->bindParam(':codigo', $codigo, PDO::PARAM_STR);
$stmt->execute();

$respuesta = $stmt->fetchAll();

if (count($respuesta) > 0) {
    echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
} else {
    // Si no hay resultados, enviar un mensaje de error
    echo json_encode(array("error" => "No se encontraron coincidencias"), JSON_UNESCAPED_UNICODE);
}
?>

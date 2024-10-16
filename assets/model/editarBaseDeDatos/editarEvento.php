<?php
require_once "../conexcionDataBase.php";
if(true){

        $idEvento = $_POST["idEvento"];
        $nombreEvento = $_POST["nombreEvento"];
        $fechaInicio = $_POST["fechaInicio"];
        $horaInicio = $_POST["horaInicio"];
        $fechaFin = $_POST["fechaFin"];
        $horaFin = $_POST["horaFin"];
        $lugarEvento = $_POST["lugarEvento"];

    //Registrar en tabla usuaruos
        $stmt = conection::conectar()->prepare("UPDATE teventos SET nombre_evento='$nombreEvento', fecha_inicio='$fechaInicio', hora_inicio='$horaInicio', fecha_fin='$fechaFin', hora_fin='$horaFin', lugar_evento='$lugarEvento' WHERE `id`='$idEvento'");    
        $stmt -> execute();    
    //retornar registro exitoso    
        echo(1);
}else{
    //retornar error
        echo("Fallo al editar");
};
?>
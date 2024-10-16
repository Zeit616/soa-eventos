<?php
require_once "../conexcionDataBase.php";
if(true){
    
    
    $nombreEvento = $_POST["nombreEvento"];
    $fechaInicio = $_POST["fechaInicio"];
    $horaInicio = $_POST["horaInicio"];
    $fechaFin = $_POST["fechaFin"];
    $horaFin = $_POST["horaFin"];
    $lugarEvento = $_POST["lugarEvento"];

    //Establecer codigo  
        $NombreSinEspacios = str_replace(" ", "", $nombreEvento);
        $PrimeraLetraNombre = $NombreSinEspacios[0];
        $SegundaLetraNombre = $NombreSinEspacios[1];        
        $LetraAntepenultimaNombre = $NombreSinEspacios[-2];
        $LetraUltimaNombre = $NombreSinEspacios[-1];
        $fecha = date("Ymd");
        $hora = date("H");
        $minuto = date("i");
        $segundo = date("s");
        $tiempo_actual = $fecha . $hora . $minuto . $segundo;
        $codigo = $PrimeraLetraNombre . $SegundaLetraNombre . $LetraAntepenultimaNombre . $LetraUltimaNombre . $tiempo_actual[2] . $tiempo_actual[3] . $tiempo_actual[4] . $tiempo_actual[5] . $tiempo_actual[11] . $tiempo_actual[12];

    //Registrar en tabla usuarios
        $stmt = conection::conectar()->prepare("INSERT INTO teventos (codigo, nombre_evento, fecha_inicio, hora_inicio, fecha_fin, hora_fin, lugar_evento) VALUES ('$codigo', '$nombreEvento', '$fechaInicio', '$horaInicio', '$fechaFin', '$horaFin', '$lugarEvento')");
        $stmt -> execute();    
    //retornar registro exitoso    
        echo(1);
}else{
    //retornar error
        echo("Fallo al registrar");
};
?>
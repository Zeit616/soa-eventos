<?php
    $dsn = "mysql:dbname=eventos;host=localhost";
    try{
        $conexcion = new PDO($dsn, "root", "");
        $conexcion->setAttribute(PDO::ATTR_EMULATE_PREPARES, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        exit("Falla de conexcion");
    }
?>
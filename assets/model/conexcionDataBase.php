<?php
    class conection{
        static public function conectar(){
            try{
                $conn = new PDO("mysql:host=localhost;dbname=eventos", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                return $conn;
            }
            catch(PDOException $e){
                echo "conexcion fallida por: " . $e->getMessage();
            }
        }
    }
?>
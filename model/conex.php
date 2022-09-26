<?php 
    $password = "";
    $usuario = "root";
    $bdname = "biblioteca";

    try{
        $bd = new PDO(
            'mysql:host=localhost;
            dbname='.$bdname,
            $usuario,
            $password,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
    } catch(Exception $e){
        echo "ERROR DE CONEXION".$e->getMessage();
    }
?>
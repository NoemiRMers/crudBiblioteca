<?php
    include_once '../model/conex.php';

    /*$isbn = $_GET['isbn'];
    $sentencia = $bd->prepare("delete from libro where isbn = ?");
    $resultado = $sentencia->execute([$isbn]);

    if($resultado){
        header('Location: ../index.php?');
    } else{
        echo "ERROR";
    }*/

    $sentencia = $bd->query("select estado from libro");
    $estado = $sentencia->fetchAll(PDO::FETCH_OBJ);
    print_r($estado)
?>

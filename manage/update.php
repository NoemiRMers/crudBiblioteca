<?php include '../templates/header.php' ?>
<?php
    //VALIDACION si los valores recibidos via POST estan vacios
    if(empty($_POST['inputTitulo']) || empty($_POST['inputAutor']) || empty($_POST['inputGenero'])){
    ?>
    <!--MENSAJE DE ALERTA-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="alert alert-warning alert-dismissible show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <strong>ERROR AL GUARDAR CAMBIOS. NO PUEDES DEJAR ESPACIOS VACIOS</strong>
                    </button>
                    <button type="button" class="btn btn-info"><a href="../index.php" class="link-light">Regresar</a></button>
                </div>
            </div>
        </div>
    </div>

<?php
exit();
    }
    
    include_once '../model/conex.php';

    $isbn = $_POST['inputIsbn'];
    $titulo = $_POST['inputTitulo'];
    $autor = $_POST['inputAutor'];
    $genero = $_POST['inputGenero'];

    $sentencia = $bd->prepare("update libro set titulo=?, autor=?, genero=? where isbn=?");
    $respuesta = $sentencia->execute([$titulo,$autor,$genero,$isbn]);

    if($respuesta){
        header("Location: ../index.php?");
    } else{
        echo "ERROR AL GUARDAR LOS CAMBIOS";
    }
?>

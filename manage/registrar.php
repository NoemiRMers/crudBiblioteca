<?php include 'agregar.php' ?>
<?php
    //VALIDACION si los valores recibidos via POST estan vacios
    if(empty($_POST['inputIsbn']) || empty($_POST['inputTitulo']) || empty($_POST['inputAutor']) || empty($_POST['inputGenero'])){
        //header('Location: index.php?');
        //echo "ERROR REGISTRO";
    ?>
    <!--MENSAJE DE ALERTA-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="alert alert-warning alert-dismissible show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <strong>COMPLETA TODOS LOS CAMPOS PARA REGISTRAR UN NUEVO LIBRO</strong>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <?php
        exit();
    }

    include_once '../model/conex.php';
    $isbn =$_POST['inputIsbn'];
    $titulo = $_POST['inputTitulo'];
    $autor = $_POST['inputAutor'];
    $genero = $_POST['inputGenero'];

    $sentencia = $bd->prepare("insert into libro (isbn,titulo,autor,genero) values (?,?,?,?); ");
    $resultado = $sentencia->execute([$isbn,$titulo,$autor,$genero]);
    exit();
    if($resultado === true){
        header("Location: ../index.php");
        
    }else{
        echo "REGISTRO NO REALIZADO";
    }
?>
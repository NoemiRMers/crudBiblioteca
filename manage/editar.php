<?php include '../templates/header.php' ?>

<?php
    include_once '../model/conex.php';
    $isbn = $_GET['isbn'];
    $sentencia = $bd->prepare("select * from libro where isbn = ?");
    $sentencia->execute([$isbn]);
    $libro = $sentencia->fetch(PDO::FETCH_OBJ);

?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <h5 class="card-title text-center">EDITAR LIBRO</h5>
                <form action="update.php" method="POST">
                    <div class="mb-3">
                    <label>TITULO</label>
                    <input class="form-control" type="text" name="inputTitulo" value=<?php echo $libro->titulo ?>
                    </div>
                    <div class="mb-3">
                    <label>AUTOR</label>
                    <input class="form-control" type="text" name="inputAutor" value=<?php echo $libro->autor ?>>
                    </div> 
                    <div class="mb-3">
                    <label>GENERO</label>
                    <input class="form-control" type="text" name="inputGenero" value=<?php echo $libro->genero ?>>
                    </div>
                    <input type="hidden" name="inputIsbn" value=<?php echo $libro->isbn ?>/>
                    <input type="submit" class="btn btn-info" value="Guardar"/>
                    <button type="button" class="btn btn-info"><a href="../index.php" class="link-light">Salir</a></button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include '../templates/footer.php' ?>
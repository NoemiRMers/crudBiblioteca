<?php include '../templates/header.php' ?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-7">
      <div class="card">
        <h5 class="card-title text-center">AGREGAR LIBRO</h5>
        <form action="registrar.php" method="POST">
            <div class="mb-3">
            <label>ISBN</label>
            <input class="form-control" type="text" pattern= "[0-9]{8,11}" placeholder="ingrese No. de ISBN" autofocus name="inputIsbn">
            </div>
            <div class="mb-3">
            <label>TITULO</label>
            <input class="form-control" type="text" placeholder="ingrese titulo" name="inputTitulo">
            </div>
            <div class="mb-3">
            <label>AUTOR</label>
            <input class="form-control" type="text" placeholder="ingrese autor" name="inputAutor">
            </div> 
            <div class="mb-3">
            <label>GENERO</label>
            <input class="form-control" type="text" placeholder="ingrese genero" name="inputGenero">
            </div>
            <input type="hidden" name="idButton" value="1"/>
            <input type="submit" class="btn btn-info" value="Guardar" href="../index.php "/>
            <button type="button" class="btn btn-info"><a href="../index.php" class="link-light">Salir</a></button>
          </form>
      </div>
        
    </div>
  </div>
</div>

<?php include '../templates/footer.php' ?>
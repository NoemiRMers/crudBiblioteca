<?php include 'templates/header.php' ?>
<?php
  include_once 'model/conex.php';
  $sentencia = $bd->query("select * from libro");
  $libro = $sentencia->fetchAll(PDO::FETCH_OBJ);
  //print_r($libro);
?>
<div class="container">
  <div class="row">
    <div class="col- p-3">
      <table class="table table-bordered">
        <thead>
          <tr class="table-info">
            <th scope="col">ISBN</th>
            <th scope="col">TÍTULO</th>
            <th scope="col">AUTOR</th>
            <th scope="col">GÉNERO</th>
            <th scope="col">ACCIONES</th>
          </tr>
        </thead>
        <tbody>
          <?php
          //<?php include 'templates/footer.php' 
            foreach($libro as $dato){
          ?>
          <tr class="table-light">
            <td><?php echo $dato->isbn ?></td>
            <td><?php echo $dato->titulo ?></td>
            <td><?php echo $dato->autor ?></td>
            <td><?php echo $dato->genero ?></td>
            <td>
                <button type="button" class="btn btn-info"><a href="manage/editar.php?isbn=<?php echo $dato->isbn ?>" class="link-light">Editar</a></button>
                <button type="button" class="btn btn-info"><a href="manage/editar.php?isbn=<?php echo $dato->isbn ?>" class="link-light">Eliminar</a></button>
            </td>
          </tr>
          <?php
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col">
      <button type="button" class="btn btn-info"><a href="manage/agregar.php" class="link-light">Agregar libro</a></button>
    </div>
  </div>
</div>


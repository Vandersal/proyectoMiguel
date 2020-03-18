<?php
    include("db.php"); 
    include('includes/header.php');


    if(!isset($_SESSION['rol'])){
        header('location: ./login.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: ./login.php');
        }
    }


?>

<main class="container p-4">
    <h1>Bienvenido administrador</h1>
  <div class="row">
    <div class="col-md-4">
      
      <div class="card card-body">
        <form action="save_task.php" method="POST">

          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre completo del paciente" autofocus>
          </div>

          <div class="form-group">
            <input type="number" name="edad" class="form-control" placeholder="Edad" autofocus>
          </div>

          <div class="form-group">
            <input type="text" name="estado_civil" class="form-control" placeholder="Estado civil" autofocus>
          </div>

          <div class="form-group">
            <input type="text" name="genero" class="form-control" placeholder="Genero" autofocus>
          </div>

          <div class="form-group">
            <textarea name="direccion" rows="2" class="form-control" placeholder="Direccion del paciente"></textarea>
          </div>

          <div class="form-group">
            <input type="tel" name="telefono" class="form-control" placeholder="Telefono" autofocus>
          </div>

          <div class="form-group">
            <input type="email" name="correo" class="form-control" placeholder="Correo electronico" autofocus>
          </div>

          <div class="form-group">
            <input type="text" name="lugar_nacimiento" class="form-control" placeholder="Lugar de nacimiento" autofocus>
          </div>

          <div class="form-group">
            <input type="text" name="lugar_residencia" class="form-control" placeholder="Lugar de residencia" autofocus>
          </div>

          <div class="form-group">
          <a>Fecha de nacimiento</a>
            <input type="date" name="fecha_nacimiento" class="form-control" placeholder="Fecha de nacimiento" autofocus>
          </div>

          <div class="form-group">
            <input type="text" name="escolaridad" class="form-control" placeholder="Escolaridad" autofocus>
          </div>


          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Guardar paciente">

        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre del paciente</th>
            <th>Edad</th>
            <th>Genero</th>
              <th>Fecha consulta</th>
            <th>Opcion</th>
          </tr>
        </thead>
        <tbody>
        <a>Pacientes</a>
          <?php
          $query = "SELECT * FROM pacientes";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['edad']; ?></td>
            <td><?php echo $row['genero']; ?></td>
              <td><?php echo $row['fecha_inicio_consulta']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
                <a href="see.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                    <i class="far fa-eye"></i>
                </a>
                <a href="consulta.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                    <i class="fas fa-stethoscope"></i>
                </a>
                <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                    <i class="far fa-trash-alt"></i>
                </a>

            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>

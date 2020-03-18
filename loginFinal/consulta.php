<?php
include("db.php");

if  (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM pacientes WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombre = $row['nombre'];
        $edad = $row['edad'];
        $genero = $row['genero'];
        $fecha_inicio_consulta = $row['fecha_inicio_consulta'];

    }
}

if (isset($_POST['save_task'])) {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $genero = $_POST['genero'];
    $fecha_inicio_consulta = $row['fecha_inicio_consulta'];


    $query = "INSERT INTO pacientes(fecha_inicio_consulta) VALUES ('$fecha_inicio_consulta')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die("Query Failed.");
    }

    $_SESSION['message'] = 'Datos guardados';
    $_SESSION['message_type'] = 'Excelente';
    header('Location: admin.php');

}


?>
<?php include('includes/header.php'); ?>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="consulta.php?id=<?php echo $_GET['id']; ?>" method="POST">

                        <div class="form-group">
                            <a>Nombre</a>
                            <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Nombre del paciente">
                        </div>
                        <div class="form-group">
                            <a>Edad</a>
                            <input name="edad" type="number" class="form-control" value="<?php echo $edad; ?>">
                        </div>
                        <div class="form-group">
                            <a>Genero</a>
                            <input name="genero" type="text" class="form-control" value="<?php echo $genero; ?>">
                        </div>
                        <div class="form-group">
                            <a>Fecha de inicio de la consulta</a>
                            <input name="fecha_inicio_consulta" type="date" class="form-control" value="<?php echo $fecha_inicio_consulta; ?>" >
                        </div>
                        <button class="btn-success" name="save_task">
                            Actualizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>
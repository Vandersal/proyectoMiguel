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
        $estado_civil = $row['estado_civil'];
        $genero = $row['genero'];
        $direccion = $row['direccion'];
        $telefono = $row['telefono'];
        $correo = $row['correo'];
        $lugar_nacimiento = $row['lugar_nacimiento'];
        $lugar_residencia = $row['lugar_residencia'];
        $fecha_nacimiento = $row['fecha_nacimiento'];
        $escolaridad = $row['escolaridad'];
        $fecha_inicio_consulta = $row['fecha_inicio_consulta'];

    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $estado_civil = $_POST['estado_civil'];
    $genero = $_POST['genero'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $lugar_nacimiento = $_POST['lugar_nacimiento'];
    $lugar_residencia = $_POST['lugar_residencia'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $escolaridad = $_POST['escolaridad'];
    $fecha_inicio_consulta = $_POST['fecha_inicio_consulta'];


    $query = "UPDATE pacientes set nombre = '$nombre', edad = '$edad', estado_civil = '$estado_civil', genero = '$genero', direccion = '$direccion', telefono = '$telefono', correo = '$correo', lugar_nacimiento = '$lugar_nacimiento', lugar_residencia = '$lugar_residencia', fecha_nacimiento = '$fecha_nacimiento', escolaridad= '$escolaridad', fecha_inicio_consulta = '$fecha_inicio_consulta' WHERE id=$id";
    $result = mysqli_query($conn, $query);


}

?>
<?php include('includes/header.php'); ?>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">

                        <div class="form-group">
                            <a>Nombre</a>
                            <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Nombre del paciente">
                        </div>
                        <div class="form-group">
                            <a>Edad</a>
                            <input name="edad" type="number" class="form-control" value="<?php echo $edad; ?>">
                        </div>
                        <div class="form-group">
                            <a>Estado civil</a>
                            <input name="estado_civil" type="text" class="form-control" value="<?php echo $estado_civil; ?>">
                        </div>
                        <div class="form-group">
                            <a>Genero</a>
                            <input name="genero" type="text" class="form-control" value="<?php echo $genero; ?>">
                        </div>
                        <div class="form-group">
                            <a>Dirección</a>
                            <input name="direccion" type="text" class="form-control" value="<?php echo $direccion; ?>" >
                        </div>
                        <div class="form-group">
                            <a>Telefono</a>
                            <input name="telefono" type="text" class="form-control" value="<?php echo $telefono; ?>" >
                        </div>
                        <div class="form-group">
                            <a>Correo</a>
                            <input name="correo" type="email" class="form-control" value="<?php echo $correo; ?>" >
                        </div>
                        <div class="form-group">
                            <a>Lugar de nacimiento</a>
                            <input name="lugar_nacimiento" type="text" class="form-control" value="<?php echo $lugar_nacimiento; ?>" >
                        </div>
                        <div class="form-group">
                            <a>Lugar de residencia</a>
                            <input name="lugar_residencia" type="text" class="form-control" value="<?php echo $lugar_residencia?>" >
                        </div>
                        <div class="form-group">
                            <a>Fecha de nacimiento</a>
                            <input name="fecha_nacimiento" type="date" class="form-control" value="<?php echo $fecha_nacimiento; ?>" >
                        </div>
                        <div class="form-group">
                            <a>Escolaridad</a>
                            <input name="escolaridad" type="text" class="form-control" value="<?php echo $escolaridad; ?>" >
                        </div>
                        <div class="form-group">
                            <a>Fecha de inicio de la consulta</a>
                            <input name="fecha_inicio_consulta" type="text" class="form-control" value="<?php echo $fecha_inicio_consulta; ?>" >
                        </div>



                        <button class="btn-success" name="update">
                            Volver
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>
<?php

include('db.php');

if (isset($_POST['save_task'])) {
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
  

  $query = "INSERT INTO pacientes(nombre, edad, estado_civil, genero, direccion, telefono, correo, lugar_nacimiento, lugar_residencia, fecha_nacimiento, escolaridad) VALUES ('$nombre', '$edad', '$estado_civil', '$genero', '$direccion', '$telefono', '$correo', '$lugar_nacimiento', '$lugar_residencia', '$fecha_nacimiento', '$escolaridad')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Datos guardados';
  $_SESSION['message_type'] = 'Excelente';
  header('Location: admin.php');

}

?>

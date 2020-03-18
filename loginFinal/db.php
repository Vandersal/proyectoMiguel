<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  'yamile',
  'hospital_datos'
) or die(mysqli_erro($mysqli));

?>

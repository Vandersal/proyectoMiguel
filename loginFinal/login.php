<?php
    include_once 'database.php';
    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset(); 
        session_destroy(); 
    }
    
    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: admin.php');
            break;

            case 2:
                header('location: medico.php');
            break;

            default:
        }
    }

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT *FROM usuarios WHERE username = :username AND password = :password');
        $query->execute(['username' => $username, 'password' => $password]);

        $row = $query->fetch(PDO::FETCH_NUM);
        
        if($row == true){
            $rol = $row[3];
            
            $_SESSION['rol'] = $rol;
            switch($rol){
                case 1:
                    header('location: admin.php');
                break;

                case 2:
                header('location: medico.php');
                break;
                case 3:
                    header('location: medico.php');
                break;
                default:
            }
        }else{
            // no existe el usuario
            echo "Nombre de usuario o contraseña incorrecto";
        }
    
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="styleLogin/style.css">
</head>
<body>

<div class="login">
  <div class="login-triangle"></div>  
  <h2 class="login-header">Inicia sesion</h2>
  <form method="POST" class="login-container">
        <p><input type="text" name="username" placeholder="Nombre de usuario"></p>
        <p><input type="password" name="password" placeholder="Contraseña"></p>
        <p><input type="submit" value="Iniciar sesion"></p>
  </form>
</div>


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>
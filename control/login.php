<?php
include_once 'includes/db.php';

session_start();

if (isset($_GET['cerrar_sesion'])) {
    session_unset();
    session_destroy();
}

if (isset($_SESSION['rol'])) {
    switch ($_SESSION['rol']) {
        case 1:
            header('location: inicio.php');
            break;

        case 2:
            header('location: inicio1.php');
            break;

        default:
    }
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $db = new Database();
    $query = $db->connect()->prepare('SELECT * FROM administradores WHERE username = :username AND password = :password');
    $query->execute(['username' => $username, 'password' => $password]);

    $row = $query->fetch(PDO::FETCH_NUM);
    if ($row == true) {
        $rol = $row[5];
        $_SESSION['rol'] = $rol;

        switch ($_SESSION['rol']) {
            case 1:
                header('location: inicio.php');
                break;

            case 2:
                header('location: inicio1.php');
                break;

            default:
        }
    } else {
        // no existe el usuario
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'El usuario o contraseña son incorrectos',
                });
            });
            </script>";
    }
}
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesiones</title>

    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body>
    <div class="login-content">
        <div class="imagen_ius1">
            <img src="vistas/assets/dist/img/ius1.jpg" class="imagen_ius" alt="User Image">
        </div>
        <form class="form-login" action="" method="POST">
            <h2>Iniciar sesión</h2>
            <p>Nombre de Usuario: <br>
                <input type="text" name="username">
            </p>
            <p>Contraseña: <br>
                <input type="password" name="password">
            </p>
            <p class="center"><input type="submit" value="Iniciar Sesión"></p>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
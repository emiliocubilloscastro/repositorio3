<?php
include 'conexion.php';

// Obtener los datos del formulario de inicio de sesión
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

// Realizar la autenticación del usuario
$query = "SELECT tipoUsuario FROM usuarios WHERE email = '$email' AND contrasena = '$contrasena'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // El usuario está autenticado, obtener el tipo de usuario
    $row = mysqli_fetch_assoc($result);
    $tipoUsuario = $row['tipoUsuario'];
    
    if ($tipoUsuario == 'administrador') {
        header("Location: crud.php");
        exit();
    } elseif ($tipoUsuario == 'usuario') {
        header("Location: ingresoPacienteUsuario.php");
        exit();
    }
}

// Tipo de usuario desconocido o error de autenticación
header("Location: error.php");
exit();
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <!--<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
   
    <link rel="stylesheet" href="css/estilos.css">

<?php
include 'conexion.php';

session_start();

//$email = $_POST['email'];
//$contrasena = $_POST['contrasena'];
/////////////////////////////////////////////////////

// Obtener los usuarios de la base de datos

$sql = "SELECT idUsuario, email, nombreUsuario FROM usuarios";
$result = mysqli_query($conn, $sql);
                        // Verificar si se encontraron resultados
if (mysqli_num_rows($result) > 0) {
    $_SESSION['email'] = $email;
 
    header("location: /proyectophp/ingresarPacienteBootstrap.php");

   echo '<option value="' . $row['idUsuario'] . '">' . $row['nombreUsuario'] . '</option>';

} else {
echo '<option disabled>No se encontraron usuarios</option>';
}
///////////////////////////////////////////////////////   
/*$q = "SELECT * from usuarios where email = '$email' and contrasena = '$contrasena'";

$consulta = mysqli_query($conexion,$q);*/


?>
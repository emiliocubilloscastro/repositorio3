<?php
include 'conexion.php';
// Obtener los valores ingresados en el formulario
//$idSolicitudTraslado = $_POST['idSolicitudTraslado'];
$runPaciente = $_POST['runPaciente'];
//$fechaRecepcion = $_POST['fechaRecepcion'];
$fechaHoraTraslado = $_POST['fechaHoraTraslado'];
$idTipoTraslado = $_POST['idTipoTraslado'];
$idServicio = $_POST['idServicio'];
$idUbicacionOrigen = $_POST['idUbicacionOrigen'];
$idUbicacionDestino = $_POST['idUbicacionDestino'];
$idRequerimiento = $_POST['idRequerimiento'];
$idTripulacion = $_POST['idTripulacion'];
//$idUsuario = $_POST['idUsuario'];
$idEstado = $_POST['idEstado'];

// Realizar la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "traslado";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Insertar la solicitud en la base de datos
$sql = "INSERT INTO solicitudambulancia (runPaciente, fechaHoraTraslado, idTipoTraslado, idServicio, idUbicacionOrigen, idUbicacionDestino, idRequerimiento, idTripulacion, idEstado)
        VALUES ('$runPaciente', '$fechaHoraTraslado', '$idTipoTraslado', '$idServicio', '$idUbicacionOrigen', '$idUbicacionDestino', '$idRequerimiento', '$idTripulacion', '$idEstado')";

if (mysqli_query($conn, $sql)) {
    echo "Solicitud guardada exitosamente.";
    header("Location: ingresarnuevo.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>

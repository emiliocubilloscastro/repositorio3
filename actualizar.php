<?php
// Obtener los datos enviados por el formulario
$idSolicitud = $_POST['idSolicitud'];
$fechaHoraTraslado = $_POST['fechaHoraTraslado'];
$runPaciente = $_POST['runPaciente'];
$idTipoTraslado = $_POST['idTipoTraslado'];

// Realizar la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "traslado";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si se estableció la conexión correctamente
if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}

// Actualizar los datos en la base de datos
$sql = "UPDATE solicitudambulancia SET fechaHoraTraslado='$fechaHoraTraslado', runPaciente='$runPaciente', idTipoTraslado='$idTipoTraslado' WHERE idSolicitud='$idSolicitud'";

if ($conn->query($sql) === TRUE) {
    echo "Solicitud de Ambulancia actualizada correctamente";
} else {
    echo "Error al actualizar la Solicitud de Ambulancia: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>


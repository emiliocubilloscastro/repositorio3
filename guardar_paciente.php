<?php
include'conexion.php';

// Obtener los datos del formulario
$run = $_POST['run'];
$dv = $_POST['dv'];
$nombre = $_POST["nombre"];
$apellidoP = $_POST["apellidoPaterno"];
$apellidoM = $_POST["apellidoMaterno"];
$fechaNacimiento = $_POST["fechaNacimiento"];
$edad = $_POST['edad'];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$diagnostico = $_POST["diagnostico"];
$prevision = $_POST["prevision"];

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

// Insertar los datos del paciente en la tabla correspondiente
$sql = "INSERT INTO paciente (runPaciente, digitoVerificador, nombre, apellidoPaterno, apellidoMaterno, fechaNacimiento, edad, direccion, telefono, diagnostico, prevision)
        VALUES ('$run', '$dv', '$nombre', '$apellidoP', '$apellidoM','$fechaNacimiento','$edad', '$direccion', '$telefono', '$diagnostico', '$prevision')";

if ($conn->query($sql) === TRUE) {
    echo "El paciente se ha guardado correctamente";
    header("Location: crud.php");

} else {
    echo "Error al guardar el paciente: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>





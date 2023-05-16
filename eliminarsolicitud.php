<?php
// Obtener el idSolicitud a eliminar desde la URL o el formulario
$idSolicitud = $_GET['idSolicitud'];

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

// Verificar si se ha confirmado la eliminación
if (isset($_POST['confirmar']) && $_POST['confirmar'] === '1') {
    // Eliminar la solicitud de la tabla correspondiente
    $sql = "DELETE FROM solicitudambulancia WHERE idSolicitud = '$idSolicitud'";

    if ($conn->query($sql) === TRUE) {
        echo "La solicitud ha sido eliminada correctamente";
    } else {
        echo "Error al eliminar la solicitud: " . $conn->error;
    }
} else {
    // Mostrar un mensaje de confirmación antes de eliminar
    echo "¿Estás seguro de que deseas eliminar esta solicitud?<br>";
    echo "<form action='eliminarsolicitud.php?idSolicitud=$idSolicitud' method='POST'>";
    echo "<input type='hidden' name='confirmar' value='1'>";
    echo "<input type='submit' value='Confirmar'>";
    echo "</form>";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

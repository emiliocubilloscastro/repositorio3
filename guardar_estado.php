<?php
include 'conexion.php';
// Obtener los datos enviados por el formulario
$id = $_POST['id'];
$estado = $_POST['estado'];

// Actualizar el estado de la solicitud en la base de datos
$query = "UPDATE solicitud SET estado = '$estado' WHERE id = $id";
$result = mysqli_query($conn, $query);

// Verificar si la actualización fue exitosa
if ($result) {
    echo "El estado se ha actualizado correctamente.";
} else {
    echo "Hubo un error al actualizar el estado.";
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>

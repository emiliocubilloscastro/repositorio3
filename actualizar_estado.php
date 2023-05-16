<?php
include 'conexion.php';
// Obtener el ID de la solicitud a actualizar
$idEstado = $_GET['idEstado'];

// Realizar la consulta para obtener los datos de la solicitud específica
$query = "SELECT idEestado FROM solicitudambulancia WHERE idEstado = $idEstado";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Obtener la lista de estados desde la base de datos
$query_estados = "SELECT * FROM estado";
$result_estados = mysqli_query($conn, $query_estados);

// Verificar si se encontraron registros
if (mysqli_num_rows($result_estados) > 0) {
    echo "<form method='post' action='guardar_estado.php'>";
    echo "<input type='hidden' name='id' value='$id'>";
    echo "<label for='estado'>Estado:</label>";
    echo "<select name='estado' id='estado'>";

    // Mostrar las opciones de estado en el combobox
    while ($row_estados = mysqli_fetch_assoc($result_estados)) {
        $estado = $row_estados['descripcion'];
        $selected = ($estado == $row['estado']) ? "selected" : "";
        echo "<option value='$estado' $selected>$estado</option>";
    }

    echo "</select>";
    echo "<input type='submit' value='Actualizar'>";
    echo "</form>";
} else {
    echo "No se encontraron estados.";
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>